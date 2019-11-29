<h1>Бриф на разработку сайта</h1>
<form method="post" action="#" enctype="multipart/form-data">

    <fieldset>
        <legend>Укажите информацию о компании</legend>
        <fieldset>
            <p>
                <label for="text">Название компании:</label>
                <input type="text" id="text">
            </p>

            <p>
                <label for="text">Контактное лицо:</label>
                <input type="text" value="ФИО">
            </p>
            <p>
                <label for="number">Телефон:</label>
                <input type="number" placeholder="Укажите телефон">
            </p>
            <p>
                <label for="email">E-mail:</label>
                <input type="email" placeholder="Укажите e-mail" required>
            </p>

            <p>
                <textarea cols="45" rows="15" placeholder="Краткое описание компании" required></textarea>
            </p>
        </fieldset>
        <br>
        <fieldset>
            <label>Требуется редизайн сайта</label>
            <p>
                <label><input type="radio" name="answer">Да</label>
                <label><input type="radio" name="answer">Нет</label>
            </p>
            <p>
                <label for="adres">Адрес сайта (в случае редизайна)</label>
                <input type="text" id="adres">
            </p>
        </fieldset>
    </fieldset>

    <fieldset>
        <legend>Маркетинг</legend>
        <fieldset>
            <legend>Цель создания сайта</legend>
            <select name="select1" required>
                <option value="1">Предоставление информации о компании </option>
                <option value="2">Оптимизация работы с существующими клиентами</option>
                <option value="3">Реклама определенного продукта или услуги</option>
                <option value="4">Привлечение новых клиентов</option>
                <option value="5">Увеличение продаж</option>
                <option selected value="6">Продажа в Интернете товаров или услуг</option>
                <option value="7">Другое/несколько вариантов</option>
            </select>
            <p>
                <textarea cols="45" rows="10" placeholder="Введите свой вариант"></textarea>
            </p>
            <p>
                <button type="reset">Очистить поле</button>
            </p>
        </fieldset>
        <fieldset>
            <legend>Целевая аудитория</legend>
            <fieldset>
                <legend>Возраст</legend>

                <label><input type="checkbox" name="answer2[]">18-30</label>
                <label><input type="checkbox" name="answer2[]">31-38</label>
                <label><input type="checkbox" name="answer2[]">39-49</label>
                <label><input type="checkbox" name="answer2[]">Старше 50</label>

            </fieldset>

            <fieldset>
                <label>Пол</label>
                <p>
                    <label><input type="radio" name="answer">Любой</label>
                    <label><input type="radio" name="answer">Женский</label>
                    <label><input type="radio" name="answer">Мужской</label>

                </p>

            </fieldset>

            <fieldset>
                <label>Доход</label>
                <p>
                    <label><input type="radio" name="answer">Высокий</label>
                    <label><input type="radio" name="answer">Средний</label>
                    <label><input type="radio" name="answer">Низкий</label>

                </p>

            </fieldset>

        </fieldset>

    </fieldset>


    <fieldset>
        <legend>Оформление</legend>
        <p>
            <select name="select" size="10" multiple>
                <optgroup label="Основные разделы">
                    <option value="1">О компании</option>
                    <option value="2">Продукты/Услуги</option>
                    <option value="3">Каталог</option>
                    <option value="4">Прайс-лист</option>
                    <option value="5">Новости</option>
                    <option value="6">Контакты</option>
                </optgroup>

                <optgroup label="Программные модули">
                    <option value="1">Гостевая книга</option>
                    <option value="2">Почтовая рассылка</option>
                    <option value="3">Анкетирование</option>
                    <option value="4">Онлайн-заказ</option>
                    <option value="5">Интернет-магазин</option>
                    <option value="6">Архив</option>
                    <option value="7">Сбор статистики</option>
                </optgroup>

                <optgroup label="Анимация">
                    <option value="1">Aнимация не нужна </option>
                    <option value="2">Анимация логотипа</option>
                    <option value="3">Заставка на главной странице</option>
                    <option value="4">Интерактивная презентация</option>
                    <option value="5">Иное размещение</option>
                </optgroup>
            </select>
        </p>
    </fieldset>
    <fieldset>
        <legend>Укажите сроки выполнение заказа</legend>
        <p>
            <label for="date">Выбор даты</label>
            <input id="date" type="date" min="2019-03-12" required>
        </p>
        <p>
            <label for="time">Выбор времени</label>
            <input id="time" type="time" min="09:00" max="21:00">
        </p>
    </fieldset>
    <button name="submit_btn" value="some_value" type="submit">Отправить данные</button>
    <p>
        <input type="image" src="img/but_ok.jpg" alt="Альтернативный текст">
    </p>
</form>

<p>
    <a href="#">Проверить введенные данные</a>
</p>

