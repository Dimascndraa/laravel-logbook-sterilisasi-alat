<?php

namespace App\Http\Controllers;

use App\Models\ItemSet;
use Illuminate\Http\Request;

class ItemSetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('menu.item-set.index', [
            'title' => 'Set Alat',
            'item_sets' => ItemSet::orderBy('name')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Mengecek apakah sudah ada data dalam tabel item_set
        $existingCount = ItemSet::count();

        // Menghasilkan kode berdasarkan jumlah data yang sudah ada
        $code = 'SET' . str_pad($existingCount + 1, 3, '0', STR_PAD_LEFT);

        $validatedData = $request->validate([
            'name' => 'max:255|required',
            'status' => 'required',
        ]);
        $validatedData['code'] = $code;

        ItemSet::create($validatedData);
        return redirect('/item-sets')->with('success', 'Set Alat berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ItemSet  $itemSet
     * @return \Illuminate\Http\Response
     */
    public function show(ItemSet $itemSet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ItemSet  $itemSet
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemSet $itemSet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ItemSet  $itemSet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItemSet $itemSet)
    {
        $validatedData = $request->validate([
            'name' => 'max:255|required',
            'code' => 'required|unique:item_sets,code,' . $itemSet->id,
            'status' => 'boolean|required',
        ]);

        ItemSet::where('id', $itemSet->id)->update($validatedData);
        return redirect('/item-sets')->with('success', 'Set Alat berhasil diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ItemSet  $itemSet
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemSet $itemSet)
    {
        //
    }
}
