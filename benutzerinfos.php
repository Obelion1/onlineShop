<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benutzerinfos</title>
</head>
<body>
<h1> Benutzerinfos </h1>

<?php

//Website aufruf Zeit
date_default_timezone_set('Europe/Berlin');
$reqFloat = $_SERVER['REQUEST_TIME_FLOAT'] ?? microtime(true);
$dt = DateTimeImmutable::createFromFormat('U.u', sprintf('%.6f', $reqFloat));
$dt = $dt->setTimezone(new DateTimeZone('Europe/Berlin')); 
$server_sql = $dt->format('Y-m-d H:i:s.u');
echo "<p>Zeit des Website aufrufs: " . $server_sql . "</p>";

// URL
$host = $_SERVER['HTTP_HOST'];
$uri  = $_SERVER['REQUEST_URI'];
$fullUrl = $protocol . "://" . $host . $uri;
echo "<p>Full URL: " . $fullUrl . "</p>";

//IP
$ip = $_SERVER['REMOTE_ADDR'];
echo "<p>Client IP : " . $ip . "</p>";

//Browser
$ua = $_SERVER['HTTP_USER_AGENT'];
$browser = "Unknown";
$version = "";

//browscap hat leider nicht geklappt, hier chat gpts version ohne browscap:
if (preg_match('/Edg\/([0-9\.]+)/i', $ua, $m)) {
    $browser = "Edge";
    $version = $m[1];
} elseif (preg_match('/Chrome\/([0-9\.]+)/i', $ua, $m) && strpos($ua, 'Edg') === false) {
    $browser = "Chrome";
    $version = $m[1];
} elseif (preg_match('/Firefox\/([0-9\.]+)/i', $ua, $m)) {
    $browser = "Firefox";
    $version = $m[1];
} elseif (preg_match('/Safari\/([0-9\.]+)/i', $ua, $m) && strpos($ua, 'Chrome') === false) {
    $browser = "Safari";
    $version = $m[1];
} elseif (preg_match('/MSIE ([0-9\.]+)/i', $ua, $m)) {
    $browser = "Internet Explorer";
    $version = $m[1];
} elseif (preg_match('/Trident\/7.0;.*rv:([0-9\.]+)/i', $ua, $m)) {
    $browser = "Internet Explorer";
    $version = $m[1];
}

echo "Browser: $browser<br>";

//OS
$ua = $_SERVER['HTTP_USER_AGENT'];
$os = "Unknown OS";

// Windows
if (preg_match('/Windows NT 10\.0/i', $ua)) {
    $os = "Windows 10";
} elseif (preg_match('/Windows NT 6\.3/i', $ua)) {
    $os = "Windows 8.1";
} elseif (preg_match('/Windows NT 6\.2/i', $ua)) {
    $os = "Windows 8";
} elseif (preg_match('/Windows NT 6\.1/i', $ua)) {
    $os = "Windows 7";
} elseif (preg_match('/Windows NT 6\.0/i', $ua)) {
    $os = "Windows Vista";
} elseif (preg_match('/Windows NT 5\.1/i', $ua)) {
    $os = "Windows XP";
}
// macOS
elseif (preg_match('/Mac OS X ([0-9_\.]+)/i', $ua, $m)) {
    $os = "macOS " . str_replace('_', '.', $m[1]);
}
// iOS
elseif (preg_match('/iPhone OS ([0-9_]+)/i', $ua, $m)) {
    $os = "iOS " . str_replace('_', '.', $m[1]);
} elseif (preg_match('/iPad.*OS ([0-9_]+)/i', $ua, $m)) {
    $os = "iPadOS " . str_replace('_', '.', $m[1]);
}
// Android
elseif (preg_match('/Android ([0-9\.]+)/i', $ua, $m)) {
    $os = "Android " . $m[1];
}
// Linux (generic)
elseif (preg_match('/Linux/i', $ua)) {
    $os = "Linux";
}

echo "Operating System: $os<br>";

//architecture
$arch = "Unknown";

if (stripos($ua, 'WOW64') !== false || stripos($ua, 'Win64') !== false || stripos($ua, 'x64') !== false) {
    $arch = "64-bit";
} elseif (stripos($ua, 'i686') !== false || stripos($ua, 'x86') !== false) {
    $arch = "32-bit";
} elseif (stripos($ua, 'arm64') !== false || stripos($ua, 'aarch64') !== false) {
    $arch = "ARM 64-bit";
} elseif (stripos($ua, 'arm') !== false) {
    $arch = "ARM 32-bit";
}

?>
</body>
</html>