<?php require_once 'head.php' ?>

<form class="registry-form p-5 d-flex justify-content-center flex-column">
    <div class="mb-3">
        <label for="loginInput" class="form-label">Логин:</label>
        <input type="text" class="form-control" id="loginInput">
    </div>
    <div class="mb-3">
        <label for="emailInput" class="form-label">Почта:</label>
        <input type="email" class="form-control" id="emailInput">
    </div>
    <div class="mb-3">
        <label for="passwordInput" class="form-label">Пароль:</label>
        <input type="password" class="form-control" id="passwordInput">
    </div>
    <div class="mb-3">
        <label for="passwordConfirmInput" class="form-label">Подтверждение пароля:</label>
        <input type="password" class="form-control" id="passwordConfirmInput">
    </div>
    <button type="submit" class="btn btn-primary submit-button mx-auto p-2">Зарегестрироваться</button>
</form>

<?php require_once 'footer.php' ?>
