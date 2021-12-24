<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paslon extends Model
{
    use HasFactory;

    protected $fillable = ['nomor', 'visi', 'misi'];

    public function kandidat()
    {
        return $this->hasMany('App\Models\Kandidat');
    }
}
