<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'father_name', 'mother_name', 'blood_group', 
        'present_address', 'nid_number', 'gender', 'date_of_birth'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}