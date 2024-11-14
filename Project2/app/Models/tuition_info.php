<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tuition_info extends Model
{
    use HasFactory;
    protected $fillable = [
        'semester', 'tuition_id', 'month', 'user_id'
    ];

    public function tuition()
    {
        return $this->belongsTo(Tuition::class, 'tuition_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
