<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;

    protected $fillable = ['nama_wisata','id_kategori','id_lokasi','deskripsi','cover','id_event'];
    public $timelaps = true;

    public function kategori()
    {
        return $this->BelongsTo(Kategori::class, 'id_kategori');
    }

    public function lokasi()
    {
        return $this->BelongsTo(Lokasi::class, 'id_lokasi');
    }

    public function event()
    {
        return $this->BelongsTo(Event::class, 'id_event');
    }
}
