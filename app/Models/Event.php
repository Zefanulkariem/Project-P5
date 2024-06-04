<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['tema_event', 'tgl_diselenggarakan','cover','lokasi'];
    public $timelaps = true;

    public function event()
    {
        return $this->hasMany(Event::class);
    }
    
    public function lokasi()
    {
        return $this->BelongsTo(Lokasi::class, 'id_lokasi');
    }

}
