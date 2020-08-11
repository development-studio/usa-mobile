
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/styles/main.css">
    <script src="./assets/js/jquery/jquery-3.3.1.js"></script>
    <title>USA Role Play: Главная</title>
</head>
<body>
    <header>
        <div class="header">
            <div class="header-logo">
                <a href="/">
                    <img src="./assets/images/logo.png" alt="">
                </a>
            </div>
            <div class="header-menu">
                <i class="fas fa-bars"></i>
            </div>
            <nav>
                <a href="/">Главная</a>
                <a href="https://vk.com/usarp_mobile"><img src="./assets/images/vk.png" alt=""></a>
                <a href="donate.php" class="button">Донат</a>
            </nav>
        </div>
    </header>

    <main>
        <div class="donate">
            <div class="donate-bl">
                <div class="donate-l">
                    <img src="./assets/images/donate-men.png" alt="">
                </div>
                <div class="donate-r">
                    <div class="donate-form">
                        <div class="form">
                            <div class="form-title">
                                <h1>Пополнить счет</h1>
                            </div>
                            <form action="https://unitpay.ru/pay/165761-ad869">
                                <div class="form-input">
                                    <section>
                                        <img src="./assets/images/geo.png" alt="">
                                    </section>
                                    <select name="desc">
                                        <option value="0">Выберите сервер</option>
                                        <option value="1" selected>Washington</option>
                                    </select>
                                </div>
                                <div class="form-input">
                                    <section>
                                        <img src="./assets/images/user.png" alt="">
                                    </section>
                                    <input type="text" name="account" placeholder="Введите никнейм" required>
                                </div>
                                <div class="form-input">
                                    <section>
                                        <img src="./assets/images/money.png" alt="">
                                    </section>
                                    <input type="number" name="sum" placeholder="Сумма">
                                </div>
                                <input type="submit" name="submit" value="Оплатить" class="button" required>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer">
            <div class="footer-l">
                <p><b>(C) 2020 USA ROLEPLAY</b></p>
                <p>Все права защищены.</p>
                <p>Любое копирование запрещено!</p>
            </div>
            <div class="footer-r">
                <a href="https://vk.me/donald_online">- Помощь</a>
                <a href="https://vk.com/usarp_mobile">- ВКонтакте</a>
            </div>
        </div>
    </footer>

    <script src="./assets/js/menu.js"></script>
</body>
</html>