        <?php
        header('Location: http://sproing.us/mosssite/secret.html');
        echo 'hi';
        $servername = "localhost";
        $dbname = "myDB";
        $password=$_POST['password'];
        $username=$_POST['username'];
        $dbhost_name = 'db5013763158.hosting-data.io';
        $database = 'dbs11520771';
        $dbuser_name = 'dbu1892679';
        $dbpassword = 'D*jqR-JBm3QdRQrZWxT!jmRxg';
        $hashedpass = password_hash($password, PASSWORD_DEFAULT);
        $conn = mysqli_connect($dbhost_name, $dbuser_name,$dbpassword, $database);
        $sql = "SELECT password FROM users WHERE username='$username'";
        $result = $conn->query($sql);
        $row = $result -> fetch_array(MYSQLI_NUM);
        if(password_verify($password,$row[0])){
            
            exit;
        }
        ?>
