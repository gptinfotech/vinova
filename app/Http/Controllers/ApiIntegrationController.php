<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiIntegrationController extends Controller
{
    public function apiService($apiName = '', $apiInputArray = '', $request = '')
    {
        $config = config('common_config');
        $APIEndPointUrl = $config['API_ENDPOINT'];
        $APIKey = $config['API_KEY'];

        // Define the base URL for the GET request
        $url = $APIEndPointUrl . '/users/';

        // If there are any parameters to pass, append them to the URL
        if (!empty($apiInputArray)) {
            $url .= '?' . http_build_query($apiInputArray);
        }

        // Initialize cURL
        $ch = curl_init();

        // Set cURL options for a GET request
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 50);
        curl_setopt($ch, CURLOPT_TIMEOUT, 50);
        curl_setopt($ch, CURLOPT_HTTPGET, true); // Set HTTP GET method

        // Execute the request and get the response
        $response = curl_exec($ch);
        if(curl_errno($ch) != 0){

        }else{
            curl_close($ch);

        }
        

        // Decode the JSON response
        $data = json_decode($response, true);

        // Print the response data for debugging
        echo "<pre>";
        print_r($data);
        die('=========');
    }
}
?>