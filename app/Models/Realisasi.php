<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Realisasi extends Model
{
    use HasFactory;

    protected $table = 'realisasis';
    protected $primaryKey = 'id';
    protected $fillable = [
        'uuid',
        'tanggal_realisasi',
        'kategori',
        'jumlah',
        'keterangan',
    ];

    protected static function boot()
    {
        parent::boot();

        // Event listener untuk membuat UUID sebelum menyimpan
        static::creating(function ($model) {
            $model->uuid = Uuid::uuid4()->toString();
        });
    }
}
