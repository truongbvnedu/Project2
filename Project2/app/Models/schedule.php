<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    use HasFactory;
    protected $fillable = [
        'date', 'class_id', 'status'
    ];

    public function scheduleInfo()
    {
        return $this->hasMany(schedule_info::class, 'schedule_id');
    }

    public function class()
    {
        return $this->belongsTo(Classroom::class, 'class_id');
    }
}
