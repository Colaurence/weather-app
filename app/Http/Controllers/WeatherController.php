<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipalities;
use App\Services\WeatherApi;
use App\Http\Controllers\ApiController;
use App\traits\Helper;

class WeatherController extends ApiController
{   
    public function index($city)
    {
        Helper::logger('info','this is the city:',$city);
        $weather = weatherApi::getWeatherByCity($city);
        return $this->ApiResponse($weather);
    }

   
    public function country()   
    {
        $data = Municipalities::paginate(15);
        return $this->SuccessResponse($data, 200);

    }
}
