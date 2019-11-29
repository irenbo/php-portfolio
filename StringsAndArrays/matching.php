<?php 
/*Функции для работы со строками*/
echo "Функция выделяет из сто имя файла без расширения.<br>";
/*(например, 'C:\OpenServer\testsite\www\someFile.txt')*/

$str = 'C:\OpenServer\testsite\www\someFile.txt';
echo basename($str, ".txt")."<br><br>";

echo "Конвертер строки.<br>";
/* Возможности: 1) перевод всех символов в верхний регистр, 2) перевод всех символов в нижний регистр, 3) перевод всех символов в нижний регистр и первых символов слов в верхний регистр.`*/

function convert_str($str, $flag) {
	switch ($flag) {
		case 'allUp':
		$res_str = mb_convert_case($str, MB_CASE_UPPER, "UTF-8");
		continue;
		case 'allDown':
		$res_str = mb_convert_case($str, MB_CASE_LOWER, "UTF-8");
		continue;
		case 'firstUp':
			$res_str = mb_convert_case($str, MB_CASE_TITLE, "UTF-8");
			break;
	}
	return $res_str;
}

$some_str = 'приютил кипарис воробьиную стаю';
$some_flag = 'allUp';
print_r(convert_str($some_str, $some_flag));echo "<br>";
$some_flag = 'allDown';
print_r(convert_str($some_str, $some_flag));echo "<br>";
$some_flag = 'firstUp';
print_r(convert_str($some_str, $some_flag));

echo "<br><br>";
echo "Функция преобразования нотаций.<br>";

function camelStyle($string) : string {
	$frst_cnvrt = ucwords($string, "_");
    $scnd_cnvrt = str_replace("_", "", $frst_cnvrt);
    $res_str = lcfirst($scnd_cnvrt);
    return $res_str;
}
$str = 'this_is_string';
camelStyle($str);
print_r(camelStyle($str));

echo "<br><br>";
echo "Генерация массивов из случайных чисел. Сумма их элементов.";

//rand — Генерирует случайное число
// print_r — Выводит удобочитаемую информацию о переменной
//array_sum — Вычисляет сумму значений массива
//max — Возвращает наибольшее значение
//array_keys — Возвращает все или некоторое подмножество ключей массива

function gen_arr($arr_length) {
	for ($i = 0; $i < $arr_length; $i++) {
		$some_arr[] =  rand(3, 97);
	}
		return $some_arr;
}

$rand_length = rand(3, 9);
//print_r(gen_arr($rand_length));
echo "<br>";

function gen_five_arrs($arr) {
   	for ($i=0; $i < 5; $i++) { 
   		$five_arrs[] = gen_arr($arr);
    }
    return $five_arrs;
}

$count_sum = gen_five_arrs($rand_length);
echo "Полученные массивы:<br>";
var_dump($count_sum);

function sum_arr($arr){
    return array_sum($arr);
}

echo "Суммы массивов:";
foreach ($count_sum as $arr) {
    $sum[] = sum_arr($arr);
    var_dump(sum_arr($arr));
    $res = max($sum);
}
echo "Максимальная сумма массива: ";
print_r($res);

echo "<br><br>";
echo "Совпадение текстов.<br>";

$str1 = 'to be or not to be: that is the question';
$str2 = 'быть или не быть: вот в чем вопрос';
$str3 = 'to be or not to be: that is the question';
$str4 = 'to be or to do: that is the answer';
$str5 = 'abrakadabra абракадабра';
//$res = similar_text($str1, $str2, $percent); //Вычисляет степень похожести двух строк
//echo "Степень совпадений: $percent %";

 function checkSimilar($text1, $text2) {
 	$res = similar_text($text1, $text2, $percent); 

	if ($percent < 10) {
		echo "Незначительная степень совпадений: $percent %<br>";
	}
	if ($percent < 50 && $percent >= 10) {
		echo "Низкая степень совпадений: $percent %<br>";
	}
	if ($percent < 80 && $percent >= 50) {
		echo "Средняя степень совпадений: $percent %<br>";
	}
	if ($percent < 100 && $percent >= 80) {
		echo "Высокая степень совпадений: $percent %<br>";
	}
	if ($percent == 100) {
		echo "Тексты идентичны, $percent %<br>";
	}
}
checkSimilar($str1, $str2);
checkSimilar($str1, $str3);
checkSimilar($str1, $str4);
checkSimilar($str1, $str5);

echo "<br><br>";
?>