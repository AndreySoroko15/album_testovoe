<? session_start() ?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title> Альбом </title>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--  links -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"           
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	    <link rel="stylesheet" href="app/view/css/style.css">
        <script
            src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
            crossorigin="anonymous">
        </script>
    </head>
    <body>
        <header>
            <div class="container">
                <nav class="navbar navbar-expand-md">
                    <div class="container-fluid d-flex justify-content-between">
                        <a class="navbar-brand" href="#">Альбом</a>

                        <?php if(isset($_SESSION['login'])): ?>
                            <div class="navbar-nav dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> 
                                    <?= $_SESSION['login'] ?>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/logout">
                                        Выйти
                                    </a>
                            </div>
                        <?php else: ?>
                            <div class="navbar-nav">
                                    <a class="nav-link" href="/login">Вход</a>
                                    <a class="nav-link" href="/registration">Регистрация</a>
                            </div>
                        <?php endif; ?>
                    </div>
                </nav>
            </div>
        </header>
        <main>
            <div class="container">
