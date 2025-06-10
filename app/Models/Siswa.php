<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
   protected $fillable = ['nama', 'nisn', 'kelas', 'nama_wali', 'no_hp_wali'];
}
