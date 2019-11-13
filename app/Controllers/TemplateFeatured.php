<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateFeatured extends Controller
{
    public function bloke()
    {
        return (object) array (
            'intro' => get_field('intro'),
            'video' => get_field('video'),
            'ti_video' => get_field('title_video'),
            'text_video' => get_field('text_video'),
        );
    }

    public function libros() {
        $return = '';

        $libros = get_field('livres');

        if (is_array($libros)) {
            foreach ($libros as $libro) {
                $return .= \App\template('partials.libros',[
                     'titulo' => $libro['title_livre'],
                     'editorial' => $libro['editorial'],
                     'year' => $libro['year'],
                     'link' => $libro['link'],
                     'resumen' => $libro['resumen'],
                    ]
                );
            }
        }
        return $return;
    }
}
