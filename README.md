CakePHP-Environment
===================

Auto-detect environment based on specific server environment variables, and allow per environment configuration and environment emulation.

Based on http://www.developpez.net/forums/d834850/php/bibliotheques-frameworks/cakephp/configurer-plusieurs-environnements-application-cakephp/
and on the work of Rafael Bandeira (environment.php).

Setup
=====
1. Put app/Config/environment.php in your APP/Config/ directory.
2. Create the environments folder in your APP/Config/ directory and put app/Config/environments/envs_list.php inside.
3. Edit envs_list.php according to your available environments.
4. Edit your APP/Config/bootstrap.php and add the content of app/Config/environments/bootstrap.php to it.
5. For each environment, edit the higher level .htaccess and append the content of given .htaccess.
6. Create your config files according to the example given in app/Config/database.php.
7. You're done!

Licensed under The MIT License.
