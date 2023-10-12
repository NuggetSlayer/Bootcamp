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
        'language',
        'title',
        'description',
        'banner',
        'slug',
    ];

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function enrollment()
    {
        return $this->hasMany(Enrollment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function delete()
    {
        // Delete associated lessons
        $this->videos()->delete();
        $this->enrollment()->delete();

        return parent::delete();
    }
}
