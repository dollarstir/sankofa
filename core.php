<?php

function so()
{
    

    
            echo '<footer class="py-5">
            <div class="container py-md-3">
                <div class="row footer-grids">
                    <div class="col-lg-4 footer-grid-left mb-lg-0 mb-4">
                        <h2><a href="index.html"><img src="images/logo2.png" alt="" style="width=:150px;height:100px;background-color:#f1f1f1;border-radius:10px;"> </a></h2>
                        <center><p class="mt-3" style="font-size:20px;color:red;" ><em>Say Yo!, Yo!, Yo!,</em></p></center>
                    </div>
                    <div class="col-lg-4 col-md-6 footer-grid-middle">
                        <center><h4>About Sankofa Photogranphy</h4></center>
                        <p>Duis fringilla velit id ipsum dignissim init elementum. Curabitur fermentum libero acsit amet consectetur. Vestibulum non posuere sapien, eget feugiat quam. Sed eget sapien nunc. </p>
                    </div>
                    <div class="col-lg-4 col-md-6 subscribe-grid mt-md-0 mt-4">
                        <h4> Connect & subscribe </h4>
                        <div class="social mb-4 text-center">
                            <ul class="d-flex justify-content-start">
                                <li class="mr-2"><a href="http://www.facebook.com/sankofa_photography_gh"><span class="fab fa-facebook-f"></span></a></li>
                                <li class="mx-sm-2 mr-2"><a href="http://www.twitter.com/sankofa_photography_gh"><span class="fab fa-twitter"></span></a></li>
                                <li class="mx-sm-2 mr-2"><a href="http://www.youtube.com/sankofatv"><span class="fas fa-rss"></span></a></li>
                                <li class="mx-sm-2 mr-2"><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                <li class="mx-sm-2 mr-2"><a href="#"><span class="fab fa-google-plus"></span></a></li>
                            </ul>
                        </div>
                        <form action="#" method="post">
                            <input class="form-control" type="email" placeholder="Subscribe" name="Subscribe" required="">
                            <button class="btn1">
                                <i class="far fa-paper-plane"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="copyright mt-5">
                    <p class="text-center">© '.date("Y").' Sankofa Photography. All Rights Reserved | Design by <a href="http://purplesofts.com/"> Purple Software </a></p>
                </div>
            </div>
        </footer>'; 
}

function head(){
            echo '<header>
            <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">

                <h1>
                    <a class="navbar-brand text-white" href="index.php" style="width:150px;"> <img src="images/logo2.png" alt="" style="width=:150px;height:65px;background-color:#f1f1f1;border-radius:10px;padding:10px;"> </a>
                </h1>
                <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto text-center">
                        <li class="nav-item active mr-1">
                            <a class="nav-link" href="index.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item  mr-1">
                            <a class="nav-link" href="about.php">about</a>
                        </li>

                        <li class="nav-item mr-1">
                            <a class="nav-link" href="gallery.php">Gallery</a>
                        </li>
                        
                        <li class="nav-item mr-1">
                            <a class="nav-link" href="contact.html">contact</a>
                        </li>
                        <li>
                            <a href="booking.php" class="w3ls-btn"> Book Shoot </a>
                        </li>
                    </ul>
                </div>

            </nav>
        </header>';
}


function  sendmessage($name,$email,$phone,$message){

    include 'db.php';

    $send = mysqli_query($conn,"INSERT INTO message (name,email,phone,message) VALUES ('$name','$email','$phone','$message') ");

    if ($send) {
      
        echo '<div class="mess" style="background-color:green;border-radius:10px;">
        <center><p style="color:#f1f1f1;">Message sent succesfully</p></center>
     </div>
     
     <script> 
     
        $("#name").val("");
        $("#email").val("");
        $("#phone").val("");
        $("#message").val("");
     
     </script>
     
     ';
    }
    else {
        echo '<div class="mess" style="background-color:red;border-radius:10px;">
        <center><p style="color:#f1f1f1;">Something wrong please try again</p></center>
     </div>';
    }
}


?>