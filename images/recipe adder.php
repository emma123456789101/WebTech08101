<?php
if(isset($_POST['submit']))
{
$recipe_name= $_POST['recipe_name'];
$method= $_POST['method'];

$file = fopen("recipe_adder.txt","w+") or die("file will not open on your browser");// this will create and open a text file for the recipes to be added
$s = $recipe_adder. ",".method."\n";
fputs(%file,$s) or die("recipe was not able to be added"); // write a single like to file
fclose($file); //closing the file
}
?>