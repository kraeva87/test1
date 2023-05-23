<?php //изображения должны быть оптимизированы, но поддерживать качество retina-экранов ?>
<html>
<head>
    <title>Тест1</title>
    <link href="/style.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <div class="switch">
                <span class="active" id="ru_lang">Ru</span>
                <span id="en_lang">En</span>
            </div>
            <div class="header_background">
                <figure>
                    <img src="/images/header_background@1x.png" srcset="/images/header_background@2x.png 2x" width="761" height="680" loading="lazy" alt="">
                </figure>
            </div>
            <div class="first_screen_text">
                <h1>Fin <span>Kit</span></h1>
                <p class="sub_text">Гибкая мобильная платформа для быстрой реализации инвестиционных сервисов.</p>
                <a href="#" class="order_demo">Заказать демо</a>
            </div>

            <div class="advantages">
                <div>
                    <i class="icon-graph"></i>
                    <p>Удобный пользовательский интерфейс</p>
                </div>
                <div>
                    <i class="icon-activity"></i>
                    <p>Панель администратора для ведения учета</p>
                </div>
                <div>
                    <i class="icon-filter"></i>
                    <p>Простая и быстрая интеграция</p>
                </div>
                <div>
                    <i class="icon-setting"></i>
                    <p>Гибкая масштабируемая система</p>
                </div>
            </div>
        </div>
    </header>
    <main class="container">
        <div class="second_screen">
            <h2>Наши <span class="blue">ключевые продукты</span> для инвестиций</h2>
            <div class="two_column blue_background">
                <div>
                    <div class="two_column">
                        <div>
                            <div class="platform_for_auto">
                                <h3>Платформа для автоследования</h3>
                                <p>Копирование стратегий в автономном режиме</p>
                            </div>
                        </div>
                        <div>
                            <img src="/images/platform_for_auto.png" alt="">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="two_column">
                        <div>
                            <div class="platform_for_robo">
                                <h3>Платформа для робо-эдвайзинга</h3>
                                <p>Персонализированный подбор стратегий исходя из заданных параметров</p>
                            </div>
                        </div>
                        <div>
                            <img src="/images/platform_for_robo.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="third_screen two_column">
            <div>
                <h2><span class="blue">Представляем ценность</span> для броĸера и банĸа</h2>
                <p class="sub_text">Мы помогаем броĸерам и банĸам запустить собственное мобильное приложение для инвестиций в ĸоротĸие сроĸи и с эĸономией бюджета</p>
                <a href="#" class="order_demo">Заказать демо</a>
            </div>
            <div class="two_column">
                <div>
                    <i class="icon-money"></i>
                    <p>Эĸономим время и деньги на запусĸ digital сервисов</p>
                </div>
                <div>
                    <i class="icon-new_clients"></i>
                    <p>Создаем канал привлечения новых клиентов</p>
                </div>
                <div>
                    <i class="icon-new_product"></i>
                    <p>Помогаем увеличить выручку путем запуска нового продукта</p>
                </div>
                <div>
                    <i class="icon-loyalty"></i>
                    <p>Повышаем лояльность действующих клиентов</p>
                </div>
            </div>
        </div>
    </main>
    <script src="/script.js"></script>
</body>
</html>