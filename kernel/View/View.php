<?php

namespace App\Kernel\View;

use App\Kernel\Auth\AuthInterface;
use App\Kernel\Exceptions\ViewNotFoundException;
use App\Kernel\Session\Session;
use App\Kernel\Session\SessionInterface;


class View implements ViewInterface
{

    public function __construct(
        private SessionInterface $session,
        private AuthInterface $auth
    )
    {
    }

    public function page(string $name): void
    {


        $viewPath = APP_PATH."/views/pages/$name.php";

        if (!file_exists($viewPath)) {
            throw new ViewNotFoundException("View $viewPath does not exist");
        }

        extract($this->defaultData());

        include_once $viewPath;

    }


    public function component(string $name): void
    {
        $componentPath = APP_PATH."/views/components/$name.php";

        if (!file_exists($componentPath)) {
            echo "Component $componentPath not found";
            return;
        }

        extract($this->defaultData());

        include_once $componentPath;

    }

    private function defaultData(): array
    {
        return[
            'view' => $this,
            'session' => $this->session,
            'auth' => $this->auth,
        ];


    }

}