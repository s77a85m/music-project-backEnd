<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;
    protected $table='musics';

    protected $guarded=[];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function style()
    {
        return $this->belongsTo(Style::class);
    }
}
