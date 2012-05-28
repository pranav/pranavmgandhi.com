<?php
if(isset($_POST['edit']))
    die();
else 
    echo "LOLOL;";
?>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <title>Secret Edit Page</title>
    <style type="text/css">
        body {text-align:center;}
        textarea {width:800px;height:400px;}
    </style>
</head>
<body>
<?php

$pages = (array)json_decode(file_get_contents("data.json"));

$keys = array_keys($pages);
for($i = 0; $i < count($pages); $i++){
    echo <<<texts
    <h1>{$keys[$i]}</h1>
    <input type="hidden" name="page" value="{$keys[$i]}">
    <textarea>{$pages[$keys[$i]]}</textarea><br>
texts;
}
?>
</body>
</html>