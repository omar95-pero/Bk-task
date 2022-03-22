<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;
    public $guarded =  [];
    public function school()
    {
        return $this->belongsTo(School::class, 'school_id', 'id');
    }
}
