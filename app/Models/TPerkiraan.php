<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TPerkiraan extends Model
{
    protected $table ="t_perkiraan";
    protected $primaryKey ="id";

    public $timestamps = true;

    protected $fillable = [
        'NomorPerkiraan',
        'NamaPerkiraan',
        'Kelompok',
        'Keterangan',
    ];
    
}
