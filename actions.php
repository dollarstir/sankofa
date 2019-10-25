<?php
include 'db.php';
include 'core.php';

if (isset($_GET['dollarstir'])) {

    if ($_GET['dollarstir']=="sendmess") {


        $name= $_POST['name'];
        $email=$_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        if (empty($name)) {

            echo '<div class="mess" style="background-color:red;border-radius:10px;">
            <center><p style="color:#f1f1f1;">Please enter your name</p></center>
            </div>';
            }
            elseif (empty($email)) {


            echo '<div class="mess" style="background-color:red;border-radius:10px;">
            <center><p style="color:#f1f1f1;">Please enter your email</p></center>
            </div>';

                # code...
            }
            elseif (empty($phone)) {


            echo '<div class="mess" style="background-color:red;border-radius:10px;">
            <center><p style="color:#f1f1f1;">Please enter your subject</p></center>
            </div>';
                # code...
            }
            elseif (empty($message)) {


            echo '<div class="mess" style="background-color:red;border-radius:10px;">
            <center><p style="color:#f1f1f1;">Please enter your message</p></center>
            </div>';
                # code...
            }
            else{

                sendmessage($name,$email,$phone,$message);

                
            }   
    }
    # code...
}

?>

