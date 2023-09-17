<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Impression extends Model
{
    use HasFactory;

    protected $table='impressions';

    protected $guarded=[];

    public function GetPlaylist()
    {
        return $this->belongsTo(ImpPlaylist::class, 'playlist','id');
    }
}
