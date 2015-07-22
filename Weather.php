<?php
/**
 * Created by PhpStorm.
 * User: benjaminstockard
 * Date: 7/17/15
 * Time: 4:33 PM
 */





require( 'moonphase.inc.php' );

$date = '2008-05-05';
$time = '20:36:00';
$tzone = 'PST';

// Usage: $data = phase( seconds_since_1970 );
$moondata = phase(strtotime($date . ' ' . $time . ' ' . $tzone));

$MoonPhase = $moondata[0];
$MoonIllum = $moondata[1];
$MoonAge = $moondata[2];
$MoonDist = $moondata[3];
$MoonAng = $moondata[4];
$SunDist = $moondata[5];
$SunAng  = $moondata[6];

$phase = 'Waxing';
if ( $MoonAge > SYNMONTH/2 )  {
    $phase = 'Waning';
}
print "$phase\n";



"<br>";
            $city="SanAntonio";
            $country="US"; //Two digit country code
            $url="http://api.openweathermap.org/data/2.5/weather?q=".$city.",".$country."&units=metric&cnt=7&lang=en";
            $json=file_get_contents($url);
            $data=json_decode($json,true);
            //Get current Temperature in Celsius
            echo $data['main']['temp']."<br>";
            //Get weather condition
            echo $data['weather'][0]['main']."<br>";
            //Get cloud percentage
            echo $data['clouds']['all']."<br>";
            //Get wind speed
            echo $data['wind']['speed']."<br>";
            ?>