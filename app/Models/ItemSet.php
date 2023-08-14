<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemSet extends Model
{
    protected $guarded = ['id'];
    protected $with = ['item'];

    use HasFactory;

    public function item()
    {
        return $this->hasMany(Item::class);
    }
}
