<?php
$to_email="amitpatelgurjar07@gmail.com";
$subject= "simple email test vai php"
//$body= "Hii amit i am pratiksha";
//$header=" From:pratikshapatel6269@gmail.com";

if(mail($to_email,$subject,"web tech"," From:pratikshapatel6269@gmail.com")){
  echo" Email successfully sent to $to_email";
}
else{
  echo"email sending failed...";
}
?>
