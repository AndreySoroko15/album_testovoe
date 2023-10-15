<?php require_once 'head.php' ?>

<form class="login-form p-5 d-flex justify-content-center flex-column" action="/user-login" method="POST">
    <div>
        <label for="login-input" class="form-label">Логин:</label>
        <input type="text" class="form-control" id="login-input" name="login">
        <p class="error"><?= $not_found_login ?></p>
    </div>
    <div>
        <label for="password-input" class="form-label">Пароль:</label>
        <input type="password" class="form-control" id="password-input" name="password">
        <div class="d-flex flex-row">
            <p class="error"><?= $not_found_password ?></p>
            <p class="error"><?= $not_found_user ?></p>
        </div>
    </div>
    <button type="submit" class="btn btn-primary submit-button mx-auto">Войти</button>
</form>

<?php require_once 'footer.php' ?>

