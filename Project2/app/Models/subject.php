<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    use HasFactory;
     protected $fillable = [
        'name', 'status'
    ];

    public function scheduleInfos()
    {
        return $this->hasMany(schedule_info::class, 'subject_id');
    }
}
