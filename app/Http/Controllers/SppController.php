<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Part;

class SppController extends Controller
{

        public function index()
        {
            $parts = Part::all();

            return view('esp.spp.spp', compact('parts'));
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


        public function edit($id)
        {
            $part = Part::find($id);

            return view('esp.spp.edit', compact('post'));
        }


        public function update()
        {

        }
}
