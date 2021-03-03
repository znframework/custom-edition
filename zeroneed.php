<?php
/**
 * ZN PHP Web Framework
 * 
 * "Simplicity is the ultimate sophistication." ~ Da Vinci
 * 
 * @package ZN
 * @license MIT [http://opensource.org/licenses/MIT]
 * @author  Ozan UYKUN [ozan@znframework.com]
 * @since   2011
 */

/*
|--------------------------------------------------------------------------
| Require Core File
|--------------------------------------------------------------------------
|
| It includes the necessary things for the operation of the system.
|
*/

require __DIR__ . '/vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run ZN
|--------------------------------------------------------------------------
|
| Simplicity is our principle. Enjoy it.
|
*/

ZN\ZN::defines
([
    'BUTCHERY_DIR'    => '',
    'CONTROLLERS_DIR' => '/', # [required] default base directory.
    'MODELS_DIR'      => '',
    'VIEWS_DIR'       => '',
    'ROUTES_DIR'      => '',
    'CONFIG_DIR'      => 'config/',  # Its use is not mandatory, but we recommend it.
    'DATABASES_DIR'   => '',
    'STORAGE_DIR'     => '',
    'COMMANDS_DIR'    => '',
    'LANGUAGES_DIR'   => '', 
    'LIBRARIES_DIR'   => '',
    'AUTOLOAD_DIR'    => '',
    'FILES_DIR'       => '',
    'TEMPLATES_DIR'   => '',
    'THEMES_DIR'      => '',
    'PLUGINS_DIR'     => '',
    'UPLOADS_DIR'     => ''

])::run('CE');