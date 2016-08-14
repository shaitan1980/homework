<?php

/* Задание №1 */

$arr1 = ['html', 'css', 'php', 'js', 'jq'];

echo '<div style="width: 80%; margin: 0 auto;">';
echo '<p><strong>№1 Вывести знаечения массива в столбик</strong></p>';

foreach ($arr1 as $value) {
    echo  $value . '<br>';
}
echo '</div>';

/* Задание №2 */

$arr2 = [1, 20, 15, 17, 24, 35];
$result = 0;

echo '<div style="width: 80%; margin: 0 auto;">';
echo '<p><strong>№2 Найти сумму элементов массива</strong></p>';

foreach ($arr2 as $value) {
    $result = $result+$value;
}

echo $result;

echo '</div>';


/* Задание №3 */

$arr3 = [26, 17, 136, 12, 79, 15];
$result = 0;

echo '<div style="width: 80%; margin: 0 auto;">';
echo '<p><strong>№3 Найти сумму квадратов элементов массива</strong></p>';

foreach ($arr3 as $value) {
    $result = $result+pow($value, 2);
}

echo $result;

echo '</div>';


/* Задание №4 */

$arr4 = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];


echo '<div style="width: 80%; margin: 0 auto;">';
echo '<p><strong>№4 С помощью первого цикла foreach выведите на экран столбец ключей, с помощью второго — столбец элементов.</strong></p>';

echo '<h4>Список ключей</h4>';
echo '<p>';
foreach ($arr4 as $key => $value) {
    echo $key . '<br>';
}
echo '</p>';

echo '<h4>Список значений</h4>';
echo '<p>';
foreach ($arr4 as $key => $value) {
    echo $value . '<br>';
}
echo '</p>';


echo '</div>';


/* Задание №5 */

echo '<div style="width: 80%; margin: 0 auto;">';
echo '<p><strong>№5 . Дан массив $arr с ключами \'Коля\', \'Вася\', \'Петя\' с элементами \'200\', \'300\', \'400\'. С помощью цикла foreach выведите на экран столбец строк такого формата: \'Коля — зарплата 200 долларов.</strong></p>';

$arr5 = [
    'Коля' => 200,
    'Вася' => 300,
    'Петя' => 400
];

foreach ($arr5 as $key => $value) {
    echo $key . ' -  зарплата ' . $value . ' долларов' . '<br>';
}

echo '</div>';

/* Задание №6 */
echo '<div style="width: 80%; margin: 0 auto;">';
echo '<p><strong>Задание №6</strong></p>';

$arr6 = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];

$en = [];
$ru = [];

foreach ($arr6 as $key => $item) {
    $en[] = $key;
    $ru[]  =$item;
}

var_dump($en);
echo '<br>';
var_dump($ru);

echo '</div>';

/* Задание №7 */
echo '<div style="width: 80%; margin: 0 auto;">';
echo '<p><strong>Задание №7</strong></p>';

$arr7 = [2, 5, 9, 15, 0, 4];


foreach ($arr7 as $value) {
    if($value > 3 && $value < 10){
        echo $value . '<br>';
    }
}



echo '</div>';

/* Задание №8 */
echo '<div style="width: 80%; margin: 0 auto;">';
echo '<p><strong>Задание №8</strong></p>';

$arr8 = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$str8 ='';

foreach ($arr8 as $item) {
    $str8 .= $item;
}

echo 'Foreach string: ' . $str8 . '<br>';

$count = count($arr8);
$str ='';

for ($i=0; $i< $count; $i++) {
    $str .= $arr8[$i];
}

echo strval($str); //На всякий случай, чтобы точно была строка

echo '<br>';

$k=0;
$string = '';
while ($k < $count) {
    $string.= $arr8[$k];
    $k++;
}

echo strval($string);

echo '</div>';


/* Задание №9 */
echo '<div style="width: 80%; margin: 0 auto;">';
echo '<p><strong>Задание №9</strong></p>';

for ($i = 1; $i<101; $i++) {
    echo $i . '<br>';
}

echo '<br>';

$i = 1;
while ($i <= 100){
    echo $i . '<br>';
    $i++;
}

echo '</div>';

/* Задание №10 */
echo '<div style="width: 80%; margin: 0 auto;">';
echo '<p><strong>Задание №10</strong></p>';

for ($i = 11; $i<34; $i++) {
    echo $i . '<br>';
}

echo '<br>';

$i = 11;
while ($i <= 33){
    echo $i . '<br>';
    $i++;
}

echo '</div>';

/* Задание №11 */
echo '<div style="width: 80%; margin: 0 auto;">';
echo '<p><strong>Задание №11 вывести четные числа</strong></p>';

for ($i=0; $i<=100; $i++) {
    if($i%2==0) {
        echo $i . '<br>';
    }
}

echo '</div>';


/* Задание №12 */
echo '<div style="width: 80%; margin: 0 auto;">';
echo '<p><strong>Задание №12 $n = 1000 </strong></p>';

$n = 1000;
$num = 0;

while ($n >= 50) {
    $n = $n/2;
    $num++;
}

$result = $n;

echo $result . '<br>';
echo $num . '<br>';

echo '</div>';


/* Задание №13 */
echo '<div style="width: 80%; margin: 0 auto;">';
echo '<p><strong>Задание №13 таблица умножения </strong></p>';

$i = 1;
$row = 9;
$n = 1;
$col = 9;

echo '<table border=1 cellspacing=0>';
for ($fi = $i; $fi <= $row; $fi++) {
    if ($fi == $i) {
        echo "<tr height=30 valign=center>";
        echo "<td width=30 align=center></td>";//вывод пустой ячейки
        for ($fn = $n; $fn <= $col; $fn++) {
            echo "<td width=30px align=center bgcolor=#ddd><b>$fn</b></td>";
        }
        echo '</tr>';
    }//endif
    echo '<tr height=30 valign=center>';
    echo "<td width=30 align=center bgcolor=#ddd><b>$fi</b></td>";
    for ($fn = $n; $fn <= $col; $fn++) {
        echo '<td width=30 align=center>' . $fn * $fi . '</td>';
    }
    echo '</tr>';
}
echo '</table>';


echo '</div>';

/* Задание №14 */
echo '<div style="width: 80%; margin: 0 auto;">';
echo '<p><strong>Задание №14 </strong></p>';

$arr14 = [4, 2, 5, 19, 13, 0, 10];
$e = 2 || 3 || 4;

foreach ($arr14 as $item) {
    if($item = $e){
        echo 'есть';
        break;
    } else {
        echo 'нет';
    }
}



echo '</div>';

/* Задание №15 */
echo '<div style="width: 80%; margin: 0 auto;">';
echo '<p><strong>Задание №15 </strong></p>';

$arr15 = [4, 2, 5, 19, 13, 0, 10];

$count =0;

foreach ($arr15 as $item) {
    $count ++;
}

echo $count;


echo '</div>';

/* Задание №16 */
echo '<div style="width: 80%; margin: 0 auto;">';
echo '<p><strong>Задание №16 </strong></p>';

$arr16 = [1, 2, 3, 4, 5, 6, 7, 8, 9];

$count = count($arr16);
$i = 1;

foreach ($arr16 as $item) {
    If ($i<$count) {
        echo $item . ',' . '<br>';
    }
    else {
        echo $item . '<br>';
    }

    $i++;

}


echo '</div>';

/* Задание №17 */
echo '<div style="width: 80%; margin: 0 auto;">';
echo '<p><strong>Задание №17 </strong></p>';

$month = date('n');

$arr17 = ['январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь',
    'декабрь'];
$i=1;

foreach ($arr17 as $item) {

    if($i == $month) {
        echo '<strong>' . $item . '</strong>' . '<br>';
    } else {
        echo $item . '<br>';
    }
    $i++;
}

echo '</div>';


/* Задание №18 */
echo '<div style="width: 80%; margin: 0 auto;">';
echo '<p><strong>Задание №18 </strong></p>';

$arr18 = ['понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье'];
$i=1;

foreach ($arr18 as $item) {

    if($i == 6 || $i == 7) {
        echo '<strong>' . $item . '</strong>' . '<br>';
    } else {
        echo $item . '<br>';
    }
    $i++;
}

echo '</div>';

/* Задание №19 */
echo '<div style="width: 80%; margin: 0 auto;">';
echo '<p><strong>Задание №19 </strong></p>';

$arr19 = ['понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье'];
$i=1;
$day = date('w');

foreach ($arr19 as $item) {
    if($i == $day) {
        echo '<i>' . $item . '</i>' . '<br>';
    } else {
        echo $item . '<br>';
    }

    $i++;
}

echo '</div>';

/* Задание №20 */
echo '<div style="width: 80%; margin: 0 auto;">';
echo '<p><strong>Задание №20 </strong></p>';

$str = '';
for ($i = 1; $i <= 20; $i++) {
    $str .= 'x';
    echo $str . '<br>';
}

echo '</div>';

/* Задание №21 */
echo '<div style="width: 80%; margin: 0 auto;">';
echo '<p><strong>Задание №21 </strong></p>';

$str ='';
for ($i = 1; $i <= 9; $i++) {
    for ($j = 0; $j < $i; $j++) {
        $str .= $i;
    }
    echo $str.'<br>';
    $str = '';
    $j = 0;
}

echo '</div>';

/* Задание №22 */
echo '<div style="width: 80%; margin: 0 auto;">';
echo '<p><strong>Задание №22 </strong></p>';

$str ='xx';

for ($i = 1; $i<=5; $i++) {
    echo $str . '<br>';
    $str .= 'xx';
}

echo '</div>';


/* Задание №23 */
echo '<div style="width: 80%; margin: 0 auto;">';
echo '<p><strong>Задание №23 </strong></p>';


$input = 123;
$number = strval($input);

$sum = 0;

$arr23 = str_split($number);

for ($i=0; $i<count($arr23); $i++) {
    $sum += $arr23[$i];
}

// выводим данные
echo $number."<br>";
echo $sum;

echo '</div>';

/* Задание №24 */
echo '<div style="width: 80%; margin: 0 auto;">';
echo '<p><strong>Задание №24 </strong></p>';

$input = 442158755745;
$number = strval($input);
$my = 4;
$i =0;

$arr24 = str_split($number);

foreach ($arr24 as $item) {
    if($item == $my) {
        $i++;
    }
}

echo $i;

echo '</div>';


/* Задание №25 */
echo '<div style="width: 80%; margin: 0 auto;">';
echo '<p><strong>Задание №25 </strong></p>';

$num = strval(rand());

$arr25 = str_split($num);

echo 'min= ' . $min = min($arr25);
echo '<br>';
echo 'max= ' . $max = max($arr25);
echo '<br>';

echo '<pre>';
print_r($arr25);
echo '</pre>';

foreach ($arr25 as $item) {
    if ($item == $min) {
        $new_arr25[] = $max;
    } elseif ($item == $max) {
        $new_arr25[] = $min;
    } else {
        $new_arr25[] = $item;
    }
} //Чую что наговнокодил, но нет сил искать элегантные решения.

echo '<pre>';
print_r($new_arr25);
echo '</pre>';


echo '</div>';


/* Задание №26 */
echo '<div style="width: 80%; margin: 0 auto;">';
echo '<p><strong>Задание №26 </strong></p>';

echo 'random = ' . $random = rand(1, 100);

for ($i=0; $i <= $random; $i++) {
    $arr26[] = $i;
}

echo '<pre>';
print_r($arr26);
echo '</pre>';

foreach ($arr26 as $key => $item) {
    if($key > 9) {
        $new_arr26[] = $key;
    }
}

if(isset($new_arr26)) {
    echo array_product($new_arr26);
}


echo '<br>';

foreach ($arr26 as $key => $item) {
    if($key > 0 && $key <=9) {
        echo $item . '<br>';
    }
}

echo '</div>';


/* Задание №27 */
echo '<div style="width: 80%; margin: 0 auto;">';
echo '<p><strong>Задание №27 </strong></p>';

$colors = ['red','yellow','blue','gray','maroon','brown','green'];



echo 'cols '. $cols = rand(1,7);
echo '<br/>';
echo 'row ' . $row = rand(1,7);

$i = 1;
$n = 1;

echo '<table border=1 cellspacing=0>';
for ($fi = $i; $fi <= $row; $fi++) {
    if ($fi == $i) {
        echo "<tr height=30 valign=center>";
        echo "<td width=30 align=center></td>";//вывод пустой ячейки
        for ($fn = $n; $fn <= $cols; $fn++) {
            echo "<td width=30px align=center bgcolor=#ddd><b>$fn</b></td>";

        }
        echo '</tr>';
    }//endif
    echo '<tr height=30 valign=center>';
    echo "<td width=30 align=center bgcolor=#ddd><b>$fi</b></td>";
    for ($fn = $n; $fn <= $cols; $fn++) {
        $randomColor = rand(0,6);
        echo '<td width=30 align=center bgcolor="' . $colors[$randomColor] . '">' .rand() . '</td>';
    }
    echo '</tr>';
}
echo '</table>';


echo '</div>';

/* Задание №28 */
echo '<div style="width: 80%; margin: 0 auto;">';
echo '<p><strong>Задание №28 таблица умножения #2 </strong></p>';

$i = 1;
$row = 10;
$n = 1;
$col = 10;

echo '<table border=1 cellspacing=0>';
for ($fi = $i; $fi <= $row; $fi++) {
    if ($fi == $i) {
        echo "<tr height=30 valign=center>";
        echo "<td width=30 align=center></td>";//вывод пустой ячейки
        for ($fn = $n; $fn <= $col; $fn++) {
            echo "<td width=30px align=center bgcolor=#ddd><b>$fn</b></td>";
        }
        echo '</tr>';
    }//endif
    echo '<tr height=30 valign=center>';
    echo "<td width=30 align=center bgcolor=#ddd><b>$fi</b></td>";
    for ($fn = $n; $fn <= $col; $fn++) {
        echo '<td width=30 align=center>' . $fn * $fi . '</td>';
    }
    echo '</tr>';
}
echo '</table>';


echo '</div>';