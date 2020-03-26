<meta charset="UTF-8">
<?php

$name=$_POST["姓名"];
$gender=$_POST["gender"];
$bday=$_POST["bday"];
$id=$_POST["id"];
$phonenumber=$_POST["phonenumber"];
$name1=$_POST["name"];
$phone=$_POST["phone"];
$relationship=$_POST["relationship"];
$live=$_POST["city"];
$meal=$_POST["meal"];
$size=$_POST["size"];
$introduce=$_POST["introduce"];
$wish=$_POST["wish"];
$comment=$_POST["comment"];

echo "您的名字為: ".$name."<br/>";
echo "您的性別為: ".$gender."<br/>";
echo "您的生日為: ".$bday."<br/>";
echo "您的身分證字號為: ".$id."<br/>";
echo "您的電話號碼為: ".$phonenumber."<br/>";
echo "您的緊急聯絡人為: ".$name1."<br/>";
echo "您的緊急聯絡人電話為: ".$phone."<br/>";
echo "您的緊急連絡人關係為: ".$relationship."<br/>";
$livenumber=count($live);
for ($i=0; $i <$livenumber ; $i++) { 
	echo "您的居住地為: ".$live[$i]."<br/>";
}
echo "您的飲食為: ".$meal."<br>";
$sizenumber=count($size);
for ($i=0; $i <$sizenumber ; $i++) { 
	echo "您的衣服尺寸為: ".$size[$i]."<br/>";
} 
echo "您怎麼知道這個營隊的: ".$introduce."<br>";
echo "您對營隊的期待: ".$wish."<br>";
echo "意見: <br>".nl2br(htmlspecialchars($comment));

?>