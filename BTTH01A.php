<?php 
//bai1

    $arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];
    $sum = array_sum($arrs);
    echo "Tổng các phần tử = 2+5+6+9+2+5+6+12+5 " . "= $sum " . "<br>";
    
    $product = array_product($arrs);
    echo "Tích các phần tử = 2*5*6*9*2*5*6*12*5 " . "= $product" . "<br>";
    
    $minus = $arrs[0];
    for ($i = 1; $i < count($arrs); $i++) {
        $minus -= $arrs[$i];
    }
    echo "Hiệu các phần tử = 2-5-6-9-2-5-6-12-5 " . "= $minus" . "<br>";

    $division = $arrs[0];
    for ($i = 1; $i < count($arrs); $i++) {
        if ($arrs[$i] != 0) {
            $division /= $arrs[$i];
        } else{
            echo "Không thể chia cho 0";
            break;
        }
    }
    echo "Thương các phần tử = 2/5/6/9/2/5/6/12/5 " . "= $division" . "<br>";


//bai2

    $arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
    $names = ['Anh', 'Sơn', 'Thắng', 'tôi'];
    $result = '';
    for ($i = 0; $i < count($arrs); $i++) {
        $result .= "Màu {$arrs[$i]} là màu yêu thích của {$names[$i]}";
        if ($i < count($arrs) - 1) {
            $result .= ', ';
        }
    }
    echo $result;


//bai3

    $arrs = ['PHP', 'HTML', 'CSS', 'JS'];
    echo '<table border="1" >';
    echo '<tr><th>Tên khóa học</th></tr>';
    foreach ($arrs as $subject) {
        echo '<tr><td>' . $subject . '</td></tr>';
    }
    echo '</table>';

// bai4

    $arrs = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" =>
    "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" =>
    "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin",
    "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United
    Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech
    Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" =>
    "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw");
    foreach($arrs as $country => $capital){
        echo "Thủ đô của " . $country . " là " . $capital . "<br>";
    }


//bai5 

    $a = ['a' => ['b' => 0, 'c' => 1], 'b' => ['e' => 2, 'o' => ['b' => 3]]];
    $valueB = $a['b']['o']['b'];
    echo "Giá trị = " .$valueB. '<br>';
    $valueC = $a['a']['c'];
    echo "Giá trị = " .$valueC. '<br>';
    $infoA = $a['a'];
    print_r($infoA);
    echo '<br>';


//bai6

    $keys = array(
        "field1" => "first",
        "field2" => "second",
        "field3" => "third"
    );
    $values = array(
        "field1value" => "dinosaur",
        "field2value" => "pig",
        "field3value" => "platypus"
    );
    $keysAndValues = array();
    foreach($keys as $key => $newKey){
        if(array_key_exists($key . 'value', $values)){
            $keysAndValues[$newKey] = $values[$key . 'value'];
        }
    }
    print_r($keysAndValues);


//bai7

    $array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];
    foreach($array as $number){
        if($number>=100 && $number<=200 && $number%5==0){
            echo '<br>'.$number;
        }
    }


//bai8

    $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
    $maxLength = 0;
    $minLength = PHP_INT_MAX;
    $maxString = '';
    $minString = '';
    foreach($array as $string){
        $length = strlen($string);
        if($length > $maxLength){
            $maxLength = $length;
            $maxString = $string;
        }
        if($length < $minLength){
            $minLength = $length;
            $minString = $string;
        }
    }
    echo "<br> Chuỗi lớn nhất là $maxString, độ dài = $maxLength<br>";
    echo "Chuỗi nhỏ nhất là $minString, độ dài = $minLength<br>";


//bai9

    function convertToLowercaseArray($array){
        foreach($array as &$value){
            if(is_string($value)){
                $value = strtolower($value);
            }
        }
        unset($value); 
        return $array;
    }
    $arr1 = ['1', 'B', 'C', 'E'];
    $result1 = convertToLowercaseArray($arr1);
    print_r($result1);
    $arr2 = ['a', 0, null, false];
    $result2 = convertToLowercaseArray($arr2);
    print_r($result2); echo '<br>';


//bai10

    function convertCaseUpper($array){
        foreach($array as &$value){
            if(is_string($value)){
                $value = strtoupper($value);
            }
        }
    unset($value);
    return $array;
    }
    $arr1 = ['1', 'b', 'c', 'd'];
    $result1 = convertCaseUpper($arr1);
    print_r($result1);
    $arrs2 = ['a', 0, null, false];
    $result2 = convertCaseUpper($arrs2);
    print_r($result2); echo '<br>';


//bai11

    $array = array(1, 2, 3, 4, 5);
    unset($array[3]);
    $array = array_values($array);
    print_r($array);


//bai12

    $numbers = [
        'key1' => 12,
        'key2' => 30,
        'key3' => 4,
        'key4' => -123,
        'key5' => 1234,
        'key6' => -12565,
    ];
    //lấy phần tử đầu tiên và cuối cùng
    $firstElement = reset($numbers);
    echo "<br> Phần tử đầu tiên: $firstElement <br>";
    $endElement = end($numbers);
    echo "Phần tử cuối cùng: $endElement <br>";
    //tìm số lớn nhất, nhỏ nhất, tổng các giá trị
    $max = max($numbers);
    echo "Số lớn nhất: $max <br>";
    $min = min($numbers);
    echo "Số nhỏ nhất: $min <br>";
    $sum = array_sum($numbers);
    echo "Tổng các giá trị: $sum <br>";
    //sắp xếp mảng theo chiều tăng giảm các giá trị
    asort($numbers);
    print_r($numbers); echo '<br>';
    arsort($numbers);
    print_r($numbers); echo '<br>';
    //sắp xếp mảng theo chiều tăng giảm các key
    ksort($numbers);
    print_r($numbers); echo '<br>';
    krsort($numbers);
    print_r($numbers); echo '<br>';


//bai13

    //tính toán giá trị trung bình của mảng trên
    $numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
    $mean = array_sum($numbers)/count($numbers);
    echo $mean.'<br>';
    //Liệt kê các số có giá trị lớn hơn giá trị trung bình đó
    $greaterMean = [];
    foreach ($numbers as $number) {
        if ($number > $mean) {
            $greaterMean[] = $number;
        }
    }
    print_r($greaterMean); echo '<br>';
    //Liệt kê các số có giá trị nhỏ hơn hoặc bằng giá trị trung bình đó 
    $smallMean = [];
    foreach ($numbers as $number) {
        if ($number < $mean) {
            $smallMean[] = $number;
        }
    }
    print_r($smallMean); echo '<br>';


//bai14

    $array1 = [[77, 87], [23, 45]];
    $array2 = ['giá trị 1', 'giá trị 2'];
    $result = [];

for ($i = 0; $i < count($array1); $i++) {

    $result[$i] = [$array2[$i], $array1[$i]];

}

   print_r($result);
?>
