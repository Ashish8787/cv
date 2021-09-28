<html>
<head>
    <title>Faculty Analysis Portal</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/font-awesome.min.css" rel="stylesheet"/>
    <link herf="css/hover-min.css" rel="stylesheet"/>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        #menu{
            font-size: 20px;
            color: white;
            font-family: "Times New Roman";
        }
        #menu:hover{
            background: white;
            color: black;
        }
    </style>
</head>
<body>
<div class="container-fluid" style="padding-right: 0px;">
    <div class="row" style="background: brown;">
        <div calss="col-sm-12">
            <div class="col-sm-12" style="text-align: center;font-family: Lucida Calligraphy;color: white;">
                <h3> FACULTY ANALYSIS PORTAL</h3>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="col-sm-2">
            <img src="svnlogo.jpeg" style="hight: 300px;width: 100px"/>
        </div>
        <div class="col-sm-7" style="color: red; margin-right: 0px">
            <h1 style="font-size: 24px; font-family: 'Times New Roman'">Seth vishambhar Nath Institute of Education and Technology Barabanki U.P (225003)</h1>
            <h1 style="font-size: 22px; font-family: Aparajita">सेठ विशम्भर नाथ इंस्टिट्यूट ऑफ़ इंजीनियरिंग & टेक्नोलॉजी उत्तर प्रदेश(२२५००३)</h1>
        </div>
        <div class="col-sm-3">
            <span class="fa fa-whatsapp" style="font-size: 40px; color: #3c763d; margin-left: 20px; margin-top: 40px"></span>
            <span class="fa fa-facebook-square" style="font-size: 40px;color: #23527c;margin-left: 20px"></span>
            <span class="fa fa-instagram" style="font-size: 40px;color: #c9302c;margin-left: 20px"></span>
            <span class="fa fa-youtube" style="font-size: 40px;color: brown;margin-left: 20px"></span>
            <span class="fa fa-twitter" style="font-size: 40px;color: #2b669a;margin-left: 20px"></span>
            <span class="fa fa-map-marker" style="font-size: 40px;color: #337ab7;margin-left: 20px;"></span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12" style="padding: 0px">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid" style="background: brown">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="index" id="menu">HOME</a></li>
                        <li><a href="registration" id="menu">REGISTRATION</a></li>
                        <li><a href="gallery" id="menu">GALLERY</a></li>
                        <li><a href="event" id="menu">EVENTS</a></li>
                        <li><a href="facility" id="menu">FACILITY</a></li>
                        <li><a href="#faculties" id="menu">FACULTIES</a></li>
                        <li><a href="course" id="menu">COURSE</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="contactus" id="menu">CONTACT US</a></li>
                        <li><a href="login" id="menu"><span class="glyphicon glyphicon-log-in"></span> LOGIN</a></li>

                        </div>
                    </ul>
                </div>
              </div>
        </nav>
    </div>
</div>
<div class="row">
    @yield('content')
</div>
<div class="container-fluid">
 <div class="row">
    <div class="col-sm-12" style="height: 200px;width: 100%;background: #1b6d85;">
        <div class="col-sm-3">
            <img src="img2.jfif" style="width: 100%;height: 200px;padding: 0px">
        </div>
        <div class="col-sm-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.5776195307985!2d81.14116721532747!3d26.
            91689696638916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3999600b71b05c39%3A0x9727a290ec709cb8!2sSeth%20Vishambhar%20Nath%20Institute%
            20of%20Management%20Studies%26%20Research!5e0!3m2!1sen!2sin!4v1601435623018!5m2!1sen!2sin
            " width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="col-sm-3">
            <h3>Address :-</h3>
            S.V.N.Educational Campus Safedabad,<br/>
            Lucknow-Barabanki Highway-225003,<br/>
            Call : +91 9005004242, +91 9651064242<br/>
            Email : svn.edu.society@gmail.com<br/>
        </div>
        </div>
    </div>
</div>
</div>
</body>
</html>