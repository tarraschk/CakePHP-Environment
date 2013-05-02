<?php
    // ***********************************************************************************************************************************************
    // CakePHP Environment
    // Based on http://www.developpez.net/forums/d834850/php/bibliotheques-frameworks/cakephp/configurer-plusieurs-environnements-application-cakephp/
    // Licensed under The MIT License
    // ***********************************************************************************************************************************************
    // This file gives you an example on an environment implementation for your database
    // -----------------------------------------------------------------------------------------------------------------------------------------------
    
    class DATABASE_CONFIG {
     
        var $development = array(
            'driver' => 'mysql',
            'persistent' => false,
            'host' => 'host',
            'login' => 'login_user',
            'password' => 'pass_pass',
            'database' => 'dbname',
            'prefix' => '',
            'encoding'=>'utf8'
            );
            
        var $preprod = array(
            'driver' => 'mysql',
            'persistent' => false,
            'host' => 'host',
            'login' => 'login_user',
            'password' => 'pass_pass',
            'database' => 'dbname',
            'prefix' => '',
            'encoding'=>'utf8'
            );
            
        var $production = array(
            'driver' => 'mysql',
            'persistent' => false,
            'host' => 'host',
            'login' => 'login_user',
            'password' => 'pass_pass',
            'database' => 'dbname',
            'prefix' => '',
            'encoding'=>'utf8'
            );
     
        var $default = array();
     
            function __construct()
            {       	      
               if (isset($_SERVER['APP_ENV']))
                  $this->default = $this->$_SERVER['APP_ENV'];
               else
                  $this->default = $this->development;
            }
            function DATABASE_CONFIG()
            {
               $this->__construct();
            }
    }
