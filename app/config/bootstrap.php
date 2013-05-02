<?php
    // ***********************************************************************************************************************************************
    // CakePHP Environment
    // Based on http://www.developpez.net/forums/d834850/php/bibliotheques-frameworks/cakephp/configurer-plusieurs-environnements-application-cakephp/
    // Licensed under The MIT License
    // ***********************************************************************************************************************************************
    // Just insert these lines in your bootstrap.php
    // -----------------------------------------------------------------------------------------------------------------------------------------------
    $configsDir    = APP . 'config' ;
    $envsDir    = APP . 'config' . DS . 'environments';
    $configFile = $configsDir . DS . 'environment.php';
    $envsFile = $envsDir . DS . 'envs_list.php';
    
    if ( file_exists( $configFile ) ){
       include_once( $configFile );
       if (file_exists( $envsFile )){
          include_once( $envsFile );
          Environment::start($_SERVER['APP_ENV']);      
       }
    }
