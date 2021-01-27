<?php
include 'equation.php';
$a = 2;
$b = 5;
$c = 2;
$equat = new equation($a, $b, $c);
echo ("Nghiem cua phuong trinh: ".$equat -> getDiscriminant())."<br>";
echo $equat -> getRoot();