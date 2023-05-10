<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="./css/media.css">
    <link rel="stylesheet" href="./css/teachers.css">
    <title>Преподаватели</title>
</head>

<body>
<!-- FORM -->
<div class="main_form_wrapper"></div>
    <form action="" class="main_form">
        <h1 class="main_form_title">ЗАПИСАТЬСЯ НА ОБУЧЕНИЕ ПО АКЦИИ</h1>
        <p class="main_name">Ваше имя</p>
        <input type="text" name="name" id="main_name" placeholder="Введите ваше имя">
        <p class="main_telephone">Ваш телефон</p>
        <input type="tel" name="tel" id="main_tel" placeholder="Введите ваш номер телефона" maxlength="11">
        <p class="main_choseCategorie">Выберите категорию</p>
        <select name="select" id="select">
            <option value="A">Категория А</option>
            <option value="B">Категория B</option>
            <option value="C">Категория C</option>
            <option value="D">Категория D</option>
        </select>
        <div class="main_wrapper_consentToProcessing">
            <input type="checkbox" name="checkbox" id="main_checkbox">
            <p class="main_consentToProcessing">Даю согласию на обработку персональных данных</p>
        </div>
        <button class="main_form_button">ЗАПИСАТЬСЯ</button>
    </form>


    <!-- FORM -->
    <header class="header">
        <a href="index.html"><img src="./img/logo.jpg" alt="logotype" width="100px" height="100px"></a>
        <p class="header_schedule">график работы:<br>
            пн-вс 09:30 - 18:30</p>
        <div class="header_telNumber">
            <p class="header_telephons">Телефоны:</p>
            <a href="tel:+7 (800) 550-50-90" class="header_number">+7 (800) 550-50-90</a>
            <br>
            <a href="tel:+7 (800) 550-50-90" class="header_number">+7 (800) 550-50-90</a>
            <br>
            <a href="tel:+7 (800) 550-50-90" class="header_number">+7 (800) 550-50-90</a>
        </div>
        <div class="header_network_wrapper">
            <div class="header_button">Заказать звонок</div>
            <div class="networks">
                <a href=""><img src="./img/youtube.png" alt="youtube"></a>
                <a href=""><img src="./img/vk.png" alt="vk"></a>
                <a href=""><img src="./img/instagram.png" alt="instagram"></a>
                <a href=""><img src="./img/telegram.png" alt="telegram"></a>
                <a href=""><img src="./img/whatsapp.png" alt="whatsapp"></a>
                <a href=""><img src="./img/odnoklassniki.png" alt="odnoklassniki"></a>
            </div>
        </div>
    </header>
    <!-- HAMBURGER -->
    <nav class="nav">
        <input class="checkbox" type="checkbox" name="" id="" />
        <div class="hamburger-lines">
            <span class="line line1"></span>
            <span class="line line2"></span>
            <span class="line line3"></span>
        </div>
        <div class="menu-items">
            <!-- <li><a href="">КАТЕГОРИИ</a></li> -->
            <li><a href="./priceAndCostOfStudy.html">ЦЕНЫ</a></li>
            <li><a  href="./studyOnline.html">ОБУЧЕНИЕ ON-LINE</a></li>
            <li><a  href="./contacts.html">КОНТАКТЫ</a></li>
            <li><a  href="">О НАС</a>
        </div>
        <ul class="nav_menu">
            <!-- <li><a href="">КАТЕГОРИИ</a>
                <ul class="hidden_menu_categories">
                    <li><a href="https://www.google.md/?hl=ru">КАТЕГОРИЯ «А»</a></li>
                    <li><a href="">КАТЕГОРИЯ «В»</a></li>
                    <li><a href="">КАТЕГОРИЯ «С»</a></li>
                    <li><a href="">КАТЕГОРИЯ «D»</a></li>
                    <li><a href="">ВОССТАНОВЛЕНИЕ НАВЫКОВ ВОЖДЕНИЯ</a></li>
                </ul>
            </li> -->
            <li id="prices"><a href="./priceAndCostOfStudy.html">ЦЕНЫ</a>
                <ul class="hidden_menu_prices">
                    <li><a href="./priceAndCostOfStudy.html">СТОИМОСТЬ ОБУЧЕНИЯ</a></li>
                    <!-- <li><a href="">РАССРОЧКА 0%</a></li> -->
                    <li><a href="./managerVisit.html">ВЫЕЗД МЕНЕДЖЕРА</a></li>
                </ul>

            </li>
            <!-- HERE MAIN NAVIGATION -->
            <li><a href="./studyOnline.html">ОБУЧЕНИЕ ON-LINE</a></li>
            <li><a href="./contacts.html">КОНТАКТЫ</a></li>
            <li><a href="">О НАС</a>
                <ul class="hidden_menu_aboutUs">
                    <!-- <li><a href="">Сведения об образовательной организации</a></li>
                    <li><a href="">Наш автодром</a></li> -->
                    <li><a href="./instructors.php">ИНСТРУКТОРЫ</a></li>
                    <li><a href="./teachers.php">ПРЕПОДАВАТЕЛИ</a></li>
                    <li><a href="./autoSimulator.html">АВТОТРЕНАЖЁР</a></li>
                    <li><a href="./taxDeduction.html">НАЛОГОВЫЙ ВЫЧЕТ</a></li>
                    <!-- <li><a href="">Оплата материнским капиталом</a></li> -->
                </ul>
            </li>
        </ul>
    </nav>
    <!-- HAMBURGER -->
    <!-- HERE MAIN NAVIGATION -->
    <main class="techears_main">
        <div class="teachers_upperBackground">
            <div class="teachers_upperBlockWrapper">
                <h1 class="teachers_mainTitle">Преподаватели нашей автошколы</h1>
                <p class="teachets_text">В автошколе "Формула" в Краснодаре Вас будут обучать профессионалы своего дела
                    с
                    многолетним стажем и полностью индивидуальным подходом.</p>
            </div>
        </div>
        <div class="techears_wrapper">
            <div class="teachers_ourTeachers">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "root";
                $dbname = "autoschool";
                
                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Ошибка подключения: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM teachers";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $imgName = './img/'.$row["avatar"];
    
                        echo " 
                        
                        <div class='teacher'>
                            <img src= '$imgName' alt='' width='100%' height='80%'>
                            <div class='teacher_textWrapper'>
                                <p class='teacher_name'>$row[fio]</p>
                            </div>
                        </div>";
                    }
                } else {
                    echo "Нет результатов";
                }
                $conn->close();
                ?>
            </div>
        </div>
        <div class="techears_mapTitle_wrapper">
            <h1 class="techears_mapTitle">ФИЛИАЛЫ</h1>
        </div>
        <iframe class="googleMap"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d45256.961589461716!2d38.65240863129877!3d44.85089125845291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40f1bada55dde8fd%3A0xb2a8dd9977e49cd8!2z0KDQsNC30LvQuNCy0L3QvtC1INC_0LjQstC-!5e0!3m2!1sru!2sru!4v1679592135006!5m2!1sru!2sru"
            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </main>
    <footer class="footer">
        <div class="footer_flexWrapper">
            <img src="./img/logo.jpg" alt="logo" class="logo" width="100px" height="100px">
            <div class="footer_networks">
                <a href=""><img src="./img/youtube.png" alt="youtube"></a>
                <a href=""><img src="./img/vk.png" alt="vk"></a>
                <a href=""><img src="./img/instagram.png" alt="instagram"></a>
                <a href=""><img src="./img/telegram.png" alt="telegram"></a>
                <a href=""><img src="./img/whatsapp.png" alt="whatsapp"></a>
                <a href=""><img src="./img/odnoklassniki.png" alt="odnoklassniki"></a>
            </div>
            <div class="footer_telephone">
                <p class="footer_telephons">Телефоны:</p>
                <a href="tel:+7 (800) 550-50-90" class="footer_number">+7 (800) 550-50-90</a>
                <br>
                <a href="tel:+7 (800) 550-50-90" class="footer_number">+7 (800) 550-50-90</a>
                <br>
                <a href="tel:+7 (800) 550-50-90" class="footer_number">+7 (800) 550-50-90</a>
            </div>
        </div>
        <div class="footer_copyright">
            <p class="footer_dateCopyright">© 2007-2023 Все права защищены.</p>
            <a href="">
                <p class="privacyPolicy">Политика конфиденциальности</p>
            </a>
        </div>
    </footer>
</body>

<script src="./js/main.js"></script>


</html>