<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'photos',
    ];

    public function getUrlAttribute(){
        if($this->path){
            return Storage::url($this->path);
        }
        else{
            return [];
        }
    }
}
