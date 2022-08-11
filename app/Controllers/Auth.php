<?php

namespace App\Controllers;
use App\Models\UserModel;
class Auth extends BaseController
{
    
    public function index()
    {
        if ($this->session->userdata('logged_in') == TRUE) 
        {
        redirect('dashboard');
        }
        return view('auth/login');
    }

    public function loginCheck()
    {
        $session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('user_email', $email)->first();
        if($data){
            $pass = $data['user_password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'user_id'       => $data['user_id'],
                    'user_name'     => $data['user_name'],
                    'user_email'    => $data['user_email'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard-rectifier');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('login');
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('login');
        }
    }
    public function logout()
    {
        $session = session();
        $session->remove('isLoggedIn');
        return redirect()->to('/login');
    }

}
