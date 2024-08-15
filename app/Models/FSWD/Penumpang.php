<?php

namespace App\Models\FSWD;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penumpang extends Model
{
    use HasFactory;

    protected $table = 'penumpangs';
    protected $fillable = ['id_travel', 'kode_booking', 'nama', 'jenis_kelamin', 'kota', 'usia', 'tahun_lahir'];

    public function travel()
    {
        return $this->belongsTo(Travel::class, 'id_travel', 'id');
    }
}
