<?php require_once 'head.php' ?>

<form class="registry-form p-5 d-flex justify-content-center flex-column" action="/user-registration" method="post">
    <div>
        <label for="loginInput" class="form-label">Логин:</label>
        <input type="text" class="form-control" id="loginInput" name="login">
        <p class="error"><?= $not_found_login ?></p>
    </div>
    <div>
        <label for="emailInput" class="form-label">Почта:</label>
        <input type="email" class="form-control" id="emailInput" name="email">
        <p class="error"><?= $not_found_email ?></p>
    </div>
    <div>
        <label for="passwordInput" class="form-label">Пароль:</label>
        <input type="password" class="form-control" id="passwordInput" name="password">
        <p class="error"><?= $not_found_password ?></p>
    </div>
    <div>
        <label for="passwordConfirmInput" class="form-label">Подтверждение пароля:</label>
        <input type="password" class="form-control" id="passwordConfirmInput" name="password_confirm">
        <div class="d-flex flex-row">
            <p class="error mb-1"><?= $not_found_password_confirm ?></p>
            <p class="error mb-1"><?= $error ?></p>
        </div>
    </div>
    <button type="submit" class="btn btn-primary submit-button mx-auto p-2">Зарегестрироваться</button>
</form>

<?php require_once 'footer.php' ?>
