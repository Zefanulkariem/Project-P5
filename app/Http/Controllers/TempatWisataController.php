<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\Kategori;
use App\Models\Lokasi;
use App\Models\Event;
class TempatWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wisata = Wisata::all();
        return view('wisata.index', compact('wisata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        $lokasi = Lokasi::all();
        $event = Event::all();
        return view('wisata.create', compact('kategori','lokasi','event'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $wisata = new Wisata;
        $wisata->nama_wisata = $request->nama_wisata;
        $wisata->id_lokasi = $request->id_lokasi; //perhatikan jalurnya!
        $wisata->id_kategori = $request->id_kategori; //perhatikan jalurnya!
        $wisata->deskripsi = $request->deskripsi;
        $wisata->cover = $request->cover;
        $wisata->id_event = $request->id_event; //perhatikan jalurnya!

        if($request->hasFile('cover')){
            $img = $request->file('cover');
            $name = rand(1000,9000) . $img->getClientOriginalName();
            $img->move('image/wisata', $name);
            $wisata->cover= $name;
        }

        $wisata->save();
        return redirect()->route('wisata.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wisata = Wisata::findOrFail($id);
        $event = Event::all();
        return view('wisata/show', compact('wisata','event'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wisata = Wisata::findOrFail($id);
        $kategori = Kategori::all();
        $lokasi = Lokasi::all();
        $event = Event::all();
        return view('wisata/edit', compact('wisata','kategori','lokasi','event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $wisata = Wisata::findOrFail($id);
        $wisata->nama_wisata = $request->nama_wisata;
        $wisata->id_lokasi = $request->id_lokasi; //perhatikan jalurnya!
        $wisata->id_kategori = $request->id_kategori; //perhatikan jalurnya!
        $wisata->deskripsi = $request->deskripsi;
        $wisata->id_event = $request->id_event; //perhatikan jalurnya!
        
        if($request->hasFile('cover')){
            // $wisata->deleteImage(); //inget inih
            $img = $request->file('cover');
            $name = rand(1000,9000) . $img->getClientOriginalName();
            $img->move('image/wisata', $name);
            $wisata->cover= $name;
        }

        $wisata->save();
        return redirect()->route('wisata.index')->with('success', 'Data berhasil di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wisata = Wisata::findOrFail($id);
        $wisata->delete();
        return redirect()->route('wisata.index')->with('success', 'Data berhasil dihapus');
    }
}
