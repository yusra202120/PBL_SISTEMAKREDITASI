<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Subkriteria;
use App\Models\Kriteria;

class SubkriteriaController extends Controller
{

    
    public function index($id)
    {
        $kriteria = Kriteria::findOrFail($id); // pastikan kriteria ada
        $subkriterias = Subkriteria::where('kriteria_id', $id)->get();
    
        return view('subkriteria.index', compact('kriteria', 'subkriterias'));
    }
}
