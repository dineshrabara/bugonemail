
## Installation

Begin by installing this package through Composer.
Edit your project's `composer.json` file to require `dinesh/bugonemail`.

    "require": {
		"laravel/framework": "4.0.*",
		"dinesh/bugonemail": "dev-master"
	}

Next, update Composer from the Terminal:

    composer update

Once this operation completes, the next step is to add the service provider. Open `app/config/app.php`, and add a new item to the providers array.

    'Dinesh\Bugonemail\BugonemailServiceProvider'

Next, you need to publish it's config file(s).

    php artisan config:publish dinesh/bugonemail 

Now change Config file.
```php

    return array(
        'project_name' => '? ',
        'notify_emails' => array('your-email@gmail.com'),
        'email_template' => "bugonemail::email.notifyException",
        'notify_environment' => array('local','production'),
        'prevent_exception' => array('Symfony\Component\HttpKernel\Exception\NotFoundHttpException'),
    );

```
Manually Call

    BugeException::notifyException($exception)


Email like

![whoops there was an error](https://cloud.githubusercontent.com/assets/1228130/3213968/56a4eb00-efa3-11e3-9ea6-85e840174c88.jpg)
