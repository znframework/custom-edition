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
For index configuration, open the index.php file. And define the necessary directories.
</p>

```php
ZN\ZN::defines
([
    #'CONTROLLERS_DIR' => '', # Required
    #'MODELS_DIR'      => '',
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