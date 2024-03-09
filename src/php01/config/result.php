<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$item = htmlspecialchars($_POST['item'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);
print "会社名は" . $name . "ですね"."<br>";
print "商品は" . $item . "ですね"."<br>";
print "個数は" . $number . "ですね"."<br>";
?>