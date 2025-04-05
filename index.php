<?php
session_start();
require_once 'includes/config.php';
require_once 'includes/auth.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Салон красоты "Элегант" - Главная</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main class="container my-5">
        <?php if(isset($_SESSION['message'])): ?>
            <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['message']); unset($_SESSION['message_type']); ?>
        <?php endif; ?>

        <!-- Hero Section -->
        <section class="hero-section mb-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="display-4 fw-bold mb-4">Салон красоты "Элегант"</h1>
                    <p class="lead mb-4">Профессиональный уход за вашей красотой и здоровьем</p>
                    <a href="#services" class="btn btn-primary btn-lg me-2">Наши услуги</a>
                    <a href="#masters" class="btn btn-outline-primary btn-lg">Наши мастера</a>
                </div>
                <div class="col-md-6">
                    <img src="images/bg.jpg" alt="Салон красоты" class="img-fluid rounded shadow">
                </div>
            </div>
        </section>

        <?php include 'includes/news.php'; ?>
        <?php include 'includes/services.php'; ?>
        <?php include 'includes/masters.php'; ?>
        <?php include 'includes/contacts.php'; ?>
    </main>

    <?php include 'includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>