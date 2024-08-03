<?php
require "connection.php";
?>
<!DOCTYPE html>
<html lang="en">


<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-F2XZ829NF0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-F2XZ829NF0');
</script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praveen Fernando</title>
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="images/praveen.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
</head>

<body class="text-white" style="background-color: rgb(24,28,39)">
    <div class="container-fluid mainBody">
        <div class="row">
            <div class="col-12 opacity-75">
                <div class="row">
                    <div class="col-10 col-lg-2 bg-primary" style="height: 55px;">
                        <img class="mylogo rounded m-2" src="images/pf1.png" style="width: 180px;" />
                    </div>

                    <div class="col-2 d-block bg-primary d-lg-none text-end pe-4 p-2" style="height: 55px;">
                        <i class="bi bi-menu-up fs-2" onclick="menuIconDisplay();" style="cursor: pointer;"></i>
                    </div>

                    <div class="col-10 d-none bg-primary d-lg-block text-end p-2 pe-4" style="height: 55px;">

                        <button onclick="skill()" class="btn btn-outline-danger text-white m-1" style="width:110px">My
                            Skills</button>
                        <button onclick="educationView()" class="btn btn-outline-danger text-white m-1"
                            style="width:115px">My
                            Projects</button>
                        <button onclick="contactMe()" class="btn btn-outline-danger text-white m-1"
                            style="width:110px">Contact
                            Me</button>

                    </div>

                    <div class="col-12 d-none" id="menuItems">
                        <div class="row text-end">
                            <button class="btn text-white mb" onclick="skill();disappear();">My Skills</button>
                            <button class="btn text-white mb" onclick="educationView();disappear();">My
                                Projects</button>
                            <button class="btn text-white mb" onclick="contactMe();disappear();">Contact Me</button>
                        </div>
                    </div>

                </div>
            </div>


            <div class=" col-lg-6 col-10 p-2 m-5">
                <h2 style="font-size: 60px;" class="text-white col-12">WEB DEVELOPER - Praveen Fernando
                </h2><br /><br />
                <label class="text-white col-12 fs-2">Hello there! I'm an experienced full stack developer specialized
                    in PHP
                    and
                    frameworks. I have
                    extensive experience in building reliable web, mobile and desktop applications.</label>
                <br /><br />
                <div class=" col-lg-5 rounded p-2 opacity-50">
                    <div class="row fs-4">
                        <div class="col-1 m-4 text-center">

                            <a target="blank" href="https://www.linkedin.com/in/praveen-fernando-675a7a259/"
                                class="form-label text-white" style="font-size: 13px;text-decoration:none;"><img
                                    src="images/linkedin.png" style="width:40px;cursor: pointer;" />linkedIn</a>
                        </div>
                        <div class="col-1 m-4 text-center">

                            <a target="blank" class="text-white" href="https://wa.me/+94764165971" for="whatsapp"> <img
                                    src="images/whatsapp.png" id="whatsapp" style="width:40px;cursor: pointer;" /><label
                                    class="form-label" style="font-size: 12px;cursor:pointer">whatsapp</label></a>
                        </div>
                        <div class="col-1 m-4 text-center">
                            <img src="images/FB.png" style="width:40px;cursor: pointer;" />
                            <label class="form-label" style="font-size: 12px;">facebook</label>
                        </div>
                        <div class="col-1 m-4 text-center">
                            <img src="images/messanger.png" style="width:40px;cursor: pointer;" />
                            <label class="form-label" style="font-size: 12px;">messanger</label>
                        </div>
                    </div>
                </div><br />
                <div class="row">
                    <button onclick="contactMe();" class="btn btn-danger col-5 col-lg-4">Contact Me</button>&nbsp;&nbsp;
                    <label onclick="seeResume();" class="btn btn-danger col-5 col-lg-4">Say 'Hi' to me</label>
                </div>
            </div>

            <!-- animation div -->
            <div class="col-lg-5 col-12 rounded-circle ml-5 m-0 pl-1 p-0 ps-5 pt-5">
                <!-- <video id="v1" autoplay muted class="col-12" src="video/v1.mp4" loop class="rounded" id="v1"></video> -->
                <img src="images/my.png" class="col-12 mt-2 d-none d-lg-block rounded-circle" style="width:30rem;" />
            </div>
            <!-- animation div -->

            <!-- message div -->
            <div class="col-12 d-none" id="messageDiv">
                <div class='col-12 text-end p-3'><i onclick='closeResume()' class='X bi bi-x-square-fill'></i></div>
                <div class='col-12 ps-3'><span class='form-label fs-2'>Send me something</span></div>
                <div class='col-12'>
                    <div class='row'>
                        <div class='col-8 offset-2 p-1'><span class='form-label'>You'r Name (not
                                compulsory)</span><br /><input type='text' class='form-control bg-dark text-white'
                                id="name" /></div>
                        <br />
                        <div class='col-8 offset-2 p-1'><span class='form-label'>Email (not
                                compulsory)</span><br /><input type='text' class='form-control bg-dark text-white'
                                id="email" /></div>
                        <br />
                        <div class='col-8 offset-2 p-1'><span class='form-label'>What's in you'r
                                mind*</span><br /><textarea type='text' id="message"
                                class='form-control bg-dark text-white' style='height:25vh;'></textarea></div>
                        <div class='col-12 p-3'><button id="sendMessage" onclick="sendMessage()"
                                class='btn btn-primary col-6 offset-3'>Send</button></div>
                    </div>
                </div>
            </div>
            <!-- message div -->

            <!-- scroll button -->
            <button onclick="scrollToTop()"
                class="btn btn-primary opacity-50 scrollButton col-1 offset-lg-11 offset-10 fixed-bottom mb-5"
                id="scrollButton"><img src="images/arrow-up.svg"/></button>
            <!-- scroll button -->

            <div class="col-12 myskills">
                <div class="row">

                    <!-- animation div -->
                    <div class="col-lg-6">
                        <!-- <video src="video/v2.mp4" class="col-12 d-none d-lg-block" autoplay muted loop></video> -->
                        <img src="images/a14.png" class="col-12 d-none d-lg-block" />
                    </div>
                    <!-- animation div -->

                    <div id="skills" class="p-5 offset-0 col-12 col-lg-6">
                        <h2 class="form-label" style="font-size:60px ;">My Skills</h2>
                        <span class="form-label fs-5" style="color: gray;">What I can do for you?</span>
                        <div class="row">
                            <div class="col-lg-2 col-4 text-center">
                                <img src="images/php.png" style="width: 60px;" />
                                <br /> <label class="form-label text-secondary">PHP</label>
                            </div>
                            <div class="col-lg-2 col-4 text-center">
                                <img src="images/js.png" style="width: 60px;" />
                                <br /> <label class="form-label text-secondary">JavaScript</label>
                            </div>
                            <div class="col-lg-2 col-4 text-center">
                                <img src="images/laravel.png" style="width: 60px;" />
                                <br /> <label class="form-label text-secondary">Laravel</label>
                            </div>
                            <div class="col-lg-2 col-4 text-center">
                                <img src="images/flutter.png" style="width: 60px;" />
                                <br /> <label class="form-label text-secondary">Flutter</label>
                            </div>
                            <div class="col-lg-2 col-4 text-center">
                                <img src="images/python.png" style="width: 60px;" />
                                <br /> <label class="form-label text-secondary">Python</label>
                            </div>
                            <div class="col-lg-2 col-4 text-center">
                                <img src="images/java_1.png" style="width: 60px;" />
                                <br /> <label class="form-label text-secondary">Java</label>
                            </div>
                            <div class="col-lg-2 col-4 text-center">
                                <img src="images/database.png" style="width: 60px;" />
                                <br /> <label class="form-label text-secondary">SQL</label>
                            </div>
                            <div class="col-lg-2 col-4 text-center">
                                <img src="images/bootstrap.png" style="width: 60px;" />
                                <br /> <label class="form-label text-secondary">Bootstrap</label>
                            </div>
                            <div class="col-lg-2 col-4 col-4 text-center">
                                <img src="images/html.png" style="width: 60px;" />
                                <br /> <label class="form-label text-secondary">HTML</label>
                            </div>
                            <div class="col-lg-2 col-4 col-4 text-center">
                                <img src="images/css.png" style="width: 60px;" />
                                <br /> <label class="form-label text-secondary">CSS</label>
                            </div>

                            <div class="col-12">
                                <br /><br /><br />
                                <label class="form-label text-secondary fs-3">- I develop highly interactive user
                                    interfaces for web
                                    and
                                    mobile applications.</label>
                                <label class="form-label text-secondary fs-3">- I have a lot of experience
                                    integrating
                                    third-party services such as Firebase and Stripe Payments into e-commerce
                                    websites
                                    and web services.</label>
                            </div>

                            <!-- animation div -->
                            <div class="col-lg-6 col-12">
                                <!-- <video src="video/v2.mp4" class="col-12 d-lg-none d-block" autoplay muted loop></video> -->
                                <img src="images/a14.png" class="col-12 d-lg-none d-block" />
                            </div>
                            <!-- animation div -->

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="row">
                    <div class="col-lg-6  m-lg-5 p-lg-2">
                        <h2 class="form-label" style="font-size:60px ;">Proficiency</h2>
                        <label class="form-label fs-3 pt-3 text-secondary">Responsive Designing</label><br />
                        <progress class="opacity-50 col-12 col-lg-10" value="100" max="100"
                            style="height: 40px;"></progress><br />
                        <label class="form-label fs-3 pt-3 text-secondary">Backend</label><br />
                        <progress class="opacity-50 col-12 col-lg-10" value="95" max="100"
                            style="height: 40px;"></progress><br />
                        <label class="form-label fs-3 pt-3 text-secondary">Frontend</label><br />
                        <progress class="opacity-50 col-12 col-lg-10" value="90" max="100"
                            style="height: 40px;"></progress><br />
                        <label class="form-label fs-3 pt-3 text-secondary">Mobile App Development</label><br />
                        <progress class="opacity-50 col-12 col-lg-10" value="85" max="100"
                            style="height: 40px;"></progress><br />
                        <label class="form-label fs-3 pt-3 text-secondary">Database Management</label><br />
                        <progress class="opacity-50 col-12 col-lg-10" value="88" max="100"
                            style="height: 40px;"></progress><br />
                        <label class="form-label fs-3 pt-3 text-secondary">Desktop Application
                            Development</label><br />
                        <progress class="opacity-50 col-12 col-lg-10" value="85" max="100"
                            style="height: 40px;"></progress><br />
                    </div>

                    <!-- animation div -->
                    <div class="col-lg-5 pt-lg-5 mt-lg-5">
                        <!-- <video class="mt-lg-5 col-12" src="video/v3.mp4" loop autoplay muted></video> -->
                        <img src="images/a13.png" class="col-12" />
                    </div>
                    <!-- animation div -->
                </div>
            </div>

            <div class="col-12">
                <div class="row">
                    <div class="col-10 ms-lg-5 p-lg-2">
                        <h2 class="form-label" style="font-size:60px ;">Education</h2>

                        <div class="col-12">
                            <div class="row">
                                <div class="col-lg-1 col-3 pt-2">
                                    <img src="images/birminghamcity1.png" width="110px" class="rounded-circle" />
                                </div>
                                <div class="col-lg-10 col-9 ps-5">
                                    <label class="form-label fs-1 opacity-50">Birmingham City University
                                        UK</label><br />
                                    <label class="form-label fs-4 opacity-50">BSc(Hons)Software Engineering
                                        Undergraduate</label>
                                    <ul class="fs-5 text-secondary opacity-50">
                                        <li>Partnership with Java Institute For Advanced Technology Sri Lanka</li>

                                    </ul>

                                </div>
                            </div>
                            <hr class="col-11" />
                        </div>

                        <div class="col-12">
                            <div class="row">
                                <div class="col-lg-1 col-3 pt-2">
                                    <img src="images/java_i.png" width="110px" class="rounded-circle" />
                                </div>
                                <div class="col-lg-10 col-9 ps-5">
                                    <label class="form-label fs-1 opacity-50">Java Institute For Advanced Technology
                                        Sri
                                        Lanka</label><br />
                                    <label class="form-label fs-4 opacity-50">Undergraduate Full Stack Software
                                        Engineer</label>
                                    <ul class="fs-5 text-secondary opacity-50">
                                        <li>Backend Development</li>
                                        <li>Frontend Development</li>
                                        <li>Database Management</li>
                                        <li>Object Oriented Programming Concept</li>
                                        <li>Desktop Application Development</li>
                                    </ul>

                                </div>
                            </div>
                            <hr class="col-11" />
                        </div>

                        <div class="col-12">
                            <div class="row">
                                <div class="col-lg-1 col-3 pt-2">
                                    <img src="images/sliit.jpeg" width="110px" class="rounded-circle" />
                                </div>
                                <div class="col-lg-10 col-9 ps-5">
                                    <label class="form-label fs-1 opacity-50">Sliit
                                        Sri
                                        Lanka</label><br />
                                    <label class="form-label fs-4 opacity-50">AI/ML
                                        Engineer Certificate</label>
                                    <ul class="fs-5 text-secondary opacity-50">
                                        <li>Computer Vision</li>
                                        <li>Machine Learning</li>
                                        <li>AI/ML Development</li>
                                    </ul>

                                </div>
                            </div>
                            <hr class="col-11" />
                        </div>

                        <div class="col-12">
                            <div class="row">
                                <div class="col-lg-1 col-3 pt-2">
                                    <img src="images/codecamp.jpeg" width="110px" class="rounded-circle" />
                                </div>
                                <div class="col-lg-10 col-9 ps-5">
                                    <label class="form-label fs-1 opacity-50">freeCodeCamp</label><br />
                                    <label class="form-label fs-4 opacity-50">Full Stack Certificate</label>
                                    <ul class="fs-5 text-secondary opacity-50">
                                        <li>Mobile App Development</li>
                                        <li>Flutter Framework</li>
                                        <li>Frontend Development</li>
                                        <li>Backend Development</li>
                                    </ul>

                                </div>
                            </div>
                            <hr class="col-11" />
                        </div>

                        <div class="col-12">
                            <div class="row">
                                <div class="col-lg-1 col-3 pt-2">
                                    <img src="images/uoc.png" width="110px" class="rounded-circle" />
                                </div>
                                <div class="col-lg-10 col-9 ps-5 m-2">
                                    <label class="form-label fs-1 opacity-50">University Of Colombo Sri
                                        Lanka</label><br />
                                    <label class="form-label fs-4 opacity-50">Undergraduate in Physical Science
                                        Stream</label>
                                    <ul class="fs-5 text-secondary opacity-50">
                                        <li>Statistics</li>
                                        <li>Computer Science</li>
                                        <li>Applied Mathematics</li>
                                        <li>Pure Mathematics</li>
                                    </ul>

                                </div>
                            </div>
                            <hr class="col-11" />
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12" id="projects">
                <div class="row">
                    <div class="col-lg-6 m-lg-5 p-lg-2">
                        <h2 class="form-label" style="font-size:60px ;">My Projects</h2>
                        <label class="form-label fs-3 opacity-50">There are some of my previous open source projects.
                            You can visit them by clicking on that particular project</label>

                        <!-- <div class="col-12 mt-3 border border-1 rounded p-1">
                            <div class="row">
                                <div class="col-lg-1 col-3 mt-2">
                                    <a target="blank" href="http://studiopraveen.rf.gd/?i=1"><img src="images/abcd.png"
                                            width="120px" class="rounded-circle" /></a>
                                </div>
                                <div class="col-lg-10 col-9 m-2 ps-5">
                                    <a target="blank" href="http://studiopraveen.rf.gd/?i=1"
                                        class="form-label fs-1 opacity-50 text-secondary"
                                        style="text-decoration: none;">Pixel Studio Web Site</label></a>
                                </div>
                            </div>
                        </div> -->

                        <br />

                        <div class="col-12  rounded p-1">
                            <div class="row">

                                <div class="col-lg-1 col-3">
                                    <a target="blank" href="#"><img
                                            src="images/git.png" width="80px" class="rounded-circle" /></a>
                                </div>
                                <div class="col-lg-10 col-9 m-2 pt-2 ps-5">

                                    <a target="blank" href="#"
                                        class="form-label fs-1 opacity-50 text-secondary"
                                        style="text-decoration: none;">GitHub</label></a>
                                </div>

                            </div>
                        </div>
                        <hr class="col-11" />
                    </div>
                    <!-- 
                        <div class="col-12 mt-3">
                            <div class="row">
                                <div class="col-lg-1 col-3">
                                    <a target="blank"
                                        href="https://matchallengetrophy2022.000webhostapp.com/#fbdad6"><img
                                            src="images/ac (2).png" width="110px" class="rounded-circle" /></a>
                                </div>
                                <div class="col-lg-10 col-9 m-2 pt-2 ps-5">

                                    <a target="blank" href="https://matchallengetrophy2022.000webhostapp.com/#fbdad6"
                                        class="form-label fs-1 opacity-50 text-secondary"
                                        style="text-decoration: none;">Online Live Video Calling System</label>

                                </div>
                            </div>
                            <hr class="col-11" />
                        </div> -->

                </div>
            </div>
        </div>
        <div class="row" id="contact">
            <div class="col-lg-6 m-lg-5 p-lg-2" id="contactMe">
                <h2 class="form-label" style="font-size:60px ;">Reach out to Me!</h2>
                <label class="form-label fs-3 opacity-50">DISCUSS A PROJECT OR JUST WANT TO SAY HI? MY INBOX IS
                    OPEN FOR
                    ALL.</label>
                <label class="form-label fs-3">"Full Stack Developer - Code addict - Made in Sri Lanka".</label>
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 p-4 ms-2">
                            <button onclick="seeResume();" class="btn btn-outline-info"><i class="bi bi-chat-fill"
                                    class="fs-2"></i>&nbsp;&nbsp;
                                &nbsp;<span class="form-label fs-4">
                                    Drop a message</label></button><br /><br />
                            <i class="bi bi-telephone"></i>&nbsp;&nbsp; <span class="form-label fs-4">
                                <a class="text-white" style="text-decoration: none;" href="tel:94764165971">(+94)
                                    764165971</a></span><br />
                            <i class="bi bi-envelope"></i>&nbsp;&nbsp; <label class="form-label fs-4"><a
                                    class="text-white" style="text-decoration: none;"
                                    href="mailto:wkapraveen@gmail.com">wkapraveen@gmail.com</a></label><br />
                            <i class="bi bi-geo-alt-fill"></i>&nbsp;&nbsp; <label class="form-label fs-4">Colombo,
                                Sri
                                Lanka</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-lg-5 m-lg-5 mb-2 text-center">
                <img src="images/praveen.png" class="col-12 rounded-circle" width="410px" />
            </div>
        </div>

        <div class="col-12 text-center text-secondary mb-3">
            <label class="form-label">&copy;2023 <b>Praveen Fernando</b> All Rights Received.</label>
        </div>

    </div>

    </div>
    </div>

    </div>

    <script src="script.js"></script>
    <script src="bootstrap.bundle.js"></script>
</body>

</html>