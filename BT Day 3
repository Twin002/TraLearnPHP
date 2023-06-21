<?php
// Câu 1: Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không
<?php
function checkNumber($number) {
    if ($number % 2 == 0) {
        echo "Số $number là số chẵn.";
    } else {
        echo "Số $number không là số chẵn.";
    }
}
$number = 3; 
checkNumber($number);
?>

// Câu 2: Viết chương trình PHP để tính tổng của các số từ 1 đến n
<?php
function sum($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}
$n = 10; 
$sum = sum($n);
echo "Tổng của các số từ 1 đến $n là: $sum";
?>

// Câu 3: Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10
<?php
function multiplicationTable($n) {
    echo "<br>"."Bảng cửu chương $n:";
    for ($i = 1; $i <= 10; $i++) {
        $result = $n * $i;
        echo "$n x $i = $result<br>";
    }
    echo "<br>";
}
for ($j = 1; $j <= 10; $j++) {
    multiplicationTable($j);
}
?>


// Câu 4: Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
<?php
function checkString($array, $word) {
    $check = strpos($array, $word);
    if ($check !== false) {
        echo "Chuỗi '$array' chứa từ '$word'.";
    } else {
        echo "Chuỗi '$array' không chứa từ '$word'.";
    }
}
$array = "Kiểm tra chuỗi"; 
$word = "tra"; 
checkString($array, $word);
?>

// Câu 5:Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
<?php
function maxMin($array) {
    $min = $array[0]; 
    $max = $array[0]; 
foreach ($array as $value) {
        if ($value < $min) {
            $min = $value; 
        }
        if ($value > $max) {
            $max = $value; 
        }
    }
    echo "Giá trị nhỏ nhất trong mảng là: $min\n"."<br>";
    echo "Giá trị lớn nhất trong mảng là: $max\n";
}
$array = [1,3,5,7,9]; 
maxMin($array);
?>

// Câu 6: Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần
<?php
function sortArray($array) {
    $n = count($array);
    for ($i = 0; $i < $n - 1; $i++) { 
        for ($j = $i + 1; $j < $n; $j++) {
            if ($array[$i] > $array[$j]) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    echo "Mảng sau khi được sắp xếp tăng dần là: ";
    foreach ($array as $value) {
        echo "$value ";
    }
}
$array = [6,4,8,2,10]; 
sortArray($array);
?>


// Câu 7: Viết chương trình PHP để tính giai thừa của một số nguyên dương
<?php
$a = 2;
$b = 3;
$c = 5;
function factorialCalculation($n) {
    if ($n > 0 and $n!=1) {
        return $n * factorialCalculation ( $n - 1 );
    } else {
        return 1;
    }
}
echo ("Giai thừa của " . $a . " là: " . factorialCalculation ( $a ) . "<br>");
echo ("Giai thừa của " . $b . " là: " . factorialCalculation ( $b ) . "<br>");
echo ("Giai thừa của " . $c . " là: " . factorialCalculation ( $c ) . "<br>");

// Câu 8: Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước
<?php
function searchPrime($n) {
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
function numberRange($start, $end) {
    echo "Các số nguyên tố trong khoảng từ $start đến $end là: ";
    for ($i = $start; $i <= $end; $i++) {
        if (searchPrime($i)) {
            echo $i . " ";
        }
    }
}
$start = 1; 
$end = 10; 
numberRange($start, $end);
?>

// Câu 9: Viết chương trình PHP để tính tổng các số trong một mảng
<?php
function sumArray($array) {
    $sum = 0;
    foreach ($array as $value) {
        $sum += $value;
    }
    return $sum;
}
$array = [1, 3, 5, 7, 9]; 
$sum = sumArray($array);
echo "Tổng của các số trong mảng là: $sum";
?>

// Câu 10: Viết chương trình PHP để ra các số Fibonacci trong một khoảng cho trước
<?php
function Fibonacci($start, $end) {
    $f1 = 0;
    $f2 = 1;
    $f = $f1 + $f2;
    echo "Các số Fibonacci trong khoảng từ $start đến $end là: ";
    while ($f <= $end) {
        if ($f >= $start) {
            echo $f . " ";
        }
        $f1 = $f2;
        $f2 = $f;
        $f = $f1 + $f2;
    }
}
$start = 1; 
$end = 10; 
Fibonacci($start, $end);
?>

// Câu 11: Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không
<?php
function Armstrong($number){
$sum = 0;
$originalNum = $number;
$n = strlen($number);
while ($number > 0) {
$digit = $number % 10;
$sum += pow($digit, $n);
$number = intval($number / 10);
}
return $sum == $originalNum;
}
$number = 407;
if(Armstrong($number)){
echo "$number là số Armstrong!";
} else {
echo "$number không phải là số Armstrong!";
}
?>

// Câu 12: Viết chương trình PHP để chèn một phần tử vào một mảng ở bất kỳ vị trí nào
<?php
function insertElement($arr, $element, $position)
{
    array_splice($arr, $position, 0, $element);
 return $arr;
}
$array = [1, 2, 3, 4, 5];
$element = 0;
$position = 3;
$resultArray = insertElement($array, $element, $position);
print_r($resultArray);
?>

// Câu 13: Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng
<?php
function removeDuplicates($array)
{
    return array_unique($array);
}
$array = [1, 2, 3, 2, 4, 3, 5, 6, 1];
$arrayUnique = removeDuplicates($array);
print_r($arrayUnique);
?>

// Câu 14: Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng
<?php
function findPosition($array, $element)
{
    $position = array_search($element, $array);
    if ($position !== false) {
        return $position; 
    } else {
        return -1; 
    }
}
$array = [1, 2, 3, 4, 5];
$element = 2;
$position = findPosition($array, $element);
if ($position !== -1) {
    echo "Vị trí của phần tử $element là $position";
} else {
    echo "Không tìm thấy phần tử $element trong mảng";
}
?>

// Câu 15: Viết chương trình PHP để đảo ngược một chuỗi
<?php
function reverseString($string) {
$result = "";
for ($i = strlen($string) - 1; $i >= 0; $i--) {
$result .= $string[$i];
}
return $result;
}
echo reverseString("Hello World!");
?>

// Câu 16: Viết chương trình PHP để tính toán số lượng phần tử trong một mảng
<?php
function elementalNumber($array) {
    $number = count($array);
    return $number;
}
$array = [0, 2, 4, 6, 8]; 
$number = elementalNumber($array);
echo "Số lượng phần tử trong mảng là: $number";
?>

// Câu 17: Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không
<?php
    function checkPalindrome($string)   
	{ 
		if ($string == strrev($string))  
			return 1;  
		else  
			return 0;  
	}  
	echo checkPalindrome('radar')."<br>";
?>

// Câu 18: Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng
<?php
function countOccurrence($array, $value) {
$count = 0;
foreach ($array as $element) {
if ($element == $value) {
$count++;
}
}
return $count;
}
$array = array(1, 2, 3, 1, 2, 4, 6, 5);
$value = 2;
$occurrence = countOccurrence($array, $value);
echo "Phần tử $value xuất hiện $occurrence lần trong mảng";

// Câu 19: Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần
<?php
function sortDescending($array)
{
    rsort($array);
    return $array;
}
$array = [3, 2, 9, 0, 5];
$sortArray = sortDescending($array);
print_r($sortArray);
?>

// Câu 20: Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng
<?php
function addElement($array, $element, $position)
{
    if ($position === 'begin') {
        array_unshift($array, $element);
    } elseif ($position === 'end') {
        $array[] = $element;
    }
    return $array;
}
$array = [1, 2, 3, 4, 5];
$element = 0;
$position = 'begin';
$resultArray = addElement($array, $element, $position);
print_r($resultArray);
?>

// Câu 21: Viết chương trình PHP để tìm số lớn thứ hai trong một mảng
<?php
function secondMax($array) {
$max = $array[0];
$second_max = $array[0];
for ($i = 1; $i < count($array); $i++) {
if ($array[$i] > $max) {
$second_max = $max;
$max = $array[$i];
} else if ($array[$i] > $second_max && $array[$i] != $max) {
$second_max = $array[$i];
}
}
return $second_max;
}
$array = [1, 2, 3, 4, 5];

print_r($array) ;
echo "<br>";
echo "Số lớn thứ hai trong mảng là: " . secondMax($array);
?>

// Câu 22: Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương
<?php
function findUCLN($a, $b)
{
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}
function findBCNN($a, $b)
{
    $UCLN = findUCLN($a, $b);
    $BCNN = ($a * $b) / $UCLN;
    return $BCNN;
}
$num1 = 12;
$num2 = 8;
$UCLN = findUCLN($num1, $num2);
$BCNN = findBCNN($num1, $num2);
echo "Ước số chung lớn nhất của $num1 và $num2 là: " . $UCLN . "<br>";
echo "Bội số chung nhỏ nhất của $num1 và $num2 là: " . $BCNN;
?>

// Câu 23: Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không
<?php
function checkPerfectNumber($number) {
$sum = 0;
for ($i = 1; $i < $number; $i++) {
if ($number % $i == 0) {
$sum += $i;
}
}
return $sum == $number;
}
$number = 6;
if (checkPerfectNumber($number)) {
echo "Số $number là số hoàn hảo";
} else {
echo "Số $number không là số hoàn hảo";
}
?>

// Câu 24: Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng
<?php
function findMaxOdd($array) {
$maxOdd = -1; 
foreach ($array as $num) {
if ($num % 2 != 0 && $num > $maxOdd) { 
$maxOdd = $num;
}
}
return $maxOdd;
}
$array = [1,2,5,6,9];
echo "Số lẻ lớn nhất trong mảng là: " . findMaxOdd($array);
?>

// Câu 25: Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không
<?php
function checkPrime($number)
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
$number = 23;
if (checkPrime($number)) {
    echo "Số $number là số nguyên tố.";
} else {
    echo "Số $number không phải là số nguyên tố.";
}
?>

// Câu 26: Viết chương trình PHP để tìm số dương lớn nhất trong một mảng
<?php
function findMaxPositiveNumber($array) {
$max = 0;
foreach ($array as $num) {
if ($num > 0 && $num > $max) {
$max = $num;
}
}
return $max;
}
$array = array(-2, 0, 1, 3, 9);
echo "Số dương lớn nhất trong mảng là: " . findMaxPositiveNumber($array);
?>

// Câu 27: Viết chương trình PHP để tìm số âm lớn nhất trong một mảng
<?php
function findMaxNegative($array) {
    $maxNegative = null;
    foreach ($array as $num) {
    if ($num < 0 && ($maxNegative === null || $num > $maxNegative)) {
    $maxNegative = $num;
    }
    }
    return $maxNegative;
    }
    $Array = [-9, -3, -1, 0, 2, 5];
    $maxNegative = findMaxNegative($Array);
    echo "Số âm lớn nhất trong mảng là: " . $maxNegative;
 
// Câu 28: Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n
<?php
function sumOdd($number)
{
    $sum = 0;
    for ($i = 1; $i <= $number; $i++) {
        if ($i % 2 != 0) {
            $sum += $i;
        }
    }
    return $sum;
}
$number = 10;
$sum = sumOdd($number);
echo "Tổng các số lẻ từ 1 đến $number là: " . $sum;
?>

// Câu 29: Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước
<?php
function findPerfectSquares($start, $end)
{
    $perfectSquares = [];
    for ($i = $start; $i <= $end; $i++) {
        if (sqrt($i) == (int)sqrt($i)) {
            $perfectSquares[] = $i;
        }
    }
    return $perfectSquares;
}
$start = 1;
$end = 50;
$perfectSquares = findPerfectSquares($start, $end);
echo "Các số chính phương trong khoảng $start đến $end là: " . implode(',', $perfectSquares);
?>

// Câu 30: Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không
<?php
function checkString($string, $string1) {
$pos = strstr($string, $string1);
if($pos !== false) {
return true;
} else {
return false;
}
}
$string = "Hello World!";
$string1 = "world";
if(checkString($string, $string1)) {
echo "Chuoi $string1 la chuoi con cua chuoi $string";
} else {
echo "Chuoi $string1 khong la chuoi con cua chuoi $string";
}
?>
