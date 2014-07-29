<?php

// include_once 'TwitterAPIExchange.php';

// $settings = [
//     'oauth_access_token'        => "",
//     'oauth_access_token_secret' => "",
//     'consumer_key'              => "",
//     'consumer_secret'           => ""
// ];

// $url = 'https://api.twitter.com/1.1/statuses/home_timeline.json';
// $requestMethod = 'GET';

// $twitter = new TwitterAPIExchange($settings);
// $response = $twitter->setGetfield('?screen_name=MarkoAleksic131')
//     ->buildOauth($url, $requestMethod)
//     ->performRequest();

// var_dump(json_decode($response));



/////////////////////////////////////////////////////////////////////////////
// ------------------------------ Functions ------------------------------ //
/////////////////////////////////////////////////////////////////////////////
function to_rand_ascii($chr){
    switch (mt_rand(1, 3)) {
    case 1:
        return "&#" . ord($chr) . ";";
        break;
    case 2:
        return "&#000" . ord($chr) . ";";
        break;
    default:
        return "&#x" . dechex(ord($chr)) . ";";
    }
}
function mungemail($str_email, $str_display = null, $bln_link = true){

    $str_mailto = '';
    $str_encoded_email = '';

    for ($i = 0; $i < strlen($str_email); $i++) {
        $str_encoded_email .= to_rand_ascii(substr($str_email, $i));
    }
    if (strlen(trim($str_display)) > 0) {
        $str_display = $str_display;
    } else {
        $str_display = $str_encoded_email;
    }
    for ($i = 0; $i < strlen('mailto:'); $i++) {
        $str_mailto .= to_rand_ascii(substr('mailto:', $i, 1));
    }
    return '<a href="mailto:'.$str_display.'">'.$str_display.'</a>';
}