<?php
namespace App\traits;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class Helper
{
  public function logger($type ,$message, $data= ''){
    Log::$type($message.$data);
  }
}
