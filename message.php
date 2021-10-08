
 <?php 

if(isset($_POST['submit'])){
/* Устанавливаем e-mail Кому и от Кого будут приходить письма */   
$to = "lcpride@yandex.ru"; // Здесь нужно написать e-mail, куда будут приходить письма   
$from = $_POST['email']; // Здесь нужно написать e-mail, от кого будут приходить письма, например 
 
/* Указываем переменные, в которые будет записываться информация с формы */
$first_name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['tel'];
$message = $_POST['text-field'];
$subject = "Письмо с сайта";
     
/* Проверка правильного написания e-mail адреса */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
show_error("<br /> Е-mail адрес не существует");
}
     
/* Переменная, которая будет отправлена на почту со значениями, вводимых в поля */
$mail_to_myemail = "Здравствуйте! 
Было отправлено сообщение с сайта! 
Имя отправителя: $first_name
E-mail: $email
Номер телефона: $phone
Текст сообщения: $message"; 
     
$headers = "From: $from \r\n";
     
/* Отправка сообщения, с помощью функции mail() */
mail($to, $subject, $mail_to_myemail, $headers . 'Content-type: text/plain; charset=utf-8');
echo "Сообщение отправлено. Спасибо Вам " . $first_name . ", мы скоро свяжемся с Вами.";
}
?>
<!--Переадресация на главную страницу сайта, через 3 секунды-->
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="https://www.lc-pride.ru/");}
window.setTimeout("changeurl();",1000);
</script>