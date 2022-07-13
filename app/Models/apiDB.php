<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apiDB extends Model
{
    use HasFactory;

    public function bond(){
        return $this->hasMany(bondDB::class, 'bond_id');
    }
}
