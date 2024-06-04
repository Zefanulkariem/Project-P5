<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = ['nama_kategori'];
    public $timelaps = true;

    public function kategori()
    {
        return $this->hasMany(Kategori::class);
    }
}
