<?php namespace Fagai\VoiceText;

class Facade extends \Illuminate\Support\Facades\Facade
{
	protected static function getFacadeAccessor()
	{
		return 'voicetext';
	}
}