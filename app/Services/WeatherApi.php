<?php
namespace App\Services;
use Illuminate\Support\Facades\Http;
class WeatherApi
{
    
    public function getWeatherByCity($city){
      $weather = config('weather.api');
      return Http::get('api.openweathermap.org/data/2.5/weather?q='.$city.'&appid='.$weather);
    }
}
