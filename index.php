<?php
    session_start();

    if ($_GET['page']) {
    } else {
        header('location: ?page=home');
    }

    if (isset($_GET['page'])) {
        $page = 'page/' . $_GET['page'] . '.php';
        if (file_exists($page)) {
            include $page;
        } else {
            header('location: ?page=home');
        }
    }
