<p align="center">
	<img width="800" height="300" src="https://cloud.teslaerp.com/tesla/Application/Resources/Uploads/znframework/gallery/zn/1513284150_zn800.jpg"><br>
    <a title="copy to clipboard" class="copy_on_clip" data-clipboard-target="#latest_stable_version_markdown">
        <img class="spinned latest_stable_version_img" src="https://poser.pugx.org/znframework/custom-edition/v/stable" style="display: inline;">
    </a>
    <a title="copy to clipboard" class="copy_on_clip" data-clipboard-target="#latest_unstable_version_markdown">
        <img class="spinned latest_unstable_version_img" src="https://poser.pugx.org/znframework/custom-edition/v/unstable" style="display: inline;">
    </a>
    <a title="copy to clipboard" class="copy_on_clip" data-clipboard-target="#license_markdown">
        <img class="spinned license_img" src="https://poser.pugx.org/znframework/custom-edition/license" style="display: inline;">
    </a>
</p>
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