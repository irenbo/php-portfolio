<?php

/* Деление числа $num=800 на 2 столько раз, пока результат деления не станет меньше 50 (цикл while, цикл for).*/
echo '<strong>Задание 1.</strong> <br>Цикл while:<br><br>';
$num = 800;
$quantity = 0;
while ($num >= 50) :
	$num /= 2;
	$quantity++;
endwhile;
echo "Получится число: ". $num;
echo '<br>Количество итераций: '. $quantity;
echo "<br>";
echo "<br>";

echo 'Цикл for:<br><br>';
$quantity = 0;
for ($num = 800; $num >= 50; $num /=2) :
	$quantity++;
endfor;

echo "Получится число: ". $num;
echo '<br>Количество итераций: '. $quantity;
echo "<br><br>";


/* Создание массива из дней недели. Текущий день выводится жирным. Название дней выводятся на русском.*/
echo '<strong>Задание 3.</strong><br><br>';
$week_days = ["понедельник","вторник","среда","четверг","пятница","суббота", "воскресенье"];
$today = date(N); 
foreach ($week_days as $key => $value) {
	if ($key === $today -1) { 
	echo "Сегодня: <strong>$value</strong><br>";
	} 
	echo "День недели: $value<br>";
}
echo "<br><br>";
?>

