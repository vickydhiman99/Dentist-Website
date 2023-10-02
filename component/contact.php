<?php

$conn = mysqli_connect("localhost","root","","dentist");

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO contact_form(name, email, number, date) VALUES ('$name', '$email', '$number', '$date')");

    if ($insert) {
       $message[] = 'appointment successfully!';
    }else {
        $message[] = 'appointment failed!';
    }

}

?>

    <!-- contact section start -->

    <section id="contact" class="contact">

<h1 class="heading">Book Appointment</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <?php 

        if (isset($message)) {
           foreach($message as $message) {
            echo '<p class="message"> '.$message.' </p>';
           }
        }
        

         ?>

        <table class="table table-bordered table-striped">
            <tr>
                <th><label for="">Enter Your name:-</label></th>
                <td><input type="text" name="name" placeholder="Enter Your Name" class="box" required></td>
            </tr>
            <tr>
                <th><label for="">Enter Your Email:-</label></th>
                <td><input type="email" name="email" placeholder="Enter Your Email" class="box" required></td>
            </tr>
            <tr>
                <th><label for="">Enter Your number:-</label></th>
                <td><input type="number" name="number" placeholder="Enter Your Number" class="box" required></td>
            </tr>
            <tr>
                <th><label for="">Book Appointment Date:-</label></th>
                <td><input type="datetime-local" name="date"  class="box" required></td>
            </tr>
            <tr>
                <th><label for="">Submit Appointment</label></th>
                <td><input type="submit" name="submit" value="Book Appointment" class="link-btn"></td>
            </tr>
           
        </table>
    </form>
</section>

<!-- contact section start -->
