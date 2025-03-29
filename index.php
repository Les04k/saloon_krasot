<?php
// Заглушка для списка услуг (в будущем можно брать из БД)
$services = [
    ["name" => "Массаж", "description" => "Механическое и рефлекторное воздействие на ткани для лечебного эффекта."],
    ["name" => "Маникюр", "description" => "Уход за пальцами рук, чистка, полировка, покрытие лаком ногтей."],
    ["name" => "Педикюр", "description" => "Уход за ступнями и пальцами ног, удаление мозолей."],
    ["name" => "Окрашивание волос", "description" => "Изменение природного цвета или оттенка волос."],
    ["name" => "Стрижка огнём", "description" => "Уход за волосами с использованием открытого огня."],
    ["name" => "Стрижка волос", "description" => "Укорачивание волос с учетом фасона."],
    ["name" => "Мелирование", "description" => "Окрашивание отдельных прядей волос."]
];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Салон красоты "Аврора"</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }
        header {
            background-color: #e91e63;
            color: white;
            text-align: center;
            padding: 20px;
        }
        .services {
            max-width: 1200px;
            margin: 20px auto;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .service-card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 300px;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .service-card h3 {
            color: #e91e63;
            margin-top: 0;
        }
        .contact {
            text-align: center;
            padding: 20px;
            background-color: #ffebee;
        }
        .contact a {
            color: #e91e63;
            text-decoration: none;
            font-weight: bold;
        }
        footer {
            text-align: center;
            padding: 10px;
            background-color: #e91e63;
            color: white;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Салон красоты "Аврора"</h1>
        <p>Косметическое обслуживание для мужчин и женщин</p>
    </header>

    <section class="services">
        <h2>Наши услуги</h2>
        <?php foreach ($services as $service): ?>
            <div class="service-card">
                <h3><?php echo $service['name']; ?></h3>
                <p><?php echo $service['description']; ?></p>
            </div>
        <?php endforeach; ?>
    </section>

    <section class="contact">
        <h2>Запишитесь к нам!</h2>
        <p>Позвоните по телефону: <a href="tel:+79991234567">+7 (999) 123-45-67</a></p>
        <p>Или приходите без записи — если мастер свободен, мы вас обслужим!</p>
    </section>

    <footer>
        <p>&copy; 2025 Салон красоты "Аврора". Все права защищены.</p>
    </footer>
</body>
</html>