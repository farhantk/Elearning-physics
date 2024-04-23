<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\user;
class Quiz_attempt extends Model
{
    
    use HasFactory;

    protected $fillable = [
        'grade',
        'quiz_number',
        'attempt',
        'user_id',
    ];

    public function user(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
