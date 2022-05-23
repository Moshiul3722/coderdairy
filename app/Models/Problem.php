<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $with = ['media'];

    //Category relationship
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    //Category relationship
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    // Many to Many relationship
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'problems_tags', 'problem_id', 'tag_id', 'id');
    }

    // One to Many relationship
    public function media()
    {
        return $this->hasMany(Media::class, 'problem_id', 'id');
    }

    // Solutions

    public function solutions()
    {
        return $this->hasMany(Solution::class);
    }

    // change default route key name
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
