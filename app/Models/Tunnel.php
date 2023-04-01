<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tunnel extends Model
{
    use HasFactory;
    protected $fillable = ['coordGPS','ville','codePostal','hauteurTunnel','nbTube','nbVoieParTube', 'anneeConstruction', 'dateDernièreVisite', 'numMAGALI', 'numAGORA'];
    public function interventions()
    {
        return $this->hasMany(Intervention::class);
    }
}
