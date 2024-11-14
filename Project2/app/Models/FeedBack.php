<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedBack extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'email',
        'name',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    } 
}
