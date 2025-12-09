<?php

namespace App\Controllers;

use App\Models\Member;

class Home extends BaseController
{
    public function index(): string
    {
        helper('form');
        return view('homepage');
    }

    public function login(): string
    {
        $rules=[
            'username'=>'required|valid_email',
            'password'=>'required'
        ];

        if (!$this->validate($rules)){
            $data = array('load_error'=>'true');
            helper('form');
            return view('homepage', $data);
        }else{
            //Hit the DB
            $Member = new Member();

            if($Member->user_login($this->request->getPost('username'),$this->request->getPost('password'))){
                //Pass
               header("Location: admin");
               exit();
            }else {
                //fail
                $data = array('load_error' => 'true', 'error_message' => 'Invalid username or Password');
                helper('form');
                return view('homepage', $data);
            }
        }
    }

    public function create(): string
    {
        $rules=[
            'username'=>'required',
            'password'=>'required',
            'password2'=>'required|matches[password]',
            'email'=>'required'
        ];
        if (!$this->validate($rules)){
            $data = array('load_error'=>'true');
            helper('form');
            return view('homepage', $data);
        }else{
            //Hit the DB
            echo "here";
            exit();
            $Member = new Member();
            if($Member->create_account($this->request->getPost('username'),
                                    $this->request->getPost('password'),
                                    $this->request->getPost('password2'),
                                    $this->request->getPost('email'))){
                //Pass
                return view('admin_page');
            }else {
                //fail
                $data = array('load_error' => 'true',
                              'error_message' => 'Invalid account created');
                helper('form');
                return view('homepage', $data);
            }
        }
    }

    public function play($data): string
    {
        $data = $data * 12;
        echo "Hello World -> " . $data;
        exit();
        //return view('welcome_message');
    }

}
