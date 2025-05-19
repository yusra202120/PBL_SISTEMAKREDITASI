<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subkriteria extends Model
{
    use HasFactory;

    protected $table = 'm_subkriteria';
    protected $primaryKey = 'sub_id';
    protected $fillable = ['nama_sub', 'kriteria_id'];

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'kriteria_id');
    }

    public function isians()
    {
        return $this->hasMany(Isian::class, 'sub_id');
    }
}
