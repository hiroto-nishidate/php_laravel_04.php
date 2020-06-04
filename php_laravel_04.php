<?php
//課題 1 引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください。

//ttは(two times)の意味;
function tt($value){
    return $value*2;
}

//引数に100を入れると2倍の数値(200)が出力される。
echo tt(100);
echo "\n";

//課題2 $aと$bを仮引数に持ち、$aと$bを足した結果を返す関数を作成して下さい。

function plus($a,$b){
    return $a + $b;
}

// 2と5を足した合計が出力される。
echo plus(2,5);
echo "\n";

//課題3 $arrという配列の仮引数を持ち、数値が入った配列array(1,3,5,7,9)を渡すと
//その要素をすべて掛けた結果を返す関数を作成して下さい。

function multiply($arr){
    $total =1;
    
    foreach($arr as $value){
        $total *= $value;
    }
    return $total;
}

$array = [1,3,5,7,9];

echo multiply($array);
echo "\n";

//課題4 応用 配列の中で一番大きい数値を返す関数。

function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a){
          $max_number = $a;
        }
    }
    return $max_number;
}

$arr = [5,8,19,10];
echo max_array($arr);
echo "\n";

//課題5　ビルドイン関数の用途、使い方。

// strip_tags関数
//指定した文字列からHTMLタグを取り除く。

$str = "<h1>strip_tags関数</h1>"
       . "<p> タグを取り除く</p>";
       
echo strip_tags($str);
echo "\n";

// array_push関数
//配列の最後に要素を追加する。

$fruits = ["apple","banana","orange"];
array_push($fruits,"melon");

print_r($fruits);

// array_merge関数
// 配列の要素の最後に配列を結合する。

//配列を作成
$array1 = [1,2,3];
$array2 = [10,20,30];

//配列を結合する。
$array = array_merge($array1,$array2);

print_r($array);


// time関数
// 現在の時刻をUnix タイムスタンプとして取得

echo time();
echo "\n";

// mktime関数
// 指定した日時のUNIXタイムスタンプを取得する。

//mktime("時","分","秒","月","日","年")
$timestamp =mktime(0,0,0,1,1,2020);

echo $timestamp;
echo "\n";

// date関数
// 指定された日時を任意の形式でフォーマット化し、日付文字列を返す関数

//現在日付をフォーマットする。
echo date('Y/m/d');
echo "\n";

//現在日時をフォーマットする。
echo date('Y-m-d H:i:s');
echo "\n";

echo date('Y年m月d日 H時i分s秒');
echo "\n";

?>