<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;
    protected $table = 'class';

    protected $fillable = [
        'name', 'table', 'chair', 'other', 'userId'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }

    public function children()
    {
        return $this->hasMany(Child::class, 'classId');
    }
}
