<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teszt extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'kerdes',
        'v1',
        'v2',
        'v3',
        'v4',
        'helyes',
        'kategoriaId'
    ];

    public function kategoria(){
        return $this->belongsTo(kategoria::class, 'kategoriaId', 'id');
    }
}
