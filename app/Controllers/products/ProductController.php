<?php

namespace App\Controllers\Products;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProductsModels;

class ProductController extends BaseController
{
    public function index()
    {
        $productModel = new ProductsModels();

        $data['products'] = $productModel->findAll();

        return view('pages/products/index', $data);
    }

    public function createview()
    {
        return view('pages/products/create');
    }

    public function createstore()
    {
        $rules = [
            'product_code' => 'required|is_unique[products.product_code]',
            'product_name' => 'required',
            'unit'         => 'required',
            'status'       => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $productModel = new ProductsModels();

        $userId = session()->get('user_id');

        $productModel->insert([
            'user_id'   => $userId,
            'product_code' => $this->request->getPost('product_code'),
            'product_name' => $this->request->getPost('product_name'),
            'unit'         => $this->request->getPost('unit'),
            'status'       => $this->request->getPost('status'),
        ]);

        return redirect()->to('products')->with('success', 'Product successfully Created');
    }

    public function editview($id){

        $productModel = new ProductsModels();
        $data['products'] = $productModel->find($id);
    

        return view('pages/products/edit', $data);
    }

public function edit()
{
     $productModel = new ProductsModels();

    $id = $this->request->getPost('id');


    $rules = [
        'product_code' => 'required',
        'product_name' => 'required',
        'unit'         => 'required',
        'status'       => 'required',
    ];

    if (!$this->validate($rules)) {

        return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    }

    $data = [
        'product_code' => $this->request->getPost('product_code'),
        'product_name' => $this->request->getPost('product_name'),
        'unit'         => $this->request->getPost('unit'),
        'status'       => $this->request->getPost('status'),
        'updated_by'   => $this->request->getPost('user_id'),
        'updated_at'   => date('Y-m-d H:i:s'),
    ];

    $productModel->update($id, $data);

    return redirect()->to(base_url('products'))
                     ->with('success', 'Product successfully updated');
}

public function destroy($id)
{
    $productModel = new ProductsModels();


    $product = $productModel->find($id);
    if (!$product) {
        return redirect()->to('products')
                         ->with('error', 'Product not found');
    }

    $productModel->delete($id);

    return redirect()->to('products')
                     ->with('success', 'Product deleted successfully');
}


}
