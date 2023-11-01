<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGO Web</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/asset/css/style2.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/asset/css/PageConfirm.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/asset/css/Donate.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@600&family=Corinthia:wght@700&family=Lobster&family=Saira+Condensed:wght@200&family=Ubuntu:ital@1&display=swap" rel="stylesheet">
    

</head>
<body>

        <div class="wrapper">
                   <nav class="navbar">
                        <img src="/ECM/application/asset/css/images/ECM Flogo.png" alt="" class="logo">
                     
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
                   <div class="registration" id="register">
                        <form action="#" method="post">
                            <h1 class="d-head1">Form Confirmation Page</h1>
                            <h4 class="d-head4">please confirm the details filled by you :</h4>
                            <table>
                                <tr>
                                    <td>Donation Type:</td>
                                    <td><?php echo $DonationType; ?></td>
                                </tr>
                                <tr>
                                    <td>Donated By:</td>
                                    <td><?php echo $Name; ?></td>
                                </tr>
                                <tr>
                                    <td>Mobile No:</td>
                                    <td><?php echo $Mobile; ?></td>
                                </tr>
                                <tr>
                                    <td>Email Id:</td>
                                    <td><?php echo $Email; ?></td>
                                </tr>
                                <tr>
                                    <td>Donation Amount:</td>
                                    <td><?php echo $Amount; ?></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><input type="checkbox" required>Are you sure want to pay?</td>
                                </tr>
                            </table>
                            
                           <div>
                           <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_KHfih5gDS4gXVY" async> </script> </form>
                           </div>
                    </div>

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
                    <a href="#"><img class="app-logo" src="/ECM/application/asset/css/images/Playstore1.png" alt=""></a>
                    <a href="#"><img class="app-logo" src="/ECM/application/asset/css/images/Applestore.png" alt=""></a>
                    <!-- <a href="#"><img class="app-logo" src="/IMAGES/Microsoft store.png" alt=""></a> -->
                   </div>
                </div>

                  <div class="ft21">
                     <h3 class="footer-heading">Our Social Media Links</h3>
                     <div class="social-media">
                          <a href="#"><img class="sm-links" src="/ECM/application/asset/css/images/fb.png" alt=""></a>
                          <a href="#"><img class="sm-links" src="/ECM/application/asset/css/images/Instagram_icon.png.webp" alt=""></a>
                          <a href="#"><img class="sm-links" src="/ECM/application/asset/css/images/linked in.png" alt=""></a>
                          <a href="#"><img class="sm-links" src="/ECM/application/asset/css/images/twitter1.png" alt=""></a>
                          
                     </div>
                  </div>

            </div>
                
            </div>

              <div class="end">
                     <p class="endpara">Content Copyright &copy; 1999-2022 ECM. All rights reserved.</p>

              </div>

        </footer>

       
    
</body>
</html>