SlimFast
========

A base structure for a Slim application using twig templates.

This is part of a collection of items I use to get going quickly with a new project
using the Slim framework and Foundation from Zurb.

I thought I woudl share them incase others find them useful.

Getting Started
---------------
Create a directory for your new project, and then create a composer.json file similar
to this one:-

~~~
{
    "name": "paul/simple-foundation-test",
    "description": "Just Testing",
    "license": "proprietary",
    "authors": [
        {
            "name": "Paul Court",
            "email": "g@rgoyle.com"
        }
    ],
    "require": {
      "php": ">=5.3.0",
      "monolog/monolog": "1.*",
      "slim/slim": "2.*",
      "slim/views": "0.*",
      "twig/twig": "1.*",
      "michelf/php-markdown": "1.3.*@dev",
      "pmc/mongostorage": "dev-master",
      "pmc/simple-foundation": "dev-master",
      "pmc/slim-fast": "dev-master"
    },
    "scripts": {
      "post-install-cmd": [
        "cp -R vendor/pmc/simple-foundation/web ./",
        "mkdir web/css"
      ],
      "post-update-cmd": [
        "cp -R vendor/pmc/simple-foundation/web ./"
      ]
    }
}
~~~

and run `composer install`.

Once composer has finished, then run `bash vendor/pmc/slim-fast/init.bash`. Once this
completes, you should have `app` and `web` sub-directories which include that starting
point for your app.

Enjoy.
