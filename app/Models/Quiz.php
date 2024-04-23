<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany; // tambahkan ini
use App\Models\Question;
use App\Models\user;
class Quiz extends Model
{
    use HasFactory;
    public function question(): HasMany
    {
        return $this->hasMany(Question::class);
    }
}
