<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Materi extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'deskripsi', 'tipe', 'file_path'];

    public function progress()
    {
        return $this->hasMany(Progress::class);
    }
}
