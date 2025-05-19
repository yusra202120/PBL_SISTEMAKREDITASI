<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;

    protected $table = 'm_kriteria';
    protected $primaryKey = 'kriteria_id';
    protected $fillable = ['nama_kriteria'];

    public function subkriterias()
    {
        return $this->hasMany(Subkriteria::class, 'kriteria_id');
    }
}
