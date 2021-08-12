<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\Exceptions\PageNotFoundException;

Class Pages extends Controller {
        public function index(){
            return view('Welcome_message');
        }

        public function showme($page = 'home'){
            if (!is_file(APPPATH. '/Views/Pages/'.$page.'.php')){
                throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
            }

            // deixa a primeira letra maiúscula
            $data['title'] = ucfirst($page);

            echo view('templates/header' , $data);
            echo view('pages/' . $page, $data);
            echo view('templates/footer' , $data);
        }

    }

?>