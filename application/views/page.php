<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page-flexbox</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/asset/css/page.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/asset/css/model.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@600&family=Corinthia:wght@700&family=Lobster&family=Saira+Condensed:wght@200&family=Ubuntu:ital@1&display=swap"
        rel="stylesheet">

</head>

<body>

    <div class="wrapper">
        <nav class="navbar">
            <img src="/IMAGES/ECM Flogo.png" alt="" class="logo">

            <ul>
            <li><a href="<?php echo base_url(); ?>index.php/Welcome">Home</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/AboutUs">About</a></li>                          
                            <li><a href="<?php echo base_url(); ?>index.php/Events">Events</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/Page">Pages</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/BlogPage">Blogs</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/ContactPage">Contact</a></li>
                            <li><a class="active" href="<?php echo base_url(); ?>index.php/Donation">Donate Now</a></li>
            </ul>
        </nav>

        <!-- Flex-table  -->
        <div id="heading">
            <p><strong>Pages & Articles</strong></p>
        </div>

        <div id="flex-container">

            <!--Charity-->
            <div class="flipbox">
                <div class="flipbox-inner">
                    <div class="flipbox-front">
                        <a href="#charity"><img src="/ECM/application/asset/css/images/images (3).jpeg" alt="picture" class="img-radius"></a>
                        <div>
                            <p class="over-text">Skill Development</p>
                        </div>
                    </div>
                    
                </div>
            </div>

            <!--Donation-->
            <div class="flipbox">
                <div class="flipbox-inner">
                    <div class="flipbox-front">
                        <a href="#Donation"><img src="/ECM/application/asset/css/images/pages4.jpg" alt="picture" class="img-radius"></a>
                        <div>
                            <p class="over-text">Disaster Aid</p>
                        </div>
                    </div>
        
                </div>
            </div>

            <!-- helping the needy-->
            <div class="flipbox">
                <div class="flipbox-inner">
                    <div class="flipbox-front">
                        <a href="#Helping"><img src="/ECM/application/asset/css/images/images (5).jpeg" alt="picture" class="img-radius"></a>
                        <div>
                            <p class="over-text">Women Empowernment</p>
                        </div>
                    </div>
                    
                </div>
            </div>

            <!--medical camp-->
            <div class="flipbox">
                <div class="flipbox-inner">
                    <div class="flipbox-front">
                        <a href="#Medical"><img src="/ECM/application/asset/css/images/pages1.jpg" alt="picture" class="img-radius"></a>
                        <div>
                            <p class="over-text">Food & Supplies</p>
                        </div>
                    </div>
                   
                </div>
            </div>

            <!--Educational camp-->
            <div class="flipbox">
                <div class="flipbox-inner">
                    <div class="flipbox-front">
                        <a href="#Educational"><img src="/ECM/application/asset/css/images/pages2.jpg" alt="picture" class="img-radius"></a>
                        <div>
                            <p class="over-text">Feeding the Hungry</p>
                        </div>
                    </div>
                    
                </div>
            </div>

            <!--Food and supplies-->
            <div class="flipbox">
                <div class="flipbox-inner">
                    <div class="flipbox-front">
                        <a href="#Food"><img src="/ECM/application/asset/css/images/pages3.jpg" alt="picture" class="img-radius"></a>
                        <div>
                            <p class="over-text">Medical Aid</p>
                        </div>
                    </div>
                   
                </div>
            </div>

        </div>


        <!-- modal box -->

        <div id="charity" class="modal-window">
            <div>
                <a href="#modal-close" title="Close" class="modal-close">close &times;</a>
                <h1>Skill development</h1>
                <div>We have worked extensively for more than three 3 decades to reach out and rehabilitate students
                    from underprivileged sections of the society to provide them a better future for themselves and to
                    be an asset for the nation......
                    charities in the Aasha (ngo) make a difference to millions of lives here and around the world. They
                    play a vital role in our society, and we all benefit.
                    The organization started 3 decades ago with a vision to serve the needy and cure the helpless poor
                    sections of the society through a better education for their children, better health care facilities
                    free corrective surgeries with a will to fight a battle with Polio and other related birth
                    disabilities. An internationally renowned center with more than 12 specialized hospitals, 1100+
                    beds, food for 4500+ people every day; the organisation has become more like a family and home to
                    all the people and their visitors.</div>
            </div>
        </div>

        <div id="Donation" class="modal-window">
            <div>
                <a href="#modal-close" title="Close" class="modal-close">close &times;</a>
                <h1>Disaster Aid</h1>
                <div>Givng is not just about make a donation , it's about making a difference...
                    You can help a child escape from the bonds of poverty through our donation system. It let's you gift
                    life-changing benefits to that child for a low monthly and yearly contribution. Your donation will
                    ensure that the child receives education, healthcare as well as nutritional support through every
                    phase
                    of his/her young life.
                    We are an organization that helps the people and children from the poor sections of the society to
                    realize their hopes, dreams, and ambitions and help those who need just a little extra support. So
                    far,
                    Our organization and its tireless team with the noble reverences have helped over 928879 individuals
                    for
                    their free of cost medical treatments and we don't intend to stop. Apart from health care
                    facilities, we
                    also provide free of cost education to children from tribal belts and vocational training programs
                    in
                    employable skills for differently-abled & needy adults.
                    Your small donation makes a lot of difference. .
                    Get in touch with our donation advisors to set your charitable goals today.</div>
            </div>
        </div>

        <div id="Helping" class="modal-window">
            <div>
                <a href="#modal-close" title="Close" class="modal-close">close &times;</a>
                <h1>Women Empowernment</h1>
                <div>Our Foundation recognizes the challenges of the underprivileged to access primary healthcare.
                    We therefore organize free multispecialty health camps across geographies which includes a thorough
                    check up by a doctor, distribution of free medicines along with specialized tests namely BP, Blood
                    Sugar
                    and Haemoglobin(Hb) monitoring. These timely interventions provide early diagnosis and treatment
                    reducing the incidence of morbidity and mortality
                    Our organization and its tireless team with the noble reverences have helped over 928879 individuals
                    for
                    their free of cost medical treatments.
                    We work to provide them better health care facilities free corrective surgeries with a will to fight
                    a
                    battle with Polio and other related birth disabilities. An internationally renowned center with more
                    than 12 specialized hospitals, 1100+ beds, food for 4500+ people every day.
                    Your donation helps in training more medical staff for treating people and provide them a better
                    future...</div>
            </div>
        </div>

        <div id="Medical" class="modal-window">
            <div>
                <a href="#modal-close" title="Close" class="modal-close">close &times;</a>
                <h1>Food & Supplies</h1>
                <div>Our Foundation recognizes the challenges of the underprivileged to access primary healthcare.
                    We therefore organize free multispecialty health camps across geographies which includes a thorough
                    check up by a doctor, distribution of free medicines along with specialized tests namely BP, Blood
                    Sugar
                    and Haemoglobin(Hb) monitoring. These timely interventions provide early diagnosis and treatment
                    reducing the incidence of morbidity and mortality
                    Our organization and its tireless team with the noble reverences have helped over 928879 individuals
                    for
                    their free of cost medical treatments.
                    We work to provide them better health care facilities free corrective surgeries with a will to fight
                    a
                    battle with Polio and other related birth disabilities. An internationally renowned center with more
                    than 12 specialized hospitals, 1100+ beds, food for 4500+ people every day.
                    Your donation helps in training more medical staff for treating people and provide them a better
                    future...</div>
            </div>
        </div>

        <div id="Educational" class="modal-window">
            <div>
                <a href="#modal-close" title="Close" class="modal-close">close &times;</a>
                <h1>Feeding the Hungry</h1>
                <div>Education is both the means as well as the end to a better life; means, because it empowers an
                    individual to earn his/her livelihood and the end because it increases one's awareness on a range of
                    issues – from healthcare to appropriate social behavior to understanding one's rights, and in the
                    process evolve as a better citizen.
                    Our Foundation's programme which works for education for underprivileged children who are under
                    difficult circumstances, such as child labour, children of poorest of the parents, children
                    inflicted
                    and affected with HIV/AIDS, street and runaway children, children with rare disabilities, disaster
                    struck children and slum children.
                    We offer children a chance to learn 5 activities along with the educational studies - Mandala art,
                    Bollywood Dance, semi-classical dance, self defense (Krav Maga) and Vocal music through trained
                    mentors.
                    Since its inception in 2016, more than 250,000 underprivileged children have directly benefitted
                    from
                    the Mission Education programme.
                    Government through its Right to Education Act, 2009 have been making its way in enrolling and
                    retaining
                    children in school especially from the marginalized sector.</div>
            </div>
        </div>

        <div id="Food" class="modal-window">
            <div>
                <a href="#modal-close" title="Close" class="modal-close">close &times;</a>
                <h1>Medical Aid</h1>
                <div>Ever since its inception, the organisation has been working relentlessly to provide, social and
                    economic aid to communities in the lower rungs of the society with a special focus on
                    underprivileged
                    kids...
                    Our Foundation has taken the initiative to provide dry rations, sanitation kits, hygiene and
                    essential
                    kits to those who are affected and in need..
                    Every year from the month of October till January we run our share and care campaign, providing
                    winter
                    cloths, woolens and blankets to underprivileged patients in Government hospitals, people living in
                    open
                    on streets and night shelters in Delhi NCR and major part of Other parts of India.
                    We design interventions to ensure reliable meals for children in underserved communities where food
                    can
                    act as an incentive to education and skill development.
                    We support Slum Schools, Skill Development centres, Creches, Community Development Centres and Child
                    Shelter Homes. The organisation is helping deprived children get a chance at a fulfilling childhood
                    by
                    providing them quality learning opportunities, access to healthcare, protection from abuse and harm
                    and
                    relief and rehabilitation during disasters and emergencies
                    Ever since its inception, the organisation has been working relentlessly to provide, social and
                    economic
                    aid to communities in the lower rungs of the society with a special focus on underprivileged kids...
                </div>
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
                        <a href="#"><img class="app-logo" src="/IMAGES/Playstore1.png" alt=""></a>
                        <a href="#"><img class="app-logo" src="/IMAGES/Applestore.png" alt=""></a>
                        <!-- <a href="#"><img class="app-logo" src="/IMAGES/Microsoft store.png" alt=""></a> -->
                    </div>
                </div>

                <div class="ft21">
                    <h3 class="footer-heading">Our Social Media Links</h3>
                    <div class="social-media">
                        <a href="#"><img class="sm-links" src="/IMAGES/fb.png" alt=""></a>
                        <a href="#"><img class="sm-links" src="/IMAGES/Instagram_icon.png.webp" alt=""></a>
                        <a href="#"><img class="sm-links" src="/IMAGES/linked in.png" alt=""></a>
                        <a href="#"><img class="sm-links" src="/IMAGES/twitter1.png" alt=""></a>

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