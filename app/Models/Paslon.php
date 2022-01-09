<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paslon extends Model
{
    use HasFactory;

    protected $fillable = ['nomor', 'visi', 'misi', 'ketua_id', 'wakil_id'];

    public function kandidat()
    {
        return $this->hasMany('App\Models\Kandidat');
    }
    public function ketua()
    {
        return $this->belongsTo('App\Models\Kandidat', 'ketua_id');
    }
    public function wakil()
    {
        return $this->belongsTo('App\Models\Kandidat', 'wakil_id');
    }
}
