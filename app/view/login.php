<?php require_once 'head.php' ?>

<form class="login-form p-5 d-flex justify-content-center flex-column" action="/user-login" method="POST">
    <div class="mb-3">
        <label for="login-input" class="form-label">Логин:</label>
        <input type="text" class="form-control" id="login-input" name="login">
    </div>
    <div class="mb-3">
        <label for="password-input" class="form-label">Пароль:</label>
        <input type="password" class="form-control" id="password-input" name="password">
    </div>
    <button type="submit" class="btn btn-primary submit-button mx-auto">Войти</button>
</form>

<?php require_once 'footer.php' ?>

