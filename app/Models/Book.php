<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public const TAX = 10;
    public const DEFAULT_STOCK = 0;

    protected $table = "tbl_buku";
    protected $primarykey = "id_buku";
    protected $with = ['transactions'];
    public $incrementing = false;
    protected $fillable = [
        'id_buku', 'judul', 'noisbn', 'penulis', 'penerbit', 'tahun', 'stok', 'harga_pokok', 'harga_jual', 'ppn', 'diskon', 'created_at', 'updated_at'
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'id_buku', 'id_buku');
    }
}
