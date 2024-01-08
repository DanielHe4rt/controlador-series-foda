<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
    public $timestamps = false;
    protected $fillable = ['numero'];

    public function Episodios()
    {
        return $this->hasMany(Episodio::class);
    }

    public function Series()
    {
        return $this->belongsTo(Serie::class);
    }
}