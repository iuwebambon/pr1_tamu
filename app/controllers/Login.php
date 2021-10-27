<?php

class Login extends Controller
{
    public function index()
    {
        if (isset($_SESSION['login'])) {
            header("Location:" . BASEURL);
            exit;
        }
        $error = false;
        if (isset($_POST['submit'])) {
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);

            $login = mysqli_query(conn(), "SELECT * FROM users WHERE username = '$username' AND password = '$password'");
            $login = mysqli_num_rows($login);
            if ($login > 0) {
                $_SESSION['login'] = true;
                header("Location: " . BASEURL);
                exit;
            }
            $error = true;
        }

        $data = [
            'error' => $error
        ];
        $this->view("auth/login", $data);
    }

    public function off()
    {
        if (isset($_SESSION['login'])) {
            $login = $_SESSION['login'];
            unset($_SESSION['login']);
            session_destroy();
            header("Location:" . BASEURL . "/login");
        }
    }
}
