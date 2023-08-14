<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $guarded = ['id'];
    protected $with = ['item_set'];

    use HasFactory;

    public function item_set()
    {
        return $this->belongsTo(ItemSet::class);
    }
}
