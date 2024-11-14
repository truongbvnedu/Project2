<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tuition extends Model
{
    use HasFactory;
    protected $fillable = [
        'basic', 'facilities', 'extracurricular', 'other', 
        'classfund', 'healthinsurance', 'costsincurred'
    ];

    public function tuitionInfos()
    {
        return $this->hasMany(tuition_info::class, 'tuition_id');
    }
}
