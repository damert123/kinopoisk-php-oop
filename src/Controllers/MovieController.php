<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;
use App\Kernel\Http\Redirect;
use App\Kernel\Validator\Validator;
use App\Kernel\View\View;

class MovieController extends Controller
{
    public function index(): void
    {

        $this->view('movies');
    }

    public function add(): void
    {

        $this->view('admin/movies/add');
    }

    public function store()
    {


        $file = $this->request()->file('image');

        $filePath = $file->move('movies');



        $validation = $this->request()->validate([
            'name' => ['required', 'min:3', 'max:50'],
        ]);

        if (! $validation) {
            foreach ($this->request()->errors() as $field => $error) {
                $this->session()->set($field, $error);
            }

            $this->redirect('/admin/movies/add');

        }



        $id = $this->db()->insert('movies', [
            'name' => $this->request()->input('name')
        ]);

        dd("Movie added successfully with id: $id");
    }

}