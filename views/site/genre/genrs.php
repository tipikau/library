<?php

use Src\Auth\Auth;

?>
<div class="sidebar">
    <div class="sidebar-top">
        <p class="logo"><img class="logo-img" src="../../../public/static/media/lib_logo.png" alt="logo-ico">Библиотека
        </p>
        <nav>
            <a href="<?= app()->route->getUrl('/books') ?>">Книги</a>
            <a href="<?= app()->route->getUrl('/readers') ?>">Читатели</a>

            <?php if (Auth::user()->role->role === 'admin'): ?>
                <a href="<?= app()->route->getUrl('/genre') ?>">Жанры</a>
                <a href="<?= app()->route->getUrl('/publishers') ?>">Издательства</a>
                <a href="<?= app()->route->getUrl('/halls') ?>">Залы</a>
                <a href="<?= app()->route->getUrl('/librarians') ?>">Сотрудники</a>
            <?php endif; ?>
        </nav>
    </div>
    <div class="sidebar-bottom">
        <a href="<?= app()->route->getUrl('/profile') ?>" class="sidebar-link sidebar-img-link"><img
                    src="../../../public/static/media/profile_icon.svg"
                    alt="profile-icon"><?= app()->auth::user()->name ?>
        </a>
        <a href="<?= app()->route->getUrl('/logout') ?>" class="sidebar-link sidebar-img-link"><img
                    src="../../../public/static/media/logout_icon.svg" alt="logout-icon">Выход</a>
    </div>
</div>

<div class="main">
    <div class="search"><input type="text" name="search" class="seacrh-from"><img
                src="../../../public/static/media/search_icon.svg" alt="search">
    </div>

    <h1>Список жанров</h1>
    <a href="<?= app()->route->getUrl('/genre-add') ?>">
        Добавить жанр
    </a>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($genre_list as $genre) {
            ?>
            <tr>
                <td><?= $genre->name ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
