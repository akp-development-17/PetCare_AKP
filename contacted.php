<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="/css/s_l.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // contact 
        $name1 = $_POST['name1'];
        $email1 = $_POST['email1'];
        $message1 = $_POST['message1'];

        $con = mysqli_connect("localhost", "root", "", "petcare");
        $query1 = "INSERT INTO contact (name1,email1,message1) VALUES('$name1','$email1','$message1')";
        $result1 = mysqli_query($con, $query1);
        if ($result1) {
            echo ("Recorded");
            header("location:contacted.php");
        } else {
            echo ("Failed");
        }
    }
    ?>
    <div class="background">
        <div class="overlay">
            <div class="content">
                <h1>Your Message has been received!</h1>
                <h5>If you need to reschedule or cancel your appointment, please contact us at least 24 hours in advance.</h5>
                <h5> You can ask to:</h5>
                <div class="mail">
                    <a href="mailto:patelanish081@gmail.com" class="links"><i class="fas fa-envelope"></i> patelanish081@gmail.com</a>
                </div>
                <h5>Call Us:</h5>
                <div class="phone">
                    <a href="tel:+919777024404" class="links"><i class="fas fa-phone"></i> 9777024404</a>
                </div>
                <button class="button" onclick="redirectToHome()">Back To Home</button>
            </div>
        </div>
    </div>
    <script>
        function redirectToHome() {
            window.location.href = "home.php";
        }
    </script>
</body>

</html>