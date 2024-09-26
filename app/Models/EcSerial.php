<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EcSerial extends Model
{
    use HasFactory;

    public function ecMember()
    {
        return $this->belongsTo(EcMember::class, 'ec_id');       
    }
}
