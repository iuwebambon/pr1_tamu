<?php

class Profile extends Controller
{
    public function __construct()
    {
        isLogin();
    }

    public function index()
    {
        $error = 0;
        if (isset($_POST['simpan'])) {
            $tmpname = $_FILES["foto"]["tmp_name"];
            // cek format foto
            $ext = explode('.', $_FILES['foto']['name']);
            $ext = end($ext);
            if ($ext === 'jpg' || $ext === 'jpeg' || $ext === 'JPG' || $ext === 'JPEG') {
                move_uploaded_file($tmpname, FOTOPROFILE . "/fotoprofile." . $ext);
                $fullname = $_POST['fullname'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $foto     = "fotoprofile." . $ext;

                $query = "UPDATE `users` SET `id`='IUWebAmbon',`fullname`='$fullname',`username`='$username',`password`='$password',`foto`='$foto' WHERE 1";
                $result = mysqli_query(conn(), $query);
                if ($result > 0) {
                    $error = 0;
                    setFlash("Profile berhasil diubah");
                    header("Location:" . BASEURL . "/profile");
                    exit;
                }
            }
            $error = 1;
        }

        $data = [
            'title' =>  'Profile',
            'error' =>  $error,
        ];
        $this->view("templates/header", $data);
        $this->view("profile/index", $data);
        $this->view("templates/footer", $data);
    }
}
