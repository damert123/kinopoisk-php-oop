<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

class ReviewController extends Controller
{
    public function store()
    {
        $validation = $this->request()->validate([
            'rating' => ['required'],
            'review' => ['required', 'min:10', 'max:1000']
        ]);

        if (! $validation) {
            foreach ($this->request()->errors() as $field => $error) {
                $this->session()->set($field, $error);
            }

            $this->redirect("/movie?id={$this->request()->input('id')}");
        }

        $this->db()->insert('reviews', [
            'rating' => $this->request()->input('rating'),
            'review' => $this->request()->input('review'),
            'movie_id' => $this->request()->input('id'),
            'user_id' => $this->auth()->id(),
        ]);

        $this->redirect("/movie?id={$this->request()->input('id')}");

    }

}