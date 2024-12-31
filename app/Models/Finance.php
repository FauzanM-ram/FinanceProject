<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    protected $table = 'finance_reports'; 
    protected $primaryKey = 'id'; 
    protected $fillable = [
        'id',
        'tanggal',
        'jumlah_pengeluaran',
        'keterangan',
    ];
}
