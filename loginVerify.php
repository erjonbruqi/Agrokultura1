<?php 
include_once("config.php");

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        echo "Please fill all fields.";
        header("Refresh:2; Location: login.php");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE username = :username";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->execute(); 

        if ($stmt->rowCount() > 0) {
            $data = $stmt->fetch();
            if ($data['password'] === $password) {
                $_SESSION['username'] = $username;

                 if ($data['user_type'] == 'admin') {
                    header("Location: dashboard.php");
                    exit();
                } else if ($data['user_type'] == 'user') {
                    header("Location: shopping.php");
                    exit();
                }
            } else {
                echo "Incorrect password.";
                header("Refresh:1; url=login.php");
                exit();
            }
        } else {
            echo "User not found.";
            header("Refresh:1; url=login.php");
            exit();
        }
    }
}
?>