<?php

/*
 * Copyright 2020 Cámara de Comercio de Santa Marta para el Magdalena.
 * Autor: Ing. Juan Pablo Llinás Ramírez
 * Archivo: Controlador.
 */

class Vistas {

    public static function cargar($vista, $datos = array()) {
        $loader = new \Twig\Loader\FilesystemLoader('html/');
        $twig = new \Twig\Environment(
                $loader, array(
            'debug' => true
                )
        );
        $twig->addGlobal('Config', new Config());
        $datos['hash_vista'] = uniqid();
        try {
            session_write_close();
            return  $twig->render($vista . '.html.php', $datos);
        } catch (Exception $e) {
            return 'ERROR AL CARGAR VISTA [' . $vista . '], COMUNICARSE CON GESTION TICS.' . ' ' . print_r($e, true);
        }
    }

}
