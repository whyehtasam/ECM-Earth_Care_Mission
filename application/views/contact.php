<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@600&family=Corinthia:wght@700&family=Lobster&family=Saira+Condensed:wght@200&family=Ubuntu:ital@1&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/asset/css/style2.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/asset/css/contact.css">
    <title>Contact</title>
</head>

<body>
    <div class="wrapper">
        <nav class="navbar">
            <img src="/ECM/application/asset/css/IMAGES/ECM Flogo.png" alt="Website logo" class="logo">

            <ul>
            <li><a href="<?php echo base_url(); ?>index.php/Welcome">Home</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/AboutUs">About</a></li>                          
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Pages</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/BlogPage">Blogs</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/ContactPage">Contact</a></li>
                            <li><a class="active" href="<?php echo base_url(); ?>index.php/Donation">Donate Now</a></li>
            </ul>
        </nav>
        <section>
            <div class="box" id="box1">
                <!-- <img src="IMAGES/human.jpg" height="50%" class="img"> -->
                <div class="text">
                    <!-- https://www.maps.ie/create-google-map/ -->
                    <div class="info"><br>
                        <pre><u><i class="fa fa-envelope" aria-hidden="true" style="font-size:30px; color: rgb(50, 50, 157);"></i></u><a href="" style="text-decoration:none;color: white;">   abc@gmail.com</a></pre>
                    </div>
                    <div class="info"><br>
                        <pre><u><i class="fa fa-phone" aria-hidden="true" style="font-size:30px; color:rgb(50, 50, 157);"></i></u>   +91 8512889003</pre>
                    </div><br>
                </div>
                <div class="map" style="width: 100%; text-align: center;"><iframe width="95%" height="300px"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                        src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Gate%20No,%2013,%20Maulana%20Mohammad%20Ali%20Jauhar%20Marg,%20Jamia%20Millia%20Islamia,%20Jamia%20Nagar,%20Okhla,%20New%20Delhi,%20Delhi%20110025+(ECM%20NGO%20office)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                        <a href="https://www.maps.ie/distance-area-calculator.html">area maps</a></iframe>
                </div>

            </div>
            <div class="box" id="box2">
                <h5 style="font-size: 15px; color: rgb(117, 224, 210);">HAVE ANY QUESTION?<h5>
                        <h1 style="font-size: 30px;">Leave us a Message!</h1>
                        <h5 style="font-size: 15px; color: rgb(117, 224, 210); text-decoration: underline;">Feel Free to
                            Listen from us<h5>
                                <form id="myForm" action="#" style="font-size: 20px;">
                                    <div class="name">
                                        <p><input class="info2" type="text" name="name" placeholder="  First name"></p>
                                        <p><input class="info2" type="text" name="name" placeholder="  Last name"></p>
                                    </div>
                                    <div class="contact">
                                        <p><input class="info2" type="email" name="email" placeholder="  E-mail"></p>
                                        <p><input class="info2" type="text" name="phone_no"
                                                placeholder="  Contact No"><br></p>
                                    </div>
                                    <p><textarea class="subject" placeholder="  Subject"></textarea><br></p>
                                    <p><textarea placeholder="  Write your Query here!"></textarea><br></p>
                                    <div class="submit">
                                        <p><input class="btnn" class="button" type="reset" value="RESET"
                                                onclick="fun()"></p>
                                        <p><input class="btnn" type="submit" value="SUBMIT"></p>
                                    </div>
                                </form>
            </div>
        </section>
<!-- 
        <footer>
            <div class="foot">
                <p> Copyright &copy; NGO-2004</p>
            </div>
        </footer> -->
        <footer>
        
            <div class="foot1">
                <div class="ft11">
                    <h3 class="footer-heading">USEFUL LINKS</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="About2.html">About</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Pages</a></li>
                        <li><a href="#">Blogs</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a class="active" href="#">Donate Now</a></li>
                    </ul>    
                </div>

                <div class="ft11">
                    <h3 class="footer-heading">CONTACT INFORMATION</h3>
                    <p class="footer-para1">
                        R-154,ECM Office,
                        <br>
                        Nafees Road,Batla House,
                        <br>
                        Okhla,
                        <br>
                        New Delhi-110025,India
                        <br>
                        Main phone number
                        <br>
                        416-929-9614(for local calls)
                        <br> 
                        1-800-416-5111 Monday to Friday <br> from 9 a.m. 5 p.m.
                        <br>
                        Email: ecmgroup@gmail.com
                    </p>
                </div>

                <div class="ft11">
                    <h3 class="footer-heading">HELP AND SUPPORT</h3>
                    
                    <ul>
                        <li><a href="#">24X7 Live Help</a></li>
                        <li> <a href="#">Feedback</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li> <a href="#">FAQs</a></li>
                    </ul>

                </div>
            </div>


            <hr>

            <div class="foot2">

                <div class="ft21">
                <h3 class="footer-heading">DOWNLOAD OUR MOBILE APPS</h3>
                   <div class="app">
                    <a href="#"><img class="app-logo" src="/ECM/application/asset/css/IMAGES/Playstore1.png" alt=""></a>
                    <a href="#"><img class="app-logo" src="/ECM/application/asset/css/IMAGES/Applestore.png" alt=""></a>
                    <!-- <a href="#"><img class="app-logo" src="/IMAGES/Microsoft store.png" alt=""></a> -->
                   </div>
                </div>

                  <div class="ft21">
                     <h3 class="footer-heading">Our Social Media Links</h3>
                     <div class="social-media">
                          <a href="#"><img class="sm-links" src="/ECM/application/asset/css/IMAGES/fb.png" alt=""></a>
                          <a href="#"><img class="sm-links" src="/ECM/application/asset/css/IMAGES/Instagram_icon.png.webp" alt=""></a>
                          <a href="#"><img class="sm-links" src="/ECM/application/asset/css/IMAGES/linked in.png" alt=""></a>
                          <a href="#"><img class="sm-links" src="/ECM/application/asset/css/IMAGES/twitter1.png" alt=""></a>
                          
                     </div>
                  </div>

            </div>
                
            </div>

            <div class="end">
				 <p class="endpara">Content Copyright &copy; 1999-2022 ECM. All rights reserved.</p>

		  </div>

        </footer>
    </div>
    <script>
        function fun() {
            document.getElementById("myForm").reset();
        }   
    </script>
</body>

</html>