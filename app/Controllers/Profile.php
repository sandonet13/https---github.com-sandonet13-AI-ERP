<?php

namespace App\Controllers;

class Profile extends BaseController
{

    public function index()
    {
        

    }
    
    public function profile()
    {
        $session = session();
        $name = $session->get('user_name');
        $email = $session->get('email');
        $data['name'] = $name;
        $data['email'] = $email;
        return view('/partials/topbar', $data);

    }

}
