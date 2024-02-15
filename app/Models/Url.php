<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'url',
        'uniqueLink',
        'shortUrl',
        'visitCount',
    ];

    public function linkedUser(){
        return $this->belongsTo(\User::class, 'user_id', 'id');
    }
}
