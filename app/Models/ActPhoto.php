<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\NewAct;

class ActPhoto extends Model
{
    use HasFactory;

    public function newact() {
        return $this->belongsTo(NewAct::class);
    }
}
