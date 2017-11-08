<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Part;

class SppController extends Controller
{
    public function index()
    {
        return view('esp.spp.spp');
    }

    public function create()
    {
    	return view('esp.spp.create');
    }

        public function store()
    {
    	Part::create([
    		'no_spp'=>request('no_spp'),
    		'nama_spp'=>request('nama_spp'),
    		'jumlah'=>request('jumlah'),
    		'remarks'=>request('remarks')
    	]);
        return redirect('/spp');
    }
}
