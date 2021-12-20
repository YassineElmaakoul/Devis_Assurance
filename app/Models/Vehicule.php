<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;
    protected $fillable = ['immatriculation','date_circulation','marque','val_neuf','val_venal','carburant','puissance'];

    public $incrementing = false;
    protected $primaryKey ='immatriculation';
    protected $keyType = 'string';

    public function client(){
        return $this->belongsTo('App\Client');
    }
}
