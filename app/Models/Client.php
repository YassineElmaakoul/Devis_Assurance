<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['id','cin','nom','prenom','adresse','gsm','email'];

    public $incrementing = false;
    protected $primaryKey ='cin';
    protected $keyType = 'string';
public function devis(){
    return $this->hasMany('App\Vehicule');
}
}
