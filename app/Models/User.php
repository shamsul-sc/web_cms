<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'mobile_no',
        'is_role',
        'email',
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    static public function getUser()
    {
        return self::select('users.*')
            ->orderBy('users.id', 'desc')
            ->get();

    }
    static public function getSingle($id)
    {
        return self::find($id);
    }

    public function ecMember()
    {
        return $this->belongsTo(EcMember::class, 'user_id'); # One to Many relation
        // return $this->belongsToMany(EcMember::class, 'user_id'); # Many to Many relation
    }
    public function profile()
    {
        return $this->hasOne(UserProfile::class);
    }
    

}