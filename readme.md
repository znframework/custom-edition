<p align="center">
	<img src="https://www.znframework.com/Projects/ZNWeb/Resources/Files/logo/gitlogo.png" style="max-width:300px"><br><br>
</p>

[![License](https://img.shields.io/github/license/znframework/znframework?style=flat-square)](//packagist.org/packages/znframework/custom-edition) 
[![Latest Stable Version](https://img.shields.io/github/v/release/znframework/znframework?style=flat-square)](//packagist.org/packages/znframework/custom-edition) 
[![Release Date](https://img.shields.io/github/release-date/znframework/fullpack-edition?style=flat-square)](//packagist.org/packages/znframework/custom-edition) 
[![Code Quality](https://img.shields.io/scrutinizer/quality/g/znframework/znframework?style=flat-square)](https://scrutinizer-ci.com/g/znframework/znframework/)
[![Build](https://img.shields.io/scrutinizer/build/g/znframework/znframework/develop?style=flat-square)](https://scrutinizer-ci.com/g/znframework/znframework/inspections/bec37c75-82a1-4e69-8c52-635bf1c6457b/log) 
[![Checks](https://img.shields.io/github/checks-status/znframework/znframework/develop?style=flat-square)](//packagist.org/packages/znframework/custom-edition) 
[![Docs](https://img.shields.io/readthedocs/znframework?style=flat-square)](https://docs.znframework.com) 
[![Contributors](https://img.shields.io/github/contributors/znframework/custom-edition?style=flat-square)](//packagist.org/packages/znframework/custom-edition) 

<h2>ZN Framework Creator's Edition</h2>
<p>
This version allows you to create your own directory structure. Using the ZN Framework's core, you can build the appropriate code framework by building your own directory.
</p>

<h3>Installation</h3>
<p>
You only need to run the following code for the installation.
</p>

```
composer create-project znframework/custom-edition
```

<h3>Directory Configuration</h3>
<p>
For index configuration, open the index.php file. And define the necessary directories. Do you not forget to add a slash (/) at the end of the path information!
</p>

```php
ZN\ZN::defines
([
    'CONTROLLERS_DIR' => 'controllers/', # It is necessary to define this constant.
    'MODELS_DIR'      => 'models/',      # Example path.
    #'VIEWS_DIR'       => '',
    #'ROUTES_DIR'      => '',
    #'CONFIG_DIR'      => '',
    #'DATABASES_DIR'   => '',
    #'STORAGE_DIR'     => '',
    #'COMMANDS_DIR'    => '',
    #'LANGUAGES_DIR'   => '',
    #'LIBRARIES_DIR'   => '',
    #'AUTOLOAD_DIR'    => '',
    #'LAYERS_DIR'      => '',
    #'FILES_DIR'       => '',
    #'TEMPLATES_DIR'   => '',
    #'THEMES_DIR'      => '',
    #'PLUGINS_DIR'     => '',
    #'UPLOADS_DIR'     => '',

])::run('CE');
```