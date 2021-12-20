<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Devi extends Model
{
    use SoftDeletes;
    use HasFactory;
    public $primaryKey="num_devis";
    public function category()
    {
        return $this->belongsTo(Category::class, 'nom_pack');
    }

    protected $fillable = ['nom_pack','immatricule','date_effet','date_echeance',''];

}
