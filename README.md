SlimFast
========

A base structure for a Slim application using twig templates.

This is part of a collection of items I use to get going quickly with a new project
using the Slim framework and Foundation from Zurb using SCSS (not the standard CSS
  .zip download that Zurb provide).

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
      "php": ">=5.5.0",
      "monolog/monolog": "1.*",
      "slim/slim": "2.*",
      "slim/views": "0.*",
      "twig/twig": "1.*",
      "michelf/php-markdown": "1.3.*@dev",
      "pmc/slim-fast": "1.0.*"
    }
}
~~~

and run `composer install`.

Once composer has finished, then run `bash vendor/pmc/slim-fast/init.bash`. Once this
completes, you should have `app` and `web` sub-directories.

That's it! The basic app is setup and ready to go.

Requirements
------------
Your development system is going to need to be correctly configured with sass, compass,
and composer.

Oh, It'll probably only work on *nix due to the bash commands/scripts I use. But if you are
on another platform, you can probably work out what you need to change for your system -
there's only half a dozen commands.


Enjoy.
