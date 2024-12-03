<?php
print "<hr>";
print "<p><b>V University</b></p>";
print "hello";
print "Welcome";
?>


<?php
echo ("<hr>");
echo ("<p><b>V University</b></p>");
echo "hello<br/>";
echo "One ", "Two ", "Three ";
?>


<?php
echo "<br>";
$txt = "Hello world!";
$x = 5;
$y = 10.5;
$z = true;
$w = null;
echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo "$x"; // it will not be used as string ,it is ……
echo "<br>";
echo $y;
echo "<br>";
echo $z;
echo "<br>";
echo $w;
?>




<?php
 // case-sensitive constant name
 define("GREETING", "Welcome to VU!", true);
 echo greeting;
 echo "GREETING"; // not as variable it will print the string
 $txt2 = "WEB Lab";
 echo "Study PHP at " . $txt2 . "<br>";
?>

<?php
 function setHeight($minheight = 50) {
echo "The height is : $minheight <br>";
 }
 setHeight(350);
 setHeight(); //if there is no default it will cause error. setHeight(135);
 setHeight(80);
?>