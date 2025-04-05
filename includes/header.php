<header class="bg-dark sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark container">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo.png" alt="Логотип" height="40" class="d-inline-block align-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#news">Новости</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Услуги</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#masters">Наши мастера</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacts">Контакты</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <?php if(isset($_SESSION['user_id'])): ?>
                        <div class="dropdown">
                            <button class="btn btn-outline-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
                                <i class="bi bi-person-circle me-1"></i> <?= htmlspecialchars($_SESSION['username']) ?>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Профиль</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Настройки</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="includes/auth.php?logout=1"><i class="bi bi-box-arrow-right me-2"></i>Выйти</a></li>
                            </ul>
                        </div>
                    <?php else: ?>
                        <a href="auth/login.php" class="btn btn-outline-light me-2">Войти</a>
                        <a href="auth/register.php" class="btn btn-primary">Регистрация</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
</header>