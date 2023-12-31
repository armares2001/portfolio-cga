<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
        'job',
        'actually_agency',
        'job_experience',
        'experience_dev_years',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}