<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProductsModels;

class Dashboard extends BaseController
{
public function index()
{
    $productModel = new ProductsModels();

    $data['countAllProduct'] = $productModel->countAllResults();
    $data['countActiveProduct'] = $productModel->where('status', 'active')->countAllResults();
    $data['countInactiveProduct'] = $productModel->where('status', 'inactive')->countAllResults();

    return view('pages/dashboard', $data);
}

}
