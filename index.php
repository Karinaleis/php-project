<!-- Переменные -->
<?php 
$number = 157; //1
$string = 83; //2
$result = $number + $string; //3
echo $result; //4
echo $number . " + " . $string . " = " . $result; //5
echo "result " . gettype($result); //6
echo gettype($number) . " + " . gettype($string) . " = " . gettype($result); //7
unset($number, $string, $result); //8 
?>
<!-- Приведение типов -->
<?php
$number = 123; //1
$string = strval($number); //2
echo "number: " . $number; 
echo "string: " . $string; //3
settype($number, "num1");
echo "изменения" . gettype($number) ; //4
?>
<!--Константы -->
<?php
define("SECOND", 1); //1
define("MINUTE", 60 * SECOND); //2
define("HOUR", 60 * MINUTE);
define("DAY", 24 * HOUR);
define("WEEK", 7 * DAY);
define("MONTH", 30 * DAY);
define("YEAR", 365 * DAY); //3
echo "50 часов" . (50 * HOUR) . " секунд";
echo "19 дней " . (19 * DAY) . " секунд";
echo "7 лет " . (7 * YEAR) . " секунд"; //4
?>
<!-- Массивы -->
<?php
$animals = array(); //1
$animals[] = 'fish';
$animals[] = 'hamster';
$animals[] = 'dog';
$animals[] = 'cat';
$animals[] = 'wolf'; //2
echo $animals[1]; //3
$animals[2] = 'fox'; //4
echo count($animals); //5
print_r($animals); //6
array_pop($animals); //7
?>  
<!-- Сравнение и логика -->
<?php
$a = 1;
$b = 2;
$c = 3;
$d = 4; //1
echo (int) ($a < $b); //2
echo (int) ($c > $d); //3
echo (int) (($a < $b) && ($c > $d)); //4
echo (int) !(($a < $b) && ($c > $d)); //5
?>
<!-- Условия -->
<?php
$a = 1;
$b = 2;
$c = 3;
$d = 4;
if ($a < $b && $c > $d) {  //1
    echo $a + $b + $c + $d;  //2
} elseif ($a < $c) {  //3
    echo $a * $b * $c * $d;  //4
} else {
    echo "Условия не соблюдены";
}  //5
?>
<!-- Циклы -->
<?php
for ($i = 0; $i < 100; $i++) {
    echo "Я пишу на PHP\n";
} //1
for ($i = 0; $i < 100; $i++) {
    echo $i+1 . ". Я пишу на PHP\n";
} //2
?>
