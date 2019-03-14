<html>
<head>
<title>Array</title>
</head>
<body>
<?php

$arr=Array(23,76,89.98,"dog","cat");
echo $arr[3];
echo"<br/>";

$arr[1]=45;
echo $arr[1];
echo"<br/>";

print_r($arr);
echo"<br/>";

echo $arr[0];
echo"<br/>";

$myarray=[34,65,89,[65,5,6]];
print_r($myarray);
echo"<br/>";

echo $myarray[3][2];
echo"<br/>";

?>
</body>
</html>