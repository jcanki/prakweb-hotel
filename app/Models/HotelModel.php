<?php namespace App\Models;

use CodeIgniter\Model;

class HotelModel extends Model
{
    protected $table      = 'hotels';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'address', 'city', 'price'];
}