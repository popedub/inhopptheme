<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateContact extends Controller
{
    public function bloke()
    {
        return (object) array (
            'direccion' => get_field('adress'),
            'mapa' => get_field('link_maps'),
            'mail' => get_field('email'),
        );
    }
}
