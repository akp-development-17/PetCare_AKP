<!DOCTYPE html>
<html>

<head>
    <title>Petcare</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/login.css">
</head>

<body>
    <?php
    // put your code here
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userId = $_POST['userId'];
        $password = $_POST['password'];

        $con = mysqli_connect("localhost", "root", "", "petcare");
        $stmt = $con->prepare("SELECT * FROM users WHERE userId = ? AND password = ?");
        $stmt->bind_param('ss', $userId, $password);

        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            // echo 'Welcome to library';
            header("refresh:0;url=home.php");
            exit();
        } else {
            echo '<p>Invalid StudentId or Password</p>';
        }
        $stmt->close();
        $con->close();
    }
    ?>
    <div class="background">
        <div class="form-container">
            <form action="" method="POST">
                <h1>Login here!</h1>
                <div class="form-group">
                    <label for="userId">Username</label>
                    <input type="text" id="userId" name="userId" placeholder="Choose a username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <button type="submit">Login</button>
                <button type="submit" onclick="redirectToCommon()">Back</button>
            </form>
        </div>
    </div>
    <script>
        function redirectToCommon() {
            window.location.href = "s_l.php";
        }
    </script>

</body>

</html>