<?php

function setFlash($pesan)
{
    $_SESSION['pesan'] = $pesan;
}

function getFlash()
{
    if (isset($_SESSION['pesan'])) {
        $pesan = $_SESSION['pesan'];
        unset($_SESSION['pesan']);
        return $pesan;
    } else {
        return false;
    }
}
