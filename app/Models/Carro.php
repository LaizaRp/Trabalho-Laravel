<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Carro extends Model
{
    use HasFactory;

   
    protected $fillable = [
        'marca',
        'modelo',
        'ano',
        'preco',
        'descricao',
        'cor', 
        'quilometragem',
        'combustivel', 
        'foto_principal', 
        'foto_2',
        'foto_3',
        'user_id',
    ];

   
    protected $casts = [
        'preco' => 'float',
        'ano' => 'integer',
        'quilometragem' => 'integer',
    ];

  
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}