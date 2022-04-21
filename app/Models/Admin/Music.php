<?php

namespace App\Models\Admin;

use App\Models\User;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory, Sluggable;
    protected $table='musics';

    protected $guarded=[];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function style()
    {
        return $this->belongsTo(Style::class);
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

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function getIsFavoriteAttribute()
    {
        return $this->users()->where('user_id', auth()->id())->exists();
    }

    public function album()
    {
        return $this->belongsTo(Album::class);
    }

}
