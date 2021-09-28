<html>
<head>
    <link href="../css/bootstrap.min.css" rel="stylesheet"/>
    <link href="../css/font-awesome.min.css" rel="stylesheet"/>
    <link herf="../css/hover-min.css" rel="stylesheet"/>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>

</head>
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
    <div class="row" style="background: teal;">
        <div calss="col-sm-12">
            <div class="col-sm-12" style="text-align: center;font-family: Lucida Calligraphy;color: white;">
                <h3>WELCOME IN FACULTY ZONE</h3>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="col-sm-2">
            <img src="../svnlogo.jpeg" style="hight: 300px;width: 100px"/>
        </div>
        <div class="col-sm-7" style="color: green; margin-right: 0px">
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
            <div class="container-fluid" style="background: teal">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="dashboard" id="menu">DASHBOARD</a></li>
                        <li><a href="timetable" id="menu">TIMETABLE</a></li>
                        <li><a href="myprofile" id="menu">MY PROFILE</a></li>
                        <li><a href="notification" id="menu">SHOW NOTIFICATION</a></li>
                        <li><a href="changepassword" id="menu">CHANGE PASSWORD</a></li>
                        <li><a href="complain" id="menu">COMPLAIN</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="logout" id="menu"><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<div class="row">
    @yield('content')
</div>
<div class="row">
    <div class="col-sm-12" style="background: black;color: white;text-align: center">
        Copyright©Arcane progamming infotech
    </div>
</div>
</body>
</html>