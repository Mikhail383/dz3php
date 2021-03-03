<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "1. Сделайте функцию, которая возвращает куб числа. Число передается
параметром."; echo '<br />';

	function cube()
	{   $num = 3;
        echo $num * $num * $num;
	}
    cube();

echo '<hr />';

echo "2.Сделайте функцию, которая возвращает сумму двух чисел. Числа
передаются параметрами функции."; echo '<br />';

  
    function sum($num1, $num2) {
        return $num1 + $num2;
        }
    echo sum(1, 3);
    
echo '<hr />';

echo "3. Сделайте функцию, которая принимает параметром число от 1 до 7, а
возвращает день недели на русском языке."; echo '<br />';

    function day($num){
        $day = array('Пн', 'Вт', 'Ср', 'Чет', 'Пят', 'Суб', 'Воск');
        echo $day[$num-1];
    }
    echo day(1).'<br>';

echo '<hr />';

echo "4. Сделайте функцию, которая параметром принимает число и проверяет -
отрицательное оно или нет. Если отрицательное - пусть функция вернет true,
а если нет - false."; echo '<br />';

function num($a) {
    if ($a < 0 ) return $a = 'true';
    else return $a = 'false';
}
    echo num(-4);

echo '<hr />';

echo "5. Сделайте функцию getDigitsSum (digit - это цифра), которая параметром
принимает целое число и возвращает сумму его цифр."; echo '<br />';

function getDigitsSum($a){
    if (is_numeric($a)){
        $a = round($a);
        $a = strval($a);
        $sum = 0;
        for ($i = 0; $i < strlen($a); $i++){
             $sum += intval($a[$i]);
        }
        return $sum;
    } else return 'переменная не число';
}

echo getDigitsSum(2605);



echo '<hr />';

echo "6. Найдите все года от 1 до 2020, сумма цифр которых равна 13. Для этого
используйте вспомогательную функцию getDigitsSum из предыдущей задачи."; echo '<br />';


echo '<hr />';

echo "7. Сделайте функцию isEven() (even - это четный), которая параметром
принимает целое число и проверяет: четное оно или нет. Если четное - пусть
функция возвращает true, если нечетное - false."; echo '<br />';

function isEven($a) {
    if ($a%2 == 0) return $a = 'true';
    else return $a = 'false';
}
echo isEven(4);

echo '<hr />';

echo "8. Сделайте функцию, которая принимает строку на русском языке, а
возвращает ее транслит."; echo '<br />';

function translit($str) {
    $russian = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я');
    
   $translit = array('A', 'B', 'V', 'G', 'D', 'E', 'E', 'Gh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'Ch', 'Sh', 'Sch', 'Y', 'Y', 'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya');

   return str_replace($russian, $translit, $str);
}
 echo translit("Русский текст в транслит");

 echo '<hr />';

 echo "9. Сделайте функцию, которая возвращает множественное или единственное
 число существительного. Пример: 1 яблоко, 2 (3, 4) яблока, 5 яблок. Функция
 первым параметром принимает число, а следующие 3 параметра — форма
 для единственного числа, для чисел два, три, четыре и для чисел, больших
 четырех, например, func(3, 'яблоко', 'яблока', 'яблок')."; echo '<br />';

 function ret_noun($a, $form_for_1, $form_for_2, $form_for_3){
    $a = abs($a) % 100;
    $b = $a % 10;
    if ($a > 10 && $a < 20)
        return $form_for_3;
    if ($b > 1 && $b < 5)
        return $form_for_2;
    if ($b == 1)
        return $form_for_1;
    return $form_for_3;
}
$a = 51;
echo $a . ' ' . ret_noun($a, 'яблоко', 'яблока', 'яблок');

echo '<hr />';

 echo "10. Дан массив с числами. Выведите последовательно его элементы
 используя рекурсию и не используя цикл."; echo '<br />';
 
 function echoArray($arr, $i = 0){
     if (!empty($arr[$i])) {
         echo $arr[$i]. '<br>';
         $i++;
         echoArray($arr, $i);
     }
 }

 echoArray([1, 4, 5, 4, 5]);

 echo '<hr />';

 echo "11. Дано число. Сложите его цифры. Если сумма получилась более 9-ти,
 опять сложите его цифры. И так, пока сумма не станет однозначным числом
 (9 и менее)."; echo '<br />';
 function lowNumber($num) {
    return $num <= 9 ? $num : lowNumber(array_sum(str_split($num, 1)));
  }
  $num = 12;
  echo lowNumber($num);

echo '<hr />';

 echo "12. Рассчитать скорость движения машины и выведите её в удобочитаемом
 виде. Осуществить возможность вывода в км/ч, м/c. Представить решение
 задачи с помощью одной функции."; echo '<br />';
 function speed($s, $t, $val){
    $speed[1] = $s / $t . ' км/ч';
    $speed[2] = $speed[1] / 3.6 . ' м/с';
    return $speed[$val];
}
echo speed(90, 1, 2);


echo '<hr />';

 echo "13. Даны 2 слова, определить можно ли из 1ого слова составить 2ое, при
 условии что каждую букву из строки 1 можно использовать только один раз."; echo '<br />';

 echo '<hr />';

 echo "14. Палиндромом называют последовательность символов, которая читается
 как слева направо, так и справа налево. Напишите функцию по определению
 палиндрома по переданному параметру."; echo '<br />';
function polindr($str){
 
 $strrev=strrev($str);
 if ($str==$strrev) {echo 'это палиндром!!!!';}
 else {echo 'это <b>нифига</b> не палиндром!!!';}
}
echo polindr('10101 10101');

echo '<hr />';

 echo "15. Создание функцию создания таблицы умножения в HTML-документе в
 виде таблицы с использованием соотв. тегов."; echo '<br />';


 echo "<table border=\"1\">";
 function get_tabl($cols, $rows, $number, $number2){
     for ($r = 0; $r <= $rows; $r++){
         echo('<tr>');
         if ($r == 0) {
             for ($i = 0; $i < $rows; $i++) {
                 echo('<th>' .$number2++.'</th>');
             }
         }
         for ($c = 0; $c <= $cols; $c++){
             if ($c == 0) {
                 echo('<th>' .$number++.'</th>');
             } else if ($r != 0) {
                 echo( '<td>' .$c*$r.'</td>');
             }
         }
         echo('</tr>');
     }
 }
 echo get_tabl(10, 10, 0, 0);
 echo "</table>";

 echo '<hr />';

 echo "16. Дана строка с текстом. Напишите функцию определения самого длинного
 слова."; echo '<br />';

 function get_str($text){
    $arr = explode(" ", $text);
    $max = $arr[0];
    for ($i=0; $i<count($arr); $i++) {
        if(strlen($arr[$i]) > strlen($max)){
            $max = $arr[$i];
        }
    }
    echo $max;   
}
echo get_str('He is tall and handsome');


 echo '<hr />';

 echo "17. Напишите функцию определения суммарного количества единиц в числах
 от 1 до 100."; echo '<br />';
 function sum_100(){
     $a = 1;
     $b = 100;
     echo (($a + $b) / 2) * $b;

 }
 sum_100();

 


 echo '<hr />';

 echo "18. Напишите функцию, которая разбивает длинную строку тегами <br> так,
 чтобы длина каждой подстроки была не более N символов. Новая подстрока
 не должна начинаться с пробела."; echo '<br />';


?>
</body>
</html>