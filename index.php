<?php
try {
    $db = new mysqli("localhost", "root", "password", "Example-Database-Name");
} catch (Exception $exc) {
    echo $exc-> getTraceAsString();
}
if(isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['message'])){

    $name = $_POST['name'];
    $email = $_POST['mail'];
    $message = $_POST['message'];

     $is_insert = $db->query( "INSERT INTO `contact`( `name`, `mail`, `message`) 
     VALUES ( '$name','$email','$message')");

     if($is_insert == TRUE) {
        sleep(3);
     }
}
?>

<!DOCTYPE html>
<html>

<div id="companyLogo">
</div>

<head>
    <meta charset="utf-8">
    <title> Contact Form </title>
    <link rel="stylesheet" href="style.css">
</head>

<script>
function changeText() {
    document.getElementById('button').value = "Thanks!";
};
</script>

<body id="form">
    <main>
        <br>
        <div id="box">
            <h3 id="top"> We're not available at the moment We expect to be active again by:<h3>
                    <h3 id="date"> XX-XX-XXXX
                        <?php /*
                        // This would be a call to the Database, 
                        requesting the prospective date and returning it in the preffered format. 

     $sql = "SELECT * FROM contact ORDER BY id DESC LIMIT 1;";

     $result = mysqli_query($db, $sql);
     $resultCheck = mysqli_num_rows($result);
     
     if ($resultCheck > 0) {
         while ($row = mysqli_fetch_assoc($result)){
     
             $finalDate = $row['date'];
     
             $day = substr($finalDate,8,2);
             $month = substr($finalDate, 5, 2);
             $year = substr($finalDate, 0, 4);
     
             $call = $day.'/'.$month.'/'.$year;
             echo $call;
         };
     }
     */
     ?>
                    </h3>
        </div>
        <div>
            <form class="contact-form" action="index.php" method="post">
                <p id="git">Get In Touch</p>
                <input type="text" name="name" placeholder=" Full Name">
                <input type="text" name="mail" placeholder=" Your E-Mail Address">
                <textarea name="message" placeholder=" Message"></textarea>
                <input id="button" onclick="changeText()" type="submit" value="Submit">
            </form>
        </div>
        <br>
    </main>
</body>

</html>