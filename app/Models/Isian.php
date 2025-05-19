<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Isian extends Model
{
    use HasFactory;

    protected $table = 't_isian';
    protected $primaryKey = 'isian_id';
    protected $fillable = ['isi', 'file', 'tanggal', 'status', 'sub_id'];

    public function subkriteria()
    {
        return $this->belongsTo(Subkriteria::class, 'sub_id');
    }
}
