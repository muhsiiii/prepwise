<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImpPlaylist extends Model
{
    use HasFactory;

    protected $table='imp_playlists';

    protected $guarded=[];
}
