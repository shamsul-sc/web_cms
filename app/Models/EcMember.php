<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EcMember extends Model
{
    use HasFactory;

    protected $fillable = ['ec_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function ecPosition()
    {
        return $this->belongsTo(EcPosition::class);
    }
    public function ec()
    {
        return $this->belongsTo(EcSerial::class);
    }
}
