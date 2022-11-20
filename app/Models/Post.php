<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post Extends Model
{

    protected $fillable = [
        'titulo',
        'conteudo',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}