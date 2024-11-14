<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class learningProcess extends Model
{
    use HasFactory;
    protected $fillable = [
        'maths', 'natural', 'PE', 'soft_skills', 'civic', 
        'Vietnamese', 'subject', 'total', 'comment', 'childId'
    ];

    public function child()
    {
        return $this->belongsTo(Child::class, 'childId');
    }
}
