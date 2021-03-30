<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $table = "Jadwal";
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'judul',
        'deskripsi',
        'tanggal_lahir',
        'awal',
        'akhir',
        'create_at',
        'update_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'awal' => 'datetime',
        'akhir' => 'datetime',
        'create_at' => 'datetime',
        'update_at' => 'datetime',
    ];
}
