<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = [
        'password', 'email', 'name', 'id_number', 'address', 
        'role', 'status', 'img', 'gender', 'phone'
    ];

    public function children()
    {
        return $this->hasMany(Child::class, 'userId');
    }
    function feedback(){
        return $this->hasMany(Feedback::class, 'userId');
    }
}
