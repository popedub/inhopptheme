<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateHome extends Controller
{
    public function bloke()
    {
        return (object) array (
            'frase_destacada' => get_field('frase_destacada'),
            'video' => get_field('video'),
            'frase_video' => get_field('phrase_video'),
        );
    }
}
