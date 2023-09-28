<?php
function curl_call($api_url='', $method='GET', $headers=[]){
    if (empty($headers)) {
        $headers = ['Authorization: Basic bmVoYTowI21JdkJCdzRBdWJoKTU5QXhEQ0hIQTU='];
    }
    if (empty($api_url)) $api_url = 'https://devsow.wpengine.com/wp-json/communities/all/';
    
        // Initialize cURL session
    $ch = curl_init($api_url);
    // Set cURL options
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute cURL session and fetch data
    $response = curl_exec($ch);
    // Check for errors
    if (curl_errno($ch)) {
        return array("status"=>"fail", 'message'=>curl_error($ch));
    } 
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $data = json_decode($response,true);
    if ($http_code === 200) {
        // API request was successful
        return array("status"=>"success", 'data'=>$data['data']);
    }
    return array("status"=>"fail", 'data'=>$data);
}