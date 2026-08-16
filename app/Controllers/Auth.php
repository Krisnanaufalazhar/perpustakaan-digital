<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    protected $helpers = ['form'];

    public function login()
    {
        if (session()->get('logged_in')) {
            return redirect()->to('/dashboard');
        }

        return view('auth/login');
    }

    public function attemptLogin()
    {
        $rules = [
            'username' => 'required',
            'password' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()
                ->to('/login')
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $userModel = new UserModel();

        $user = $userModel
            ->where('username', $username)
            ->first();

        if (!$user || !password_verify($password, $user['password'])) {
            return redirect()
                ->to('/login')
                ->withInput()
                ->with('error', 'Username atau password salah.');
        }

        session()->set([
            'user_id'   => $user['id'],
            'username'  => $user['username'],
            'nama'      => $user['nama'],
            'logged_in' => true
        ]);

        return redirect()
            ->to('/dashboard')
            ->with('success', 'Login berhasil.');
    }

    public function logout()
    {
        session()->destroy();

        return redirect()
            ->to('/login')
            ->with('success', 'Anda berhasil logout.');
    }
}