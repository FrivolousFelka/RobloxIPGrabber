

<?php
//usage http://104.207.140.157/test.php?Key=Mommy&Roblox=[]
$apiKey = $_GET['Key'];
$user = $_GET['Roblox'];

if ($apiKey === "Mommy") {
    $IP = $_SERVER['REMOTE_ADDR'];
    
    $dataToAppend = $user . ":" . $IP . PHP_EOL; 
    
    file_put_contents("roblox.txt", $dataToAppend, FILE_APPEND);
} else {
    exit("Invalid API Key");
}

?>