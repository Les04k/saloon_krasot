<section id="contacts" class="mb-5">
    <h2 class="text-center mb-5">Контакты</h2>
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Как нас найти</h5>
                    <div class="map-container mb-4">
                        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A1234567890abcdef&amp;source=constructor" width="100%" height="300" frameborder="0"></iframe>
                    </div>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-geo-alt-fill me-2"></i> г. Москва, ул. Красивая, 15</li>
                        <li class="mb-2"><i class="bi bi-telephone-fill me-2"></i> +7 (495) 123-45-67</li>
                        <li class="mb-2"><i class="bi bi-envelope-fill me-2"></i> info@elegant-beauty.ru</li>
                        <li class="mb-2"><i class="bi bi-clock-fill me-2"></i> Пн-Пт: 9:00 - 21:00, Сб-Вс: 10:00 - 20:00</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Записаться на прием</h5>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Ваше имя</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Телефон</label>
                            <input type="tel" class="form-control" id="phone" required>
                        </div>
                        <div class="mb-3">
                            <label for="service" class="form-label">Услуга</label>
                            <select class="form-select" id="service">
                                <option selected>Выберите услугу</option>
                                <option>Парикмахерские услуги</option>
                                <option>Косметология</option>
                                <option>Маникюр и педикюр</option>
                                <option>Массаж</option>
                                <option>Визаж</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Дата</label>
                            <input type="date" class="form-control" id="date">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Комментарий</label>
                            <textarea class="form-control" id="message" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Отправить заявку</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>