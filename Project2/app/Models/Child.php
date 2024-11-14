<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'birth', 'status', 'gender', 'img', 
        'createDate', 'classId', 'userId'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }

    public function class()
    {
        return $this->belongsTo(Classroom::class, 'classId');
    }
}
