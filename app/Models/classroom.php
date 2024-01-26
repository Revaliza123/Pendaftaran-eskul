<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classroom extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'id',
        'kelas'
    ];
    protected $table='class';
   protected $primarykey = 'id';
}
