<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgressBelajar extends Model
{
    protected $fillable = ['user_id', 'materi_id', 'accessed_at'];
    public $timestamps = false;
}
