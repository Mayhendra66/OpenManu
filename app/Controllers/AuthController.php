<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use \App\Models\UserModels;


class AuthController extends BaseController
{
    public function login(): string
    {

        return view('auth/login');
    }

    public function loginProcess()
    {
        $model = new UserModels();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $model->where('email', $email)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'email tidak ditemukan');
        }

        if (!password_verify($password, $user['password'])) {
            return redirect()->back()->with('error', 'Password salah');
        }

        session()->set([
            'user_id' => $user['id'],
            'username'  => $user['username'],
            'email' => $user['email'],
            'isLoggedIn' => true
        ]);


        return redirect()->to('/dashboard');
    }

    public function logout()
    {

        session()->destroy();
        return redirect('/');
    }
}
