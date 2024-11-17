<?php
define("Name","Hello from Ekramul Islam!");
class Goodbye {
  const NAME="Ekramul Islam";
  const LEAVING_MESSAGE = "Thank you for visiting my home";
  function byebye() {
    echo self::LEAVING_MESSAGE;
  }
}
echo Name;
echo "<br/>";
echo Goodbye::NAME;
echo "<br/>";
$goodbye = new Goodbye();
$goodbye->byebye();




