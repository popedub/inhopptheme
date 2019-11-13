<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateEquip extends Controller
{
    public function bloke()
    {
        return (object) array (
            'frase_destacada' => get_field('frase'),
            'foto' => get_field('photo_president'),
            'nombre' => get_field('name_president'),
            'intro' => get_field('intro_president'),
            'foto_dire' => get_field('photo_director'),
            'nombre_dire' => get_field('name_director'),
            'intro_dire' => get_field('intro_director'),
        );
    }

    public function equipo()
    {
        $return = '';

        $equipo = get_field('equip');

        if (is_array($equipo)) {

            foreach ($equipo as $p) {
                $return .= \App\template('partials.content-equipo',[
                    'foto' => $p['photo'],
                    'nombre' => $p['name'],
                    'tarea' => $p['work'],
                    ]
                );

            }
        }
        return $return;
    }
}
