<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Factories\TeacherFactory;

class Teacher extends Model
{
    use HasFactory;

    protected $casts = [
        'joined_at' => 'datetime:Y-m-d\Th:i'
    ];

    protected $fillable = ['name', 'age', 'previous_experience', 'comments', 'joined_at'];

    protected static function newFactory(): Factory
    {
        return TeacherFactory::new();
    }
}
