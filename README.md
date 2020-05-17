# MaterializeTheme plugin for CakePHP

This plugin provides easy to use [materialize](https://materializecss.com) theme in CakePHP 4.x

![preview](https://github.com/sdtorresl/matherialize-theme/blob/master/webroot/img/preview.png)

## Prerequisites

A complete CakePHP environment is required for this proyect.

In this [repository](https://github.com/sdtorresl/vagrant-cakephp/) you can deploy a clean environment with all dependencies ready for develop CakePHP applications.

## Installation

You can install this plugin into your CakePHP application using [composer](https://getcomposer.org).

The recommended way to install composer packages is:

```{bash}
composer require sdtorresl/materialize-theme:dev-master
```

## Configuration

Load the plugin in your `src/Application.php` file (`bootsrap()` method):

```{php}
$this->addPlugin('MaterializeTheme');
```

To set the default bake template add the follow lines to `config/bootstrap.php`:

```{php}
Configure::write('Bake.theme', 'MaterializeTheme');
```

To set the default layout in `AppController` add the follow method:

```{php}
use Cake\Event\EventInterface;
[...]
public function beforeRender(EventInterface $event) {
    parent::beforeRender($event);

    $this->viewBuilder()->setLayout('MaterializeTheme.materialize');
}
```

## Extending plugin templates

If you need to extend the templates follow the next steps:

```{bash}
cd APP_HOME
mkdir -p templates/plugin/sdtorresl/materialize-theme
cp -r vendor/sdtorresl/materialize-theme/templates/ templates/plugin/sdtorresl/materialize-theme/
```

More info related with overriding is available [here](https://book.cakephp.org/4/en/plugins.html#overriding-plugin-templates-from-inside-your-application):

## Authors

[Sergio Torres](sdtorresl@innovaciones.co)

## License

This project is licensed under the MIT License - see the LICENSE.md file for details

## Support

Have issues? Write to our [support mail](mailto:soporte@innovaciones.co)
