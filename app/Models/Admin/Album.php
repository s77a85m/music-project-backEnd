<?php

namespace App\Models\Admin;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory, Sluggable;
    protected $guarded=[];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['title', 'id'],
                'separator'=>'_'
            ]
        ];
    }

    public function musics()
    {
        return $this->hasMany(Music::class);
    }

    public function getMusicsAlbumAttribute()
    {
        return $this->musics()->get();
    }

}
