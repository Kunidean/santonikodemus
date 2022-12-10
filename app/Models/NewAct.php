<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ActPhoto;

class NewAct extends Model
{
    use HasFactory;

    public function actphoto() {
        return $this->hasMany(ActPhoto::class);
    }
}
