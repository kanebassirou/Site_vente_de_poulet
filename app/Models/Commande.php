<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = 
    ['user_id', 
    'totalPayer',
    'quantite',
    'idProduit',
    'statut'

]; 

public function user() : BelongsTo 
{
    return $this-> belongsTo(User::class);
}
}
