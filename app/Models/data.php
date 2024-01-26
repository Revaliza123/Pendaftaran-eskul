<?php

namespace App\Models;

use App\Http\Controllers\dataController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    public function classes()
    {
        return $this->belongsTo(classroom::class);
    }

    use HasFactory;
    protected $fillable = [
        'nama',
        'id_kelas',
        'id_jurusan',
        'id_eskul',
        'jenis_kelamin',
        'handphone'
    ];
    protected $table = 'data';
    protected $primarykey = 'id';

}

