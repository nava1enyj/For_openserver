<?php use App\Services\Page; ?>
<html>
<?php Page::part('head');?>
<body>
<?php Page::part('navbar');?>
<div class="container-xxl">
    <div class="fs-3">Личный кабинет</div>
    <hr>

    <div class="border">
        <div class="p-5">
            <div class="d-flex">
                <img src="../<?=$_SESSION['user']['avatar']?>" class="img-thumbnail  profile-avatar" alt="...">
                <div class="ms-3">
                    <h5 class="border-bottom">Логин: <?=$_SESSION['user']['email']?></h5>
                    <p>Имя: <?=$_SESSION['user']['name']?></p>
                    <p>Фамилия: <?=$_SESSION['user']['lastname']?></p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>