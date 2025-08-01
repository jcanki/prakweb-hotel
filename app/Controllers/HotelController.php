<?php 

namespace App\Controllers;

use App\Models\HotelModel;
use CodeIgniter\Controller;

class HotelController extends Controller
{
    public function index()
    {
        $model = new HotelModel();
        $data['hotels'] = $model->findAll();

        return view('pages/index', $data);
    }

    public function create()
    {
        return view('pages/create');
    }

    public function store()
    {
        $model = new HotelModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'address' => $this->request->getPost('address'),
            'city' => $this->request->getPost('city'),
            'price' => $this->request->getPost('price')
        ];

        $model->insert($data);
        return redirect()->to('/pages');
    }

    public function edit($id)
    {
        $model = new HotelModel();
        $data['hotel'] = $model->find($id);

        return view('pages/edit', $data);
    }

    public function update($id)
    {
        $model = new HotelModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'address' => $this->request->getPost('address'),
            'city' => $this->request->getPost('city'),
            'price' => $this->request->getPost('price')
        ];

        $model->update($id, $data);
        return redirect()->to('/pages');
    }

    public function delete($id)
    {
        $model = new HotelModel();
        $model->delete($id);
        return redirect()->to('/pages');
    }

    public function search()
    {
        $model = new HotelModel();

        $searchTerm = $this->request->getGet('search');
        
        $data['hotels'] = [];

        if (!empty($searchTerm)) {

            $data['hotels'] = $model->like('name', $searchTerm)
                                    ->orLike('address', $searchTerm)
                                    ->findAll();
        }

        if (empty($data['hotels'])) {
            $data['message'] = 'No such data or there is no such name';
        }

        return view('pages/searchResults', $data);
    }
}