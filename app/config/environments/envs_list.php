<?php
    // ***********************************************************************************************************************************************
    // CakePHP Environment
    // Based on http://www.developpez.net/forums/d834850/php/bibliotheques-frameworks/cakephp/configurer-plusieurs-environnements-application-cakephp/
    // Licensed under The MIT License
    // ***********************************************************************************************************************************************
    // This file defines your environments keywords
    // -----------------------------------------------------------------------------------------------------------------------------------------------
   Environment::configure(
  'development'
	,array('server' => 'development')
	,array('debug' => 2, 'security' => 'low')
   );
   Environment::configure(
	'preprod'
	,array('server' => 'preprod')
	,array('debug' => 2, 'security' => 'low')
   );
   Environment::configure(
	'production'
	,array('server' => 'production')
	,array('debug' => 0, 'security' => 'high')
   );
