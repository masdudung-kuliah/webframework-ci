<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoryModel;

class Category extends BaseController
{
    public function index()
    {
        $model = new CategoryModel();
        $data['categories'] = $model->findAll();

        return view('pages/category/index', $data);
    }

    public function create()
    {
        return view('pages/category/create');
    }

    public function store()
    {
        $validation = \Config\Services::validation();

        $rules = [
            'name' => 'required|min_length[3]',
            'description' => 'permit_empty'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $model = new CategoryModel();
        $model->save([
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
        ]);

        return redirect()->to('/categories')->with('notification', [
            'title' => 'OK',
            'message' => 'Category Added Successfuly',
            'type' => 'success'
        ]);
    }
}
