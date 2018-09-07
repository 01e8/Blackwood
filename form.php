<!DOCTYPE html>
<html lang="ru">
  
    <head>
        <title>BLACKWOOD</title>
        <link rel="shortcut icon" href="img/icon/icon.ico">
        <meta charset="utf-8">
        <meta name="author" Content="Гол">
        <meta name="copyright" Content="GOL"> 
        <meta name="keywords" content="Особняк, Купить">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="og:type" content="website" /> 
        <meta property="og:url" content=http://osobnyaki777.ru/ /> 
        <meta property="og:title" content="BLACKWOOD" /> 
        <meta property="og:description" content="Продажа особняков" /> 
        <meta property="og:image" content="http://img/gicon.png" />
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="hammer.js"></script>
        <script type="text/javascript" src="script.js"></script>
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="stylemin.css" />
    </head>
   
    <body>
       

<?php 
        $name = trim(urldecode(htmlspecialchars($_POST['nameclient'])));
        $email = trim(urldecode(htmlspecialchars($_POST['mailclient'])));
        $emailout = str_replace("@","{a}",$email);
        $fromm = "From: ".$name."-".$emailout;
        $headers = "MIME-Version: 1.0\r\n"."Content-type: text/html; charset=utf-8\r\n"."From: ".$emailout."\r\n";

    if (!empty($name) && filter_var($email, FILTER_VALIDATE_EMAIL))
    {   
        if (mail(
                    "Kotova@blackwood.ru,
                    Sokolovav@blackwood.ru,
                    Luchitskaya@blackwood.ru,
                    Grigoryeva@blackwood.ru,
                    Khokhlov@blackwood.ru,
                    Morozovae@blackwood.ru",   
                "Заявка на подбор", 
                "<html><body><p>Заказал: ".$name.".<br> E-mail: ".$email."</p></body></html>",
                iconv ('utf-8', 'windows-1251', $headers)
                )){             
            $status = $name.', спасибо за вашу заявку';
            $comment = 'Совсем скоро мы свяжемся с вами :)';
        } else { 
            $status = 'Что-то пошло не так';
            $comment = 'Пожалуйста, свяжитесь с нами по телефону 8 (495) 730-68-70';
        }
        
        
        
    } else {
        $status = 'Вы неверно ввели данные';
        if (empty($name) && !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $comment = 'Пожалуйста, проверьте имя и почту';   
        }
        if (!empty($name) && !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $comment = 'Пожалуйста, проверьте почту';   
        }
        if (empty($name) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $comment = 'Пожалуйста, проверьте имя';   
        }
    }
?>

    <div id="formcheck">
        <h2><?php echo $status; ?></h2>
        <p><?php echo $comment; ?></p>
    </div>  
    </body>
</html>