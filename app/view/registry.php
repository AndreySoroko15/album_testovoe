<?php require_once 'head.php' ?>

<form class="registry-form p-5 d-flex justify-content-center flex-column" action="/user-registration" method="post">
    <div class="mb-3">
        <label for="loginInput" class="form-label">Логин:</label>
        <input type="text" class="form-control" id="loginInput" name="login">
    </div>
    <div class="mb-3">
        <label for="emailInput" class="form-label">Почта:</label>
        <input type="email" class="form-control" id="emailInput" name="email">
    </div>
    <div class="mb-3">
        <label for="passwordInput" class="form-label">Пароль:</label>
        <input type="password" class="form-control" id="passwordInput" name="password">
    </div>
    <div class="mb-3">
        <label for="passwordConfirmInput" class="form-label">Подтверждение пароля:</label>
        <input type="password" class="form-control" id="passwordConfirmInput" name="password_confirm">
    </div>
    <button type="submit" class="btn btn-primary submit-button mx-auto p-2">Зарегестрироваться</button>
</form>

<?php require_once 'footer.php' ?>
