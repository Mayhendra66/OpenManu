<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModels;
use Config\Auth;

class ForgetController extends BaseController
{
    public function forget(): string
    {
        return view('auth/forget');
    }

    public function forgetProcess()
    {
        $email = $this->request->getPost('email');

        if (!$email) {
            return redirect()->back()->with('error', 'Email wajib diisi');
        }

        $userModel = new UserModels();
        $user = $userModel->where('email', $email)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Email tidak terdaftar');
        }

        // Ambil config
        $authConfig = new Auth();

        // Reset password ke default
        $userModel->update($user['id'], [
            'password' => password_hash(
                $authConfig->defaultPassword,
                PASSWORD_DEFAULT
            ),
            'is_password_default' => 1
        ]);

        return redirect()->to('/')->with(
            'success',
            'Reset password berhasil. Gunakan password default.'
        );
    }
}
