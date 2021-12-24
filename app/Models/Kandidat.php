<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kandidat extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'role', 'image', 'paslon_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function paslon()
    {
        return $this->belongsTo('App\Models\Paslon');
    }
}
