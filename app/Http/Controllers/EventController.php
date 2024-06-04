<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Lokasi;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::all();
        return view('event.index', compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lokasi = Lokasi::all();
        return view('event.create', compact('lokasi'));
    }

    /**
     * Store a newly created re source in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new Event;
        $event->tema_event = $request->tema_event;
        $event->tgl_diselenggarakan = $request->tgl_diselenggarakan;
        $event->cover = $request->cover;
        $event->id_lokasi = $request->id_lokasi;

        if($request->hasFile('cover')){
            $img = $request->file('cover');
            $name = rand(1000,9000) . $img->getClientOriginalName();
            $img->move('image/wisata', $name);
            $event->cover= $name;
        }

        $event->save();
        return redirect()->route('event.index')-> with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::findOrFail($id);
        $lokasi = Lokasi::all();
        return view('event/show', compact('event','lokasi'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        $lokasi = Lokasi::all();
        return view('event/edit', compact('event','lokasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $event->tema_event = $request->tema_event;
        $event->tgl_diselenggarakan = $request->tgl_diselenggarakan;
        $event->id_lokasi = $request->id_lokasi;

        $event->save();
        return redirect()->route('event.index')->with('success', 'Data berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return redirect()->route('event.index')->with('success', 'Data berhasil dihapus');
    }
}
