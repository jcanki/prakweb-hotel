<?php

namespace App\Controllers;

use App\Models\HotelModel;
use CodeIgniter\Controller;

class HotelController extends Controller
{
    // Method untuk menampilkan semua data hotel di halaman indeks
    public function index()
    {
        // Membuat instance dari HotelModel
        $model = new HotelModel();
        // Mengambil semua data hotel dari database dan menyimpannya di array $data
        $data['hotels'] = $model->findAll();

        // Mengirim data hotel ke view 'pages/index' untuk ditampilkan
        return view('pages/index', $data);
    }

    // Method untuk menampilkan form pembuatan hotel baru
    public function create()
    {
        // Mengarahkan ke view 'pages/create' yang berisi form
        return view('pages/create');
    }

    // Method untuk menyimpan data hotel baru dari form ke database
    public function store()
    {
        // Membuat instance dari HotelModel
        $model = new HotelModel();

        // Mengambil data dari form (melalui method POST) dan menyimpannya dalam array $data
        $data = [
            'name' => $this->request->getPost('name'),
            'address' => $this->request->getPost('address'),
            'city' => $this->request->getPost('city'),
            'price' => $this->request->getPost('price')
        ];

        // Memasukkan data baru ke database
        $model->insert($data);
        // Mengarahkan kembali pengguna ke halaman utama '/pages' setelah data disimpan
        return redirect()->to('/pages');
    }

    // Method untuk menampilkan form edit dengan data hotel yang sudah ada
    public function edit($id)
    {
        // Membuat instance dari HotelModel
        $model = new HotelModel();
        // Mencari data hotel berdasarkan ID dan menyimpannya di $data
        $data['hotel'] = $model->find($id);

        // Mengirim data hotel ke view 'pages/edit' untuk ditampilkan di form
        return view('pages/edit', $data);
    }

    // Method untuk memperbarui data hotel di database
    public function update($id)
    {
        // Membuat instance dari HotelModel
        $model = new HotelModel();

        // Mengambil data yang diperbarui dari form (melalui method POST)
        $data = [
            'name' => $this->request->getPost('name'),
            'address' => $this->request->getPost('address'),
            'city' => $this->request->getPost('city'),
            'price' => $this->request->getPost('price')
        ];

        // Memperbarui data hotel di database berdasarkan ID
        $model->update($id, $data);
        // Mengarahkan kembali pengguna ke halaman utama
        return redirect()->to('/pages');
    }

    // Method untuk menghapus data hotel dari database
    public function delete($id)
    {
        // Membuat instance dari HotelModel
        $model = new HotelModel();
        // Menghapus data hotel berdasarkan ID
        $model->delete($id);
        // Mengarahkan kembali pengguna ke halaman utama
        return redirect()->to('/pages');
    }

    // Method untuk mencari hotel berdasarkan nama atau alamat
    public function search()
    {
        // Membuat instance dari HotelModel
        $model = new HotelModel();

        // Mengambil nilai pencarian dari parameter URL 'search'
        $searchTerm = $this->request->getGet('search');
        
        // Menginisialisasi array $data['hotels'] sebagai array kosong
        $data['hotels'] = [];

        // Memeriksa apakah ada kata kunci pencarian
        if (!empty($searchTerm)) {

            // Mencari hotel di database yang namanya atau alamatnya mirip dengan kata kunci
            $data['hotels'] = $model->like('name', $searchTerm)
                                   ->orLike('address', $searchTerm)
                                   ->findAll();
        }

        // Memeriksa apakah hasil pencarian kosong
        if (empty($data['hotels'])) {
            // Jika kosong, menambahkan pesan ke array $data
            $data['message'] = 'No such data or there is no such name';
        }

        return view('pages/searchResults', $data);
    }
}