<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateAbout extends Controller
{
    public function bloke()
    {
        return (object) array (
            'frase_destacada' => get_field('phrase_lead'),
            'col1' => get_field('col_1'),
            'col2' => get_field('col_2'),
        );
    }

    public function objetivos()
    {
        $return = '';

        $objetivos = get_field('objetivos');

        if (is_array($objetivos)) {
            $i = 1;
            foreach ($objetivos as $objetivo) {
                $return .= \App\template('partials.content-objetivos',[
                    'objetivo' => $objetivo['lista_objectvo'],
                    'nro' => $i,
                    ]
                );
                $i++;
            }
        }
        return $return;
    }
}
