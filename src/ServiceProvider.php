<?php namespace Fagai\VoiceText;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
	/**
	 * 遅延ローディング
	 * @var bool
	 */
	protected $defer = true;


	public function register()
	{
		$this->mergeConfigFrom($this->configPath(), 'voicetext');

		$this->app->singleton('voicetext', function($app) {
			$config = $app['config'];
			return new VoiceText($config->get('voicetext.api-key'), $config->get('voicetext.default'));
		});

	}

	public function boot()
	{
		$this->publishes([$this->configPath() => config_path('voicetext.php')], 'config');
	}

	public function provides()
	{
		return ['voicetext'];
	}

	protected function configPath()
	{
		return __DIR__ . '/../config/voicetext.php';
	}
}