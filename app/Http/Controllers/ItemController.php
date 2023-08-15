<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\ItemSet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    public function index()
    {
        return view('menu.item.index', [
            'title' => "Alat",
            'item_sets' => ItemSet::where('status', '1')->orderBy('name')->get(),
            'items' => Item::orderBy('name')->get(),
        ]);
    }

    public function store(Request $request)
    {
        $existingCount = Item::count();

        // Menghasilkan kode berdasarkan jumlah data yang sudah ada
        $code = 'ALT' . str_pad($existingCount + 1, 3, '0', STR_PAD_LEFT);

        $validatedData = $request->validate([
            'foto' => "required|max:5120",
            'item_set_id' => "required|max:255",
            'name' => "required|max:255",
            'kondisi' => "required|max:255",
            'status' => "required|max:255",
        ]);
        $validatedData['code'] = $code;

        if ($request->foto) {
            $validatedData['foto'] = $request->file('foto')->store('gambar-alat');
        }

        Item::create($validatedData);
        return redirect('/items')->with('success', 'Alat berhasil ditambahkan!');
    }

    public function show(Item $item)
    {
        //
    }

    public function update(Request $request, Item $item)
    {
        $validatedData = $request->validate([
            'foto' => "max:5120",
            'item_set_id' => "required|max:255",
            'name' => "required|max:255",
            'code' => "required|unique:items,code," . $item->id,
            'kondisi' => "required|max:255",
            'status' => "required|max:255",
        ]);

        if ($request->file('foto')) {
            if ($request->oldImage) {
                Storage::delete($item->foto);
                $validatedData['foto'] = $request->file('foto')->store('gambar-alat');
            }
        }

        Item::where('id', $item->id)->update($validatedData);
        return redirect('/items')->with('success', 'Alat berhasil diperbaharui!');
    }

    public function destroy(Item $item)
    {
        //
    }
}
