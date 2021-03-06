<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <script src="bootstrap/js/jquery-3.3.1.min.js "></script>
    <script src="bootstrap/js/bootstrap.min.js "></script>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/style.css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="bgr_contact">
    <div class="container-fluid">
        <!-- HEADER -->
        <!-- MENU -->
        <?php
            require_once "header.php";
        ?>
        <!-- END MENU -->
        <!-- END HEADER -->
        <br>
        <!-- BODY -->
        <!-- CONTACT -->
        <section class="section-contact">
            <div class="container">
                <div class="contact">
                    <div class="row">
                        <div class="col-md-6 col-lg-5">
                            <div class="text">
                                <h2>Contact</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                    make a type specimen book. It has survived not only five centuries.</p>
                                <ul>
                                    <li><i class=" fa fa fa-location-arrow"></i> <a href="https://www.google.com/maps/place/99+T%C3%B4+Hi%E1%BA%BFn+Th%C3%A0nh,+Ph%C6%B0%E1%BB%9Bc+M%E1%BB%B9,+S%C6%A1n+Tr%C3%A0,+%C4%90%C3%A0+N%E1%BA%B5ng+550000,+Vi%E1%BB%87t+Nam/@16.059758,108.2414633,17z/data=!3m1!4b1!4m5!3m4!1s0x3142177f2ced6d8b:0xeac35f2960ca74a4!8m2!3d16.0597966!4d108.2434978?hl=vi-VN">99 To Hien Thanh, Da Nang, Vietnam</a></li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i> <a href="#">(+84) 337 965 469</a></li>
                                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="#">hktqueen@gmail.vn</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-lg-offset-1">
                            <div class="contact-form">
                                <form action="send_mail_contact.php" method="post">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" class="field-text" name="name" placeholder="Name">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="field-text" name="email" placeholder="Email">
                                        </div>
                                        <div class="col-sm-12">
                                            <input type="text" class="field-text" name="subject" placeholder="Subject">
                                        </div>
                                        <div class="col-sm-12">
                                            <textarea cols="30" rows="10" name="message" class="field-textarea" placeholder="Write what do you want"></textarea>
                                        </div>
                                        <div class="col-sm-6">
                                            <button type="button" class="btn btn-room">SEND</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / CONTACT -->
        <!-- END BODY -->

        <!-- FOOTER -->
        <div style="background-size:0vmax; background-color:#232323; color: #fff; " class="footer">
            <div class="container">
                <div class="row2">
                    <div class="col-5">
                        <p>
                            <h5>CONTACT</h5>
                        </p>
                        <hr>
                        <p>
                            Hotline:
                            <a href="# ">0396 567 451</a>
                        </p>
                        <p>
                            Email:
                            <a href="# ">hktqueenhotel@gmail.com</a>
                        </p>
                        <p>
                            Address:
                            <a href="https://www.google.com/maps/place/99+T%C3%B4+Hi%E1%BA%BFn+Th%C3%A0nh,+Ph%C6%B0%E1%BB%9Bc+M%E1%BB%B9,+S%C6%A1n+Tr%C3%A0,+%C4%90%C3%A0+N%E1%BA%B5ng+550000,+Vi%E1%BB%87t+Nam/@16.059758,108.2414633,17z/data=!3m1!4b1!4m5!3m4!1s0x3142177f2ced6d8b:0xeac35f2960ca74a4!8m2!3d16.0597966!4d108.2434978?hl=vi-VN"> 99 To Hien Thanh, Da Nang, Vietnam</a>
                        </p>
                        <p>
                            <a href="https://www.facebook.com/"><i class="fa fa-facebook-f"></i></a>
                            <a href="https://twitter.com/"><i class="fa fa-twitter-square"></i></a>
                            <a href="https://google.com/"><i class="fa fa-google-plus"></i></a>
                            <a href="https://instagram.com/"><i class="fa fa-instagram" style="background-color: none;"></i></a>
                        </p>
                    </div>
                    <div class="col-2">
                        <p>
                            <h5>SUPPORT</h5>
                        </p>
                        <hr>
                        <p>
                            <a href="#">Support</a>
                        </p>
                        <p>
                            <a href="#">Contribute</a>
                        </p>
                    </div>
                    <div class="col-5">
                        <p>
                            <h5>FOLLOW US</h5>
                        </p>
                        <hr>
                        <p>
                            Enter email to subscribe to receive useful information about learning from HKT Queen Hotel
                        </p>
                        <input type="email" name="" id=" " placeholder="Your email... " class="form-control ">
                        <br>
                        <button type="button" class="btn btn-secondary ">Registation</button>
                    </div>
                </div>

            </div>
        </div>
        <!-- END FOOTER -->
    </div>
</body>

</html>