<?php namespace App\Models;

use CodeIgniter\Model;

// HotelModel adalah model untuk berinteraksi dengan tabel 'hotels'
class HotelModel extends Model
{
    // Nama tabel di database
    protected $table      = 'hotels';
    // Nama kolom primary key
    protected $primaryKey = 'id';
    // Kolom-kolom yang diizinkan untuk diisi (insert/update)
    protected $allowedFields = ['name', 'address', 'city', 'price'];
}