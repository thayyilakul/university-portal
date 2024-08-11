<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Factories\StudentFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts = [
        'admission_date' => 'datetime:Y-m-d\Th:i'
    ];

    protected $fillable = ['name', 'age', 'teacher_id', 'class', 'admission_date', 'yearly_fees'];

    protected static function newFactory(): Factory
    {
        return StudentFactory::new();
    }

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
}
