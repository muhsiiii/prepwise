<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievers extends Model
{
    use HasFactory;

    protected $table='achievers';

    protected $guarded=[];

    public function GetPlaylist()
    {
        return $this->belongsTo(AcheiversPlaylist::class, 'playlist','id');
    }
}
