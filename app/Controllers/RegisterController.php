<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModels;
use App\Models\CompaniesModels;

class RegisterController extends BaseController
{
    public function index() {}

    public function register()
    {
        return view('auth/register');
    }

    public function registerProcess()
    {
        $rules = [
        'users_email'    => 'required|valid_email|is_unique[users.email]',
        'users_username' => 'required|min_length[3]|is_unique[users.username]',
        'users_number'   => 'required|is_unique[users.number]',
        'users_password' => 'required|min_length[6]',
        'users_password_confirm' => 'required|matches[users_password]',

        'company_name'    => 'required',
        'company_email'   => 'required|valid_email|is_unique[companies.emailcompany]',
        'company_number'  => 'required|is_unique[companies.numbercompany]',
        'company_address' => 'required',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $db = \Config\Database::connect();
    $db->transStart();

        $userModel = new UserModels();
        $userModel->insert([
        'email'    => esc($this->request->getPost('users_email')),
        'username' => esc($this->request->getPost('users_username')),
        'number'   => esc($this->request->getPost('users_number')),
        'password' => password_hash(
            $this->request->getPost('users_password'),
            PASSWORD_DEFAULT
        ),
    ]);

    $userId = $userModel->getInsertID();
    // 🔹 INSERT COMPANIES
    $companiesModel = new CompaniesModels();
    $companiesModel->insert([
        'user_id' => $userId,
        'namecompany'    => esc($this->request->getPost('company_name')),
        'emailcompany'   => esc($this->request->getPost('company_email')),
        'numbercompany'  => esc($this->request->getPost('company_number')),
        'addresscompany' => esc($this->request->getPost('company_address')),
    ]);

    $db->transComplete();

    if ($db->transStatus() === false) {
        return redirect()->back()->with('error', 'Registrasi gagal');
    }

        return redirect()->to('/')->with('success', 'Registrasi berhasil');
    }
}
