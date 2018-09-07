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
        <script src="maskedinput.js"></script>
        <script type="text/javascript" src="hammer.js"></script>
        <script type="text/javascript" src="script.js"></script>
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="stylemin.css" />
    </head>
   
    <body>
        <!--<div id="blueback"></div>-->
        <div id="footerback"><img id="footerbackimg" src="img/footerimg.png"></div>
       <div id="tittle"></div>
       <div id="tittletext">— АРЕНДА И ПРОДАЖА ОСОБНЯКОВ В МОСКВЕ —</div>
       <div id="phonehead">8 (495) 730-68-70</div>
        <header id="headerid">
            <img id="headimg" src="img/headimg.png">
        </header>
        <div id="logopicture">
            <img id="logopictureimg" src="img/logowhite.png">
        </div>
        <div id="headform">
            <!--<div id="topheadform">ПОСМОТРЕТЬ <br>ВСЕ ПРЕДЛОЖЕНИЯ <br>ПО ОСОБНЯКАМ</div>-->
            <div id="downheadform">
                <div id="downheadformtext">- ЗАЯВКА НА ПОДБОР -</div>
                <form action="form.php" method="post">
                
                <input class="downheadformtextinput namecl" type="text" name="nameclient" placeholder="ВАШЕ ИМЯ">
                
                <input class="downheadformtextinput mailcl" type="email" name="mailclient" placeholder="E-MAIL">
                
                <input id="buttonn" type="submit" name="submit" value='ОТПРАВИТЬ'>
                </form>
            </div>
        </div>
        <div id="content">
            <div id="priem">
                <h1>ПРЕИМУЩЕСТВА РАБОТЫ С НАМИ:</h1>
                <img id="priemlines" src="img/bluelines.png">
                <p>У НАС САМАЯ БОЛЬШАЯ БАЗА ОСОБНЯКОВ В МОСКВЕ</p>
                <p>ЗНАНИЯ ПО ИСТОРИИ ОБРАЗОВАНИЯ И ПЕРЕХОДОВ ПРАВА СОБСТВЕННОСТИ, ИСТОРИЧЕСКИЕ РЕТРОСПЕКТИВЫ</p>
                <p>МЫ 25 ЛЕТ РАБОТАЕМ В КОММЕРЧЕСКОЙ НЕДВИЖИМОСТИ МОСКВЫ И ЗНАЕМ О НЕЙ ВСЕ</p>
                <p>РАБОТАЕМ НА ВЫГОДНЫХ УСЛОВИЯХ С СОБСТВЕННИКАМИ</p>
                <p>РЕАЛИЗУЕМ ПРОЕКТЫ «ПОД КЛЮЧ»:</p>
            </div>
            <div class="iconpr one">
                <img class="ikonka" src="img/ikonki/one.png">ОПЕРАТИВНЫЙ АНАЛИЗ<br>
ЗЕМЕЛЬНО-ПРАВОВЫХ 
И ИМУЩЕСТВЕННЫХ ОТНОШЕНИЙ
            </div>
            <div class="iconpr two">
                <img class="ikonka" src="img/ikonki/two.png">
                ОФОРМЛЕНИЕ ДОГОВОРОВ<br>
                АРЕНДЫ/КУПЛИ-ПРОДАЖИ,<br>
                РАБОТА С ПРИОСТАНОВКАМИ, <br>
                ОТКАЗАМИ
            </div>
            <div class="iconpr three">
                <img class="ikonka" src="img/ikonki/three.png">
                ОФОРМЛЕНИЕ ПРАВ <br>
                АРЕНДЫ/СОБСТВЕННОСТИ <br>
                НА ЗЕМЕЛЬНЫЙ УЧАТОК
            </div>
            <div class="iconpr four">
                <img class="ikonka" src="img/ikonki/four.png">
                ОФОРМЛЕНИЕ ГПЗУ <br>
                И ДРУГОЙ ИРД НА НОВОЕ<br>
                СТРОИТЕЛЬСТВО
            </div>
            <div class="iconpr five">
                <img class="ikonka" src="img/ikonki/five.png">
                СОГЛАСОВАНИЕ <br>
                ПЕРЕПЛАНИРОВОК, <br>
                РЕКОНСТРУКЦИЙ
            </div>
            <div class="iconpr six">
                <img class="ikonka" src="img/ikonki/six.png">
                ПРОВЕДЕНИЕ <br>
                ПРОЕКТИРОВАНИЯ, <br>
                КАПИТАЛЬНОГО РЕМОНТА, <br>
                РЕКОНСТРУКЦИЙ
            </div>
            <div class="iconpr seven">
                <img class="ikonka" src="img/ikonki/seven.png">
                СОДЕЙСТВИЕ <br>
                В ОФОРМЛЕНИИ <br>
                КРЕДИТА/aЛИЗИНГА
            </div>
            <div class="tittletext"><h1>НАМИ УЖЕ РЕАЛИЗОВАНО</h1></div>
            <div id="realize">
               <div id="buttonleft"><img id="leftimg" src="img/leftimg.png"  style="-moz-user-select: none; -webkit-user-select: none; -ms-user-select: none; user-select: none;"></div>
               <div id="buttonright"><img id="rightimg" src="img/rightimg.png"  style="-moz-user-select: none; -webkit-user-select: none; -ms-user-select: none; user-select: none;"></div>
                <div id=gallery>
                    <?php 
                        $kol = 1;
                        while (file_exists("realize/r".$kol)) {
                            $textstatus = fopen("realize/r".$kol."/status.txt", "r");
                            $textdescr = fopen("realize/r".$kol."/descrip.txt", "r");
                            echo("<div class='osob' id='targ".$kol."'> <div class='statustext'>");
                            while (!feof($textstatus)) {
                                $buffer = fgets($textstatus, 4096);
                                echo $buffer;
                            };
                            echo ("</div> <img class='osobimg' id='os".$kol."' src='realize/r".$kol."/pic.png'> <div class='descriptext'>");
                            while (!feof($textdescr)) {
                                $buffer = fgets($textdescr, 4096);
                                echo $buffer;
                            };
                            echo("</div></div>");
                            $kol++;
                            fclose($textstatus);
                            fclose($textdescr);
                        }
                    ?>
                </div>
            </div>
            <div id="potreb">
               <div class="slogan"><h2>У ВАС ЕСТЬ ПОТРЕБНОСТЬ</h2></div>
               <img class="potreblines" src="img/bluelines2.png">
               <div class="potrebtext"><p>КУПИТЬ/АРЕНДОВАТЬ ОСОБНЯК</p></div>
               <div class="potrebtext"><p>ПРОДАТЬ/СДАТЬ В АРЕНДУ ОСОБНЯК</p></div>
            </div>
            <div id="pomogut">
                <div class="slogan"><h2>СПЕЦИАЛИСТЫ BLACKWOOD ПОМОГУТ</h2></div>
                <img class="potreblines noneimg13" src="img/bluelines2.png">
                <div id="pomoguttext1">
                    <img id="pomogutlines1" src="img/bluelines3.png">
                    <p>ПОДОБРАТЬ ПРЕДЛОЖЕНИЯ<br>
                    ПО ВАШИМ ПАРАМЕТРАМ</p>
                        <p>ПРОВЕСТИ СРАВНИТЕЛЬНУЮ<br> 
                        АНАЛИТИКУ ВЫБРАННЫХ ЗДАНИЙ</p>
                            <p>ПРОВЕСТИ ПОКАЗЫ В КРАТЧАЙШИЕ СРОКИ</p>
                                <p>ПРОАНАЛИЗИРОВАТЬ ЗЕМЕЛЬНО-ПРАВОВЫЕ<br>
                                И ИМУЩЕСТВЕННЫЕ ОТНОШЕНИЯ</p>
                                    <p>ОБЕСПЕЧИТЬ ЧИСТОТУ СДЕЛКИ </p>
                                        <p>ОРГАНИЗАЦИЯ И ПРОВЕДЕНИЕ ПРЕЗЕНТАЦИОННЫХ<br> 
                                        МЕРОПРИЯТИЙ ДЛЯ БРОКЕРОВ КОНСАЛТИНГОВЫХ<br> 
                                        КОМПАНИЙ</p>
                                            <p>СОСТАВЛЕНИЕ ПИСЬМА О НАМЕРЕНИЯХ И РАЗРАБОТКА<br>
                                            ДОГОВОРОВ КУПЛИ ПРОДАЖИ/АРЕНДЫ</p>
                </div>
                <div id="pomoguttext2">
                    <img id="pomogutlines2" src="img/bluelines4.png">
                    <p>ОЦЕНИТЬ ВАШЕ ЗДАНИЕ</p>
                        <p>ПОДГОТОВИТЬ ВСЮ НЕОБХОДИМУЮ<br>  
                        ДОКУМЕНТАЦИЮ ДЛЯ ПРОДАЖИ</p>
                            <p>ПРОВЕСТИ ПРОФЕССИОНАЛЬНУЮ<br>  
                            ФОТОСЕССИЮ ЗДАНИЯ</p>
                                <p>ОРГАНИЗОВАТЬ РЕКЛАМНОЕ<br>  
                                ПРОДВИЖЕНИЕ ЗДАНИЯ</p>
                                    <p>ОСУЩЕСТВИТЬ РАССЫЛКУ ПО<br>  
                                    БАЗЕ КОРПОРАТИВНЫХ КЛИЕНТОВ</p>
                                        <p>ОРГАНИЗОВАТЬ ПРОСМОТРЫ <br> 
                                        И ГОТОВИТЬ ОТЧЕТЫ О ПОКАЗАХ <br> 
                                        И ХОДЕ ПЕРЕГОВОРОВ <br> 
                                        С ПОТЕНЦИАЛЬНЫМИ КЛИЕНТАМИ</p>
                                            <p>ПРОВЕСТИ ПОЛНОЕ ЮРИДИЧЕСКОЕ <br>  
                                            СОПРОВОЖДЕНИЕ СДЕЛКИ</p>
                </div>
            </div>
            <!--<div id="doubleform">
                <div id="oneform">
                    <form action="hochucup.php" method="post">
                    <input class="downheadformtextinputdouble mailcl otsstup" type="email" name="mailclient" placeholder="E-MAIL">
                    <input class="downheadformtextinputdouble namecl otstup" type="text" name="nameclient" placeholder="ВАШЕ ИМЯ">
                    <br><input id="onebuttonn1" class="asssd" type="submit" name="cupit" value='ХОЧУ КУПИТЬ'>
                    <input id="onebuttonn2" class="asd" type="submit" name="arend" value='ХОЧУ АРЕНДОВАТЬ'>
                    </form>
                </div>
                <div id="twoform">
                    <form action="hochusda.php" method="post">
                    <input class="downheadformtextinputdouble mailcl otsstup" type="email" name="mailclient" placeholder="E-MAIL">
                    <input class="downheadformtextinputdouble namecl otstup" type="text" name="nameclient" placeholder="ВАШЕ ИМЯ">
                    <br><input id="twobuttonn1" class="asssd" type="submit" name="sdat" value='ХОЧУ СДАТЬ'>
                    <input id="twobuttonn2" class="asd" type="submit" name="prodat" value='ХОЧУ ПРОДАТЬ'>
                    </form>
                </div>
            </div>-->
            <div id="poch">
                <div class="tittletext"><h1><pochh>ПОЧЕМУ СТОИТ ВЫБРАТЬ ОСОБНЯК СЕЙЧАС: </pochh></h1></div>
                <img id="pochimg" src="img/pochpicture.png">
                <div class="pochtext pochfirst"><p><pochp>ОГРАНИЧЕННОЕ КОЛИЧЕСТВО ПРЕДЛОЖЕНИЙ НА РЫНКЕ</pochp></p></div>
                <div class="pochtext marginleft"><p><pochp>ОБЛАДАНИЕ ОБОСОБЛЕННОЙ ТЕРРИТОРИЕЙ И ПАРКОВКОЙ В ЦЕНТРЕ МОСКВЫ</pochp></p></div>
                <div class="pochtext"><p><pochp>РОСТ ЦЕНЫ М2 И АРЕНДНЫХ СТАВОК НА КОММЕРЧЕСКУЮ НЕДВИЖИМОСТЬ</pochp></p></div>
                <div class="pochtext marginleft"><p><pochp>ПРЕСТИЖ РАЗМЕЩЕНИЯ ОФИСА КОМПАНИИ В ОТДЕЛЬНОСТОЯЩЕМ ЗДАНИИ</pochp></p></div>
            </div>
            <script type="text/javascript">
               jQuery(function($){
               $("#phonee").mask("(999) 999-9999");
               });
            </script>
            <div id="finalform">
                <div id="finalformtext">— ОСТАВЬТЕ ЗАЯВКУ —</div>
                <form action="phoneform.php" method="post">
                <input class="downheadformtextinput namefi finalll" type="text" name="nameclient" placeholder="ВАШЕ ИМЯ">
                <br><input class="downheadformtextinput mailfi finalll" type="tel" id="phonee" name="numberclient" placeholder="ВАШ ТЕЛЕФОН">
                <br><input id="buttonnfi" type="submit" value='ОТПРАВИТЬ'>
                </form>
            </div>
            <div id="phone">
                <img id="phonepic" src="img/blackphone.png"> <phone>8 (495) 730-68-70</phone>
            </div>
        </div>
    </body>
</html>