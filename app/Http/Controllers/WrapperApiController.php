<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WrapperApiController extends Controller
{
    public function addresses()
    {	
        $json = Http::put('https://api.shipengine.com/v1/addresses')->json();
    	return response()->json($json);
    }
    public function packages()
    {
        $json = Http::withToken('TEST_KrE2g2ErMzy2e7Ka8EWeJUPC1Czrw3uJW+cvJnqLGf0')
		->withBody(json_encode(["path" => '/uts-webservices',"autorename" => true]), 'application/json')
        ->get('https://api.shipengine.com/v1/packages')->json();
    	return response()->json($json);
    }
    public function manifests()
    {
        $json = Http::withToken('TEST_KrE2g2ErMzy2e7Ka8EWeJUPC1Czrw3uJW+cvJnqLGf0')
		->withBody(json_encode(["path" => '/uts-webservices',"autorename" => true]), 'application/json')
        ->post('https://api.shipengine.com/v1/manifests')->json();
    	return response()->json($json);
    }
    public function batches()
    {
        $json = Http::withToken('TEST_KrE2g2ErMzy2e7Ka8EWeJUPC1Czrw3uJW+cvJnqLGf0')
		->withBody(json_encode(["path" => '/uts-webservices',"autorename" => false]), 'application/json')
        ->post('https://api.shipengine.com/v1/batches')->json();
    	return response()->json($json);
    }
    public function carriers()
    {
        $json = Http::withToken('TEST_KrE2g2ErMzy2e7Ka8EWeJUPC1Czrw3uJW+cvJnqLGf0')
		->withBody(json_encode(["path" => '/uts-webservices',"autorename" => false]), 'application/json')
        ->get('https://api.shipengine.com/v1/carriers')->json();
    	return response()->json($json);
    }

}
?>