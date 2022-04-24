<?php

namespace App\Models\Admin;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
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
            'slug'=>[
                'separator'=>'_',
                'source'=>['title', 'id']
            ]
        ];
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

}
