<?php
// code php here
$x = 10;
$x = "Hello World! T2210A";
echo $x;
$y = 20;
if($y>10){

}else{

}

$arr = [];
$arr[] = 10;
$arr[] = "hello";
$arr[] = true;

for($i=0;$i<count($arr);$i++){

}

foreach ($arr as $item){

}

$sv = [];
$sv["name"] = "Nguyen Van A";
$sv["age"] = 18;

$teacher = [
    "fullname"=>"Dao Duy Anh",
    "age"=> 22,
    "email" => "duyanhdao@gmail.com"
];

foreach ($teacher as $t){
    echo $t."<br/>";
}
echo "<ul>";
foreach ($teacher as $k=>$v){
    echo "<li>".$k.":".$v."</li>";
}
echo "</ul>";
echo "Ten giao vien:".$teacher["fullname"];

function tinhtong($a,$b){
//    return $a+$b;
    echo $a+$b;
}
tinhtong(5,8);