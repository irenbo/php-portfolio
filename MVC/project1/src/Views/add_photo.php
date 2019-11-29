<form method="post" action="/picture/add" enctype="multipart/form-data">
    <div>
        <label for="title">Название фотографии</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="название" required>
    </div>
    <div class="form-group">
        <label for="description">Задание для обработки</label>
        <textarea class="form-control" id="description" name="description" placeholder="Например, убрать красные глаза; сделать цвета поярче; удалить провода и людей на заднем фоне" required></textarea>
    </div>
    <div class="form-group">
        <label for="img">Загрузите фотографию</label>
        <input type="file" id="img" name="img" multiple accept="image/*" required>
    </div>
    <button type="submit" class="btn btn-secondary">Добавить</button>
</form>

<div>
    <button type="button"><a href="" </button>
</div>