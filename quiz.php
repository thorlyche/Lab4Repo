<?php
$q1 = $_POST["question1"];
$q2 = $_POST["question2"];
$q3 = $_POST["question3"];
$q4 = $_POST["question4"];
$q5 = $_POST["question5"];
$correctCount =0;

echo "RESULTS:<br><br>";
echo "Question 1: What tool does Thor carry with him?<br>";
echo "You Answered: " . $q1 . "<br>";
echo "Correct Answer: Hammer<br><br>";
if($q1=="Hammer")
  $correctCount++;
echo "Question 2: What is the name of Thor's tool?<br>";
echo "You Answered: " . $q2 . "<br>";
echo "Correct Answer: Mjolnir<br><br>";
if($q2=="Mjolnir")
  $correctCount++;
echo "Question 3: Thor is known as the god of ________?<br>";
echo "You Answered: " . $q3 . "<br>";
echo "Correct Answer: Thunder<br><br>";
if($q3=="Thunder")
  $correctCount++;
echo "Question 4: What is the name of Thor's brother?<br>";
echo "You Answered: " . $q4 . "<br>";
echo "Correct Answer: Loki<br><br>";
if($q4=="Loki")
  $correctCount++;
echo "Question 5: Who was Thor's father?<br>";
echo "You Answered: " . $q5 . "<br>";
echo "Correct Answer: Odin<br><br>";
if($q5=="Odin")
  $correctCount++;

echo "You answered: " .$correctCount. " questions correctly<br>Your Score: " .($correctCount*20). "%<br>";
?>
