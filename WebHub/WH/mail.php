<!doctype html>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
   <title>Ваше сообщение успешно отправлено</title>
</script>
</head>
 
<body>
 
<?php
   $back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";
 
   if(!empty($_POST['name']) and !empty($_POST['email']) 
   and !empty($_POST['message'])){
      $name = trim(strip_tags($_POST['name']));
      $email = trim(strip_tags($_POST['email']));
      $message = trim(strip_tags($_POST['message']));
 
      mail('den03062003@gmail.com', 'Письмо с wh/WebHub.html', 
      'Вам написал: '.$name.'<br />Его почта: '.$email.'<br />
      Его сообщение: '.$message,"Content-type:text/html;charset=windows-1251");
 
      echo "Ваше сообщение успешно отправлено!<Br> Вы получите ответ в 
      ближайшее время<Br> $back";
 
      exit;
   } 
   else {
      echo "Для отправки сообщения заполните все поля! $back";
      exit;
   }
?>
</body>
</html>