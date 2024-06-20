<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Favorito extends Model
{
    use HasFactory;
    protected $table = 'favoritos';

    public function postagem(): HasOne
    {
        return $this->hasOne(Postagem::class, 'id', 'postagem_id');
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
