<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    protected $userModel = "";
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        echo "berhasil";
    }

    public function login()
    {
        $userId = session()->get('user_id');
        $comp = 'swclient';
        if (str_contains(base_url(uri_string()), 'eliteapp')) {
            $comp = 'eliteapp';
        }
        $company = $this->db->query("SELECT logo FROM company WHERE site='$comp' LIMIT 1")->getRow();
        
        if (is_null($userId)) {
            $data = array(
                'logo' => $company->logo
            );
            return view('login', $data);
        } else {
            if (session()->get('role') == 'superadmin') {
                return redirect()->route('admin/dashboard');
            }
            return redirect()->route('dashboard');
        }
    }

    public function loginProses()
    {
        $post = $this->request->getVar();
        $user = $this->userModel->getWhere(['username' => $post['username']])->getRow();
       
        $currentPage = $post['current'];
        if ($user) {
            if (password_verify($post['password'], $user->password)) {
                $params = [
                    'user_id' => $user->id,
                    'role' => $user->role
                ];
                session()->set($params);
                if ($user->role == "client") {
                    if ($currentPage == base_url() || $currentPage == base_url() . '/login') {
                        return redirect()->to(base_url('get-started'))->with('message', 'Login Successful!');
                    } else {
                        return redirect()->to($currentPage)->with('message', 'Login Successful!');
                    }
                } else {
                    return redirect()->back()->with('error', 'Incorrect Password!');
                }
            } else {
                return redirect()->back()->with('error', 'Incorrect Password!');
            }
        } else {

            return redirect()->back()->with('error', 'Username Not Found!');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/login'));
    }
}
