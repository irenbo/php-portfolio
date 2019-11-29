<div class="section">
            <h1><span>Приглашаю зарегистрироваться</span></h1>

            <form method="post" action="/account/registration">
                <div>
                    <input type="text" name="name" placeholder="Ваше имя" required>
                </div>
                <div>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div>
                    <input type="password" name="password" placeholder="Пароль" required>
                </div>
                <div>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                </div>
                <div>
                    <input type="submit" value="Отправить" class="submit">
                </div>

            </form>
</div>
<script>
    $('#phone').mask('+7(000)000-00-00', {placeholder: "(111)111-11-11" });
</script>