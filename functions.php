<?php
function restrictToUK()
{
    // Get the real visitor IP
    $ip = $_SERVER['REMOTE_ADDR'];
    if ($ip === '127.0.0.1' || $ip === '::1') {
        // Allow localhost during development
        return;
    }

    // Fetch location info (using free IP-API)
    $apiUrl = "http://ip-api.com/json/{$ip}?fields=status,country,countryCode,query";
    $response = @file_get_contents($apiUrl);
    $data = $response ? json_decode($response, true) : null;

    // Debugging log (optional)
    error_log("🌐 IP Check: " . $ip . " => " . json_encode($data));

    if (!$data || $data['status'] !== 'success') {
        http_response_code(403);
        die("<h2>Unable to verify your location. Access restricted to UK visitors only.</h2>");
    }

    if ($data['countryCode'] !== 'GB') {
        http_response_code(403);
        die("<h2>Sorry, this website is only available to visitors from the United Kingdom 🇬🇧</h2>");
    }
}

?>