[![Build Status](https://travis-ci.org/tagmeo/valet.svg?branch=master)](https://travis-ci.org/tagmeo/valet) [![Latest Stable Version](https://poser.pugx.org/tagmeo/valet/v/stable)](https://packagist.org/packages/tagmeo/valet) [![Latest Unstable Version](https://poser.pugx.org/tagmeo/valet/v/unstable)](https://packagist.org/packages/tagmeo/valet) [![License](https://poser.pugx.org/tagmeo/valet/license)](https://packagist.org/packages/tagmeo/valet) [![composer.lock](https://poser.pugx.org/tagmeo/valet/composerlock)](https://packagist.org/packages/tagmeo/valet)

This is a custom driver for [Valet](https://laravel.com/docs/master/valet) so you can serve [Tagmeo](https://github.com/tagmeo/tagmeo). Once you've [installed Valet](https://laravel.com/docs/master/valet#installation), just load the custom driver:

```bash
cd ~/.valet/Drivers/
git clone https://github.com/tagmeo/valet .
valet restart
```