<?php
class Insset_Crud
{
    static public function setData($key, $value = '')
    { // setData est fonction static qui fait U=Update de l'opération CRUD

        if (!$key)
            return false;

        global $wpdb;
        $rs = $wpdb->update(
            $wpdb->prefix . INSSET_BASENAME . '_config', // maj des dattes dans la BDD
            array(
                'value' => $value
            ),
            array(
                'id' => (string) $key,
            )
        );

        print $wpdb->last_query;

        return $rs;
    }
}
