<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Media extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getPathImagesAttribute(){
        if($this->tipe == 'galery' || $this->tipe == 'reward'){
            if (Storage::disk('public')->exists($this->path)) {
                return Storage::url($this->path);
            }
            return Storage::url('noimage.jpg');
        }

    }
}
