<?php namespace App\Models;

use CodeIgniter\Model;

// HotelModel adalah model untuk berinteraksi dengan tabel 'hotels'
class HotelModel extends Model
{

    protected $table      = 'hotels';
    
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'address', 'city', 'price'];
}