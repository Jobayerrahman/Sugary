<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryPlacement extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];
}
