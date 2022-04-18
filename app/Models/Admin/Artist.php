<?php

namespace App\Models\Admin;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory, Sluggable;

    protected $guarded=[];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['name', 'id'],
                'separator'=>'_'
            ]
        ];
    }

    public function style()
    {
        return $this->belongsTo(Style::class);
    }

    public function albums()
    {
        return $this->hasMany(Album::class);
    }


}
