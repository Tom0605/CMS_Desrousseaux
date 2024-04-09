<?php
add_action(
    'wp_ajax_insset_admin_function',
    array('Insset_Controllers_Admin', 'update')
);

class Insset_Controllers_Admin
{

    static public function update()
    {
        check_ajax_referer('ajax_nonce_insset', 'security'); // vérifie si AJAX bien posté avec la clé de sécurité pour éviter spam

        if ((!isset($_REQUEST)) || sizeof(@$_REQUEST) < 1)
            exit;
        var_dump($_REQUEST);
        foreach ($_REQUEST as $key => $value)
            if ($$key = (string) trim($value)) // trim() efface espaces en début et fin de chaîne de $value et string force le type string
                Insset_Crud::setData($key, $$key); //méthode statique , le $$key est la valeur de la variable $key lors de l'itération

        print 'ok'; // msg de confirmation d'updatisation de la BDD
        exit;
    }
}
/*
$class = maclass; $class->setup(); // class maclass appelé en non statique
maclass::setup(); // class maclass appelé en statique
*/