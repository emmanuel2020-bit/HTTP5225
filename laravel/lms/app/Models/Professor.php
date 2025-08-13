<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Professor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'department',
    ];

    /**
     * Get the course that the professor teaches.
     */
    public function course(): HasOne
    {
        return $this->hasOne(Course::class);
    }
}
