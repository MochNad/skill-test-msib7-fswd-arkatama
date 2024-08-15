<?php

namespace App\Models\FSWD;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;

    protected $table = 'travels';
    protected $fillable = ['tanggal_keberangkatan', 'kuota'];

    public function penumpangs()
    {
        return $this->hasMany(Penumpang::class, 'id_travel', 'id');
    }
}
