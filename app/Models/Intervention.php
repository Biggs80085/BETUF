<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intervention extends Model
{
    use HasFactory;
    protected $fillable = ['tunnelID','userID','title','dateIntervention','dateFinIntervention','description', 'rapport', 'typeVisite'];
    //protected $primaryKey = ['id', 'tunnelID', 'userID'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function tunnel()
    {
        return $this->belongsTo(Tunnel::class);
    }
    
}
