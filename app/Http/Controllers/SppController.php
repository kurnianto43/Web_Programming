<?php

namespace EspBjb\Http\Controllers;

use Illuminate\Http\Request;
use EspBjb\Part;

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

            return redirect()->route('spp.index');
        }


        public function edit(Part $part)
        {

            return view('esp.spp.edit', compact('part'));
        }


        public function update(Part $part)
        {

            $part -> update([
                'no_spp' => request('no_spp'),
                'nama_spp' => request('nama_spp'),
                'jumlah' => request('jumlah'),
                'remarks' => request('remarks')
            ]);

            return redirect()->route('spp.index');
        }

        public function destroy(Part $part)
        {
            $part->delete();

            return redirect()->route('spp.index');
        }
}
