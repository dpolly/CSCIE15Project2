<?php
/**
 * Created by PhpStorm.
 * User: d_polly
 * Date: 9/28/2014
 * Time: 9:53 PM
 */

    $pwDictionary = array ("one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten");
    $pwSpecialChar = array ("!", "#", "$", "%","*", "?");
    $pwList = "";

if (isset($_GET["optNumberWords"]) && $_GET["optNumberWords"] > 0)
{
    for ($i = 1; $i <= $_GET["optNumberWords"]; $i++) {
        $tempWord = $pwDictionary[rand(0, 9)];
        if (isset($_GET["optCapitalize"]) && $i = 1) $tempWord = ucfirst($tempWord);
        $pwList = $pwList . $tempWord . " ";
    }
    if (isset ($_GET["optNumberIncluded"])) $pwList = $pwList.rand(1, 9);
    if (isset ($_GET["optSpecialChar"])) $pwList = $pwList. $pwSpecialChar[rand(0, 5)];
    $pwList="Your new Password is.....".$pwList;
    $_GET["optNumberWords"]="";
}
else
{
    $pwList = "";
}