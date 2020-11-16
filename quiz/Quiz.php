<?php
$first = $_POST["448"];
$second = $_POST["pyramids"];
$third =$_POST["election"];
$four =$_POST["age"];
$five =$_POST["capital"];
$x = 0;
if($first == "johnson")
{
  $x=$x+20;
}
if($second == "three")
{
  $x=$x+20;
}
if($third == "biden")
{
$x=$x+20;
}
if($four == "twenty")
{
  $x=$x+20;
}
if($five== "Abu-dhabi")
{
  $x=$x+20;
}
echo "Your grade is: $x%
<br><br>
Who is 448 professor?
<br>
You answered: $first
<br>
Correct answer: johnson
<br><br>
How many pyramids are there?
<br>
You answered: $second
<br>
Correct answer: three
<br><br>
Who won the US presdential election 2020?
<br>
You answered: $third
<br>
Correct answer: biden
<br><br>
What is my age?
<br>
You answered: $four
<br>
Correct answer: twenty
<br><br>
What is the capital of UAE?
<br>
You answered: $five
<br>
Correct answer: Abu-dhabi";
?>
