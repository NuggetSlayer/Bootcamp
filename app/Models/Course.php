<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasUuids;
    use HasFactory;
    protected $fillable = [
        'user_id',
        'category_id',
        'language_id',
        'title',
        'description',
    ];
}
