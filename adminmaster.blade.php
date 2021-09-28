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
        font-size: 16px;
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
    <div class="row" style="background: skyblue;">
        <div calss="col-sm-12">
            <div class="col-sm-12" style="text-align: center;font-family: Lucida Calligraphy;color: white;">
                <h3>WELCOME IN ADMIN ZONE</h3>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="col-sm-2">
            <img src="../svnlogo.jpeg" style="hight: 300px;width: 100px"/>
        </div>
        <div class="col-sm-7" style="color: maroon; margin-right: 0px">
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
            <div class="container-fluid" style="background: skyblue">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="adashboard" id="menu">DASHBOARD</a></li>
                        <li><a href="addfaculty" id="menu">ADD FACULTY</a></li>
                        <li><a href="addtimetable" id="menu">ADD TIMETABLE</a></li>
                        <li><a href="addnotification" id="menu">ADD NOTIFICATION</a></li>
                        <li><a href="viewfacultydetails" id="menu">VIEW FACALTY DETAILS</a></li>
                        <li><a href="viewcomplain" id="menu">VIEW COMPLAIN</a></li>
                        <li><a href="viewcontactus" id="menu">VIEW CONTACTUS</a></li>
                        <li><a href="achangepassword" id="menu">CHANGE PASSWORD</a></li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="alogout" id="menu"><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a></li>
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