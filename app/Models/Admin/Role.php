<?php

namespace App\Models\Admin;

use App\Models\User;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory, Sluggable;
    
    protected $guarded=[];
    
    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug'=>[
                'recourse'=>['title', 'id'],
                'separator'=>'_'
            ]
        ];
    }

    public function permission()
    {
        return $this->belongsToMany(Permission::class);
    }
}
