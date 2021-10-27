<?php

function conn()
{
    return mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
}

function setFlash($pesan)
{
    $_SESSION['pesan'] = $pesan;
}

function flash()
{
    if (isset($_SESSION['pesan'])) {
        $flash = $_SESSION['pesan'];
        unset($_SESSION['pesan']);
        return $flash;
    }
}

function isLogin()
{
    if (!isset($_SESSION['login'])) {
        header("Location:" . BASEURL . "/login");
        exit;
    }
}

function user()
{
    $user = mysqli_query(conn(), "SELECT * FROM users");
    return mysqli_fetch_assoc($user);
}
