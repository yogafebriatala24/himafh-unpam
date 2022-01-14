<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suara extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'paslon_id'
    ];

    public function paslon(){
        return $this->belongsTo('App\Models\Paslon');
    }
}
