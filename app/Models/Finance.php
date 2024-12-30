<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    protected $table = 'finance'; 
    protected $primaryKey = 'id_data'; 
    protected $fillable = [
        'id_data',
        'tanggal',
        'jumlah_pengeluaran',
        'keterangan',
    ];
}
