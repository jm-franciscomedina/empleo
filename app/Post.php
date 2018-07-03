<?php

namespace App;
use Carbon\carbon;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=[
        'title', 'slug','excerpt','body','published_at','category','tags',
    ];
     protected $hidden = [
        'users',
    ];
    protected $dates = ['published_at'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function tags()
    {
    	return $this->belongsToMany(Tag::class);
    }
    public function scopePublished($query)
    {
    	$query->whereNotNull('published_at')->where('published_at', '<=', Carbon::now())->latest('published_at');
    }
}
