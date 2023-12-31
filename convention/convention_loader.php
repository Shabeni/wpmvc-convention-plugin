<?php

class ConventionLoader extends MvcPluginLoader {

    var $db_version = '1.0';
    var $tables = array();

    function activate() {

        // This call needs to be made to activate this app within WP MVC

        $this->activate_app(__FILE__);

        // Perform any databases modifications related to plugin activation here, if necessary

        require_once ABSPATH.'wp-admin/includes/upgrade.php';

        add_option('convention_db_version', $this->db_version);

        // Use dbDelta() to create the tables for the app here
         $sql = 'CREATE TABLE '.$wpdb->prefix.'types (
            id int(11) NOT NULL auto_increment,
            nom varchar(100) NOT NULL,
            active tinyint default 1,           
            PRIMARY KEY (id)
            );
            CREATE TABLE '.$wpdb->prefix.'conventions (
            id int(11) NOT NULL auto_increment,
            name varchar(255) NOT NULL,
            description text NOT NULL,
            date datetime default CURRENT_TIMESTAMP,
            type_id int(11) NOT NULL,
            PRIMARY KEY (id))';
         dbDelta($sql);

    }

    function deactivate() {

        // This call needs to be made to deactivate this app within WP MVC

        $this->deactivate_app(__FILE__);

        // Perform any databases modifications related to plugin deactivation here, if necessary

    }

}
