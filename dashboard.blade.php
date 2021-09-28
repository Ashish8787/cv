@extends('facultyzone/facultymaster')
@section('content')
    <style>
        .dv{
            height: 200px;
            width: 400px;
            padding: 10px;

            margin-top: 5px;
            margin-bottom: 5px;
            box-shadow: 5px 5px 20px 20px teal;
            text-align: center;
            font-size: 35px;
            display: inline-block;
            border-radius: 8px;
        }
        .dv:hover{
            background: lightgreen;
            color: white;
        }
    </style>
    <div class="container-fluid">
        <div class="row" style="margin: 50px;">
            <div class="col-sm-12">
                <div class="col-sm-4 dv"><font><sapn class="glyphicon glyphicon-dashboard" style="font-size: 110px; margin-top: 20px;"></sapn></font><br/>
                    <a href="dashboard" type="mediya_type"><font color="white"><b>DASHBORD<b/></font></a>
                </div>
                <div class="col-sm-4 dv"><font><sapn class="fa fa-table" style="font-size: 110px; margin-top: 20px;"></sapn></font><br/>
                    <a href="timetable" type="mediya_type"><font color="white"><b>TIME TABLE<b/></font></a>
                </div>
                <div class="col-sm-4 dv"><font><sapn class="fa fa-user" style="font-size: 110px; margin-top: 20px;"></sapn></font><br/>
                    <a href="My_profile" type="mediya_type"><font color="white"><b>MY PROFILE<b/></font></a>
                </div>
            </div>
        </div>
        <div class="row" style="margin: 50px">
            <div class="col-sm-12">
                <div class="col-sm-4 dv"><font><sapn class="fa fa-bell-o" style="font-size: 110px; margin-top: 20px;"></sapn></font><br/>
                    <a href="notification" type="mediya_type"><font color="white"><b>SHOW NOTIFICATION<b/></font></a>
                </div>
                <div class="col-sm-3 dv"><font><sapn class="fa fa-key" style="font-size: 110px; margin-top: 20px;"></sapn></font><br/>
                    <a href="changepassword" type="mediya_type"><font color="white"><b>CHANGE PASSWORD<b/></font></a>
                </div>
                <div class="col-sm-4 dv"><font><sapn class="fa fa-comment-o" style="font-size: 110px; margin-top: 20px;"></sapn></font><br/>
                    <a href="complain" type="mediya_type"><font color="white"><b>COMPLAIN<b/></font></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-4"></div>
                <div class="col-sm-4 dv"><font><sapn class="fa fa-sign-out" style="font-size: 110px; margin-top: 20px;"></sapn></font><br/>
                    <a href="logout" type="mediya_type"><font color="white"><b>LOG OUT<b/></font></a>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
@endsection()