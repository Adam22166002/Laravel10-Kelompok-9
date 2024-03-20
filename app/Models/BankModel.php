<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class BankModel extends Authenticatable
{
    use HasFactory;

    protected $table = "tbl_bank";
    protected $primaryKey = "kode_bank";

    protected $fillable = [
        'nama_bank',
        'alamat',
        'kota',
        'provinsi',
        'kode_pos',
        'nomer_telepon',
        'email',
        'deskripsi'
    ];
    public $timestamps = false;
}
