<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;
    protected $fillable = [
      'id_tiket', 'nama_tiket', 'lokasi', 'tanggal', 'foto', 'harga'
    ];

    static function getTiket()
    {
        $return = DB::table('tiket');
        return $return;
    }
}
