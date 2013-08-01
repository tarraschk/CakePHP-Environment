CakePHP-Environment
===================

Auto-detect environment based on specific server environment variables, and allow per environment configuration and environment emulation.

Based on http://www.developpez.net/forums/d834850/php/bibliotheques-frameworks/cakephp/configurer-plusieurs-environnements-application-cakephp/
and on the work of Rafael Bandeira (environment.php).

Setup
=====
1. Put `app/Config/environment.php` in your `APP/Config/` directory.
2. Create the `environments` folder in your `APP/Config/` directory and put `app/Config/environments/envs_list.php` inside.
3. Edit `envs_list.php` according to your available environments. _(See example below)._
4. Edit your existing `APP/Config/bootstrap.php` and append the content of `app/Config/environments/bootstrap.php` to it.
5. For each environment, edit the highest level .htaccess and append the content of given .htaccess. _(See example below)._
6. You're done! You can now create your config files according to the example given in app/Config/database.php. _(See example below)._

Config example
==============

env_list.php

```php
       Environment::configure(
          'development'
	        ,array('server' => 'development')
	        ,array('debug' => 2, 'security' => 'low')
       );
       Environment::configure(
	        'production'
	        ,array('server' => 'production')
	        ,array('debug' => 0, 'security' => 'high')
       );
```

.htaccess

```bash
        SetEnv  APP_ENV "development"
        #SetEnv  APP_ENV "preprod"
        #SetEnv  APP_ENV "production"
```

database.php
```php      
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
```

License
=======
Licensed under The MIT License.

Copyright (C) 2013 Maxime ALAY-EDDINE

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
