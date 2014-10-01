<?php
/**
 * User: d_polly
 * Date: Created 9-28-2014 Last Updated 9-30-2014
 *       9-29-2014 DMP: added Capital,Special Characters and Number Options
 *       9-30-2014 DMP: added messaging and isset to clear errors on page load.
 */

    $pwDictionary = array ("art", "field","quickly","thrown","tired","share","pair","tomorrow","aware","colour",
                            "writing","whenever","quietly","fool","forced","touched","smiling","taste","dog","spent",
                            "steps","worst","legs","watched","ay","thee","eight","worthy","wrote","manners",
                            "proceeded","frightened","somewhat","born","greatest","charge","degree","shame","places",
                            "maam","could","tongue","according","box","wine","filled","servants","calling","fallen","supper");
    $pwSpecialChar = array ("!", "#", "$", "%","*", "?");
    $pwList = "";
    $message = "";

if (isset($_GET["optNumberWords"]) && $_GET["optNumberWords"] > 0 && $_GET["optNumberWords"] <= 5)
{
    for ($i = 1; $i <= $_GET["optNumberWords"]; $i++)
    {
        $tempWord = $pwDictionary[rand(0, 49)];
        if ($_GET["optNumberWords"] > 1 && $i < $_GET["optNumberWords"]) $pwList = $pwList . $tempWord . " ";
        else $pwList = $pwList.$tempWord;
    }
    if (isset($_GET["optCapitalize"])) $pwList = ucfirst($pwList);
    if (isset ($_GET["optNumberIncluded"])) $pwList = $pwList.rand(1, 50);
    if (isset ($_GET["optSpecialChar"])) $pwList = $pwList.$pwSpecialChar[rand(0, 5)];
    $message="Your new password is.....";
}
else if (isset($_GET["optNumberWords"]) && $_GET["optNumberWords"] > 5)
{
    $message="Sorry! maximum of 5 words allowed";
}
else
{
    $message="";
}
