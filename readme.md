# VoiceText API for Laravel

[fagai/voicetext](https://github.com/fagai/php-voicetext) base laravel package.

## Require System

* Laravel 5
* PHP 5.5.9~

## Install

```
composer require fagai/laravel-voicetext
```

adding config/app.php providers.
```
Fagai\VoiceText\ServiceProvider::class,
```

adding config/app.php aliases.
```
'VoiceText' => Fagai\VoiceText\Facade::class
```

install or update composer.
```
composer update
```

publish config files
```
php artisan vendor:publish --tag=config
```

## Example

```
$voice = app('voicetext');

$voice->speaker('hikari')
	->emotion('happiness')
	->emotion_level(2)
	->pitch(150)
	->speed(120)
	->volume(150)
	->text('今日も一日がんばるぞい！');

// get wav binary data
$binaryData = $voice->get();
```

## License

MIT License.