<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Team extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getPathImagesAttribute(){
        if (Storage::disk('public')->exists($this->avatar)) {
            return Storage::url($this->avatar);
        }
        return Storage::url('noimage.jpg');

    }

}
