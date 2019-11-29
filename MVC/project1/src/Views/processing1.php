<div class="section">
<h1>Заполните форму заявки</h1>
<form method="post" action="#" enctype="multipart/form-data">
        <div><label for="makeP"><input type="radio" id="makeP" name="makePicture">Фотосъемка</label></div>
        <div><label for="makeEP"><input type="radio" id="makeEP" name="makeEditPicture">Фотосъемка + Обработка фото</label></div>
        <div><label for="editP" ><input type="radio" id="editP" name="EditPictur">Обработка фото</label></div>
        <div><button type="button"><a href="#">Добавить фотографии</a></button></div>


    <div>
    <div> <label><input type="radio" name="out">Выездная</label></div>
    <div><label><input type="radio" name="studio">Студийная</label></div>
    <div><label><input type="radio" name="outAndStudio">Комбинированная</label></div>
    <div>
        <p>
        <legend>Дата проведия фотосъемки</legend>
        <label for="date">Выбор даты</label>
        <input id="date" type="date" min="2019-03-12" required>
        </p>
        <p>
            <label for="time">Выбор времени</label>
            <input id="time" type="time" min="09:00" max="21:00">
        </p>
    </div>

    <div>
        <label for="text">Контактное лицо:</label>
        <input type="text" value="ФИО">
    </div>
    <div>
         <label for="number">Телефон:</label>
         <input type="number" placeholder="Укажите телефон">
    </div>
    <div>
        <label for="email">E-mail:</label>
         <input type="email" placeholder="Укажите e-mail" required>
    </div>
    <div>
      <button name="submit_btn" value="some_value" type="submit">Отправить данные</button>
    </div>
</form>
</div>