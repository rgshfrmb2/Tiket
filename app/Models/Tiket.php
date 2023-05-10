<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;
    protected $table = 'tikets';
    protected $fillable = ['nama_konser', 'tgl', 'htm', 'id_tiket', 'nama_pembeli', 'tlp', 'email', 'status'];
}
