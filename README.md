Silverback API client for PHP
=============================

PHP client and example for APES Silverback. The API documentation is available at: [http://kanzi.technoapes.co/api](http://kanzi.technoapes.co/api)

Get Started
-----------

#### Requirements

To run this application on your machine, you need at least:

* PHP >= 5.5
* Composer >= 1.0

#### Composer

Composer is used for dependency management. You can run:

    composer install

### Example

There is an example at `examples/main.php` that uses all the operations of the API, for running the example rename
the `examples/config.ini.dist` to `examples/config.ini` and replace the value of `apes_Auth_HeaderToken[key]` with
the customer key that was given to you instead of `<INSERT_KEY_HERE>`.

Make sure the uncommented `base_path` line points to the right environment: development, staging or production.

There is a `app.yaml` file in the root directory, in case you want to run the example from a Google App Engine PHP environment,
to start the dev app server use the following command

``
dev_appserver.py <path_to_root>
``

However you can ignore this and run the examples freely from any other PHP environment since App Engine is not a requirement.