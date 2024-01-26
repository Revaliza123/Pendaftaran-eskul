<?php

namespace App\Models;

use App\Http\Controllers\eskulController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eskuls extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_eskul',
        'id_kategori',
        'id_pembina',
        'jadwal_latihan'
    ];
    protected $table = 'eskuls';
    protected $primaryKey = 'id';
}
