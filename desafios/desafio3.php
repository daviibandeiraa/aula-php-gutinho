<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<div>
<form method="GET" action="qualquer">
<h1>Tabuada do 8</h1>
</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<div>
<?php
$tab = 8;

for($i = 1; $i <= 10; $i++):
    $res = $i * $tab; 
    echo "$i x $tab =  $res <br/>";   
endfor;
?>