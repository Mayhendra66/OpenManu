<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModels;
use CodeIgniter\HTTP\ResponseInterface;

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

        // 🔐 Generate OTP
        $otp = random_int(100000, 999999);

        // ⏰ Expired 10 menit
        $expired = date('Y-m-d H:i:s', strtotime('+10 minutes'));

        // Simpan OTP
        $userModel->update($user['id'], [
            'reset_otp'     => $otp,
            'reset_expired' => $expired
        ]);

        $emailService = \Config\Services::email();

$emailService->setFrom(
    'youremail@gmail.com',
    'Manufacturing Apps'
);

$emailService->setTo($email);
$emailService->setSubject('Email Verification Code');

$emailService->setMessage("
    <p>Please verify your identity,</p>
    <p>Here is your authentication code:</p>
    <h2>{$otp}</h2>
    <p>Please don't share this code with anyone: we'll never ask for it on the phone or via email.</p>
    <p>Thanks,</p>
    <p>.Manufacture Team</p>
");


       if (! $emailService->send()) {
    dd($emailService->printDebugger(['headers', 'subject', 'body']));
}

        

        return redirect()->to('/verify-otp')->with('success', 'OTP telah dikirim ke email');
    }

// public function testEmail()
// {
//     $email = \Config\Services::email();

//     $email->setFrom('youremail@gmail.com', 'Manufacturing Apps');
//     $email->setTo('youremail@gmail.com');
//     $email->setSubject('Test Email');
//     $email->setMessage('Ini email test');

//     if (! $email->send()) {
//         dd($email->printDebugger());
//     }

//     echo 'EMAIL TERKIRIM (CEK SPAM)';
// }

}
