<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany; // tambahkan ini
use App\Models\Quiz;
class Question extends Model
{
    use HasFactory;

    public function quiz(): HasMany{
        return $this->HasMany(Quiz::class);
    }
}
