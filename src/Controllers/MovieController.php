<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;
use App\Kernel\Http\Redirect;
use App\Kernel\Validator\Validator;
use App\Kernel\View\View;
use App\Services\CategoryService;
use App\Services\MovieService;

class MovieController extends Controller
{

    private MovieService $service;
    public function index(): void
    {

        $this->view('movies');
    }

    public function add(): void
    {


    }

    public function store(): void
    {


        $validation = $this->request()->validate([
            'name' => ['required', 'min:3', 'max:50'],
            'description' => ['required'],
            'category' => ['required'],
        ]);

        if (! $validation) {
            foreach ($this->request()->errors() as $field => $error) {
                $this->session()->set($field, $error);
            }

            $this->redirect('/admin/movies/add');

        }

        $this->service()->store(
          $this->request()->input('name'),
          $this->request()->input('description'),
          $this->request()->file('image'),
          $this->request()->input('category'),
        );

        $this->redirect('/admin');

    }

    public function create(): void
    {
        $categories = new CategoryService($this->db());

        $this->view('admin/movies/add', [
            'categories' => $categories->all(),
        ]);
    }

    private function service(): MovieService
    {
        if (! isset($this->service)) {
            $this->service = new MovieService($this->db());
        }

        return $this->service;
    }

}