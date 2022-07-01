<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GuestModel;

class Otentikasi extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function logadmin()
    {
        return view('logadmin');
    }

    public function logadmin1()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $guestModel = new GuestModel();
        $otentik = $guestModel->where(['username' => $username])->first();
        if ($otentik) {
            $verifikasi = password_verify(md5($password), password_hash($otentik['password'], PASSWORD_DEFAULT));
            if ($verifikasi) {
                $sesi = [
                    'username' => $otentik['username'],
                    'id' => $otentik['id'],
                    'loggedIn' => TRUE
                ];
                session()->set($sesi);
                return redirect()->to('/admin');
            } else {
                session()->setFlashdata('pesan', 'Password Salah');
                return redirect()->to('/logadmin');
            }
        } else {
            session()->setFlashdata('pesan', 'Username tidak terdaftar!');
            return redirect()->to('/logadmin');
        }
    }

    public function login()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $guestModel = new GuestModel();
        $otentik = $guestModel->where(['username' => $username])->first();
        if ($otentik) {
            $verifikasi = password_verify(md5($password), password_hash($otentik['password'], PASSWORD_DEFAULT));
            if ($verifikasi) {
                $sesi = [
                    'username' => $otentik['username'],
                    'id' => $otentik['id'],
                    'loggedIn' => TRUE
                ];
                session()->set($sesi);
                return redirect()->to('/guest');
            } else {
                session()->setFlashdata('pesan', 'Password Salah');
                return redirect()->to('/masuk');
            }
        } else {
            session()->setFlashdata('pesan', 'Username tidak terdaftar!');
            return redirect()->to('/masuk');
        }
    }
}
