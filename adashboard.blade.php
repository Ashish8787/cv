@extends('adminzone/adminmaster')
@section('content')
    <style>
        .dv{
            height: 200px;
            width: 400px;
            padding: 10px;

            margin-top: 5px;
            margin-bottom: 5px;
            box-shadow: 5px 5px 20px 20px skyblue;
            text-align: center;
            font-size: 35px;
            display: inline-block;
            border-radius: 8px;
        }
        .dv:hover{
            background: #5cb85c;
            color: white;
        }
    </style>
    <div class="container-fluid">
        <div class="row" style="margin: 50px;width: 100%">
            <div class="col-sm-12">
                <div class="col-sm-4 dv"><font><sapn class="glyphicon glyphicon-dashboard" style="font-size: 80px; margin-top: 20px;"></sapn></font><br/>
                    <a href="adashboard"type="mediya_type"><font color="white"><b>DASHBORD<b/></font></a>
                </div>
                <div class="col-sm-4 dv"><font><sapn class="fa fa-user-plus" style="font-size: 80px; margin-top: 20px;"></sapn></font><br/>
                    <a href="addfaculty" type="mediya_type"><font color="white"><b>ADD FACULTY<b/></font></a>
                </div>
                <div class="col-sm-4 dv"><font><sapn class="fa fa-table" style="font-size: 80px; margin-top: 20px;"></sapn></font><br/>
                    <a href="addtimetable" type="mediya_type"><font color="white"><b>ADD TIME TABLE<b/></font></a>
                </div>
            </div>
        </div>
        <div class="row" style="margin: 50px;width: 100%">
            <div class="col-sm-12">
                <div class="col-sm-4 dv"><font><sapn class="fa fa-bell-o" style="font-size: 80px; margin-top: 20px;"></sapn></font><br/>
                    <a href="addnotification" type="mediya_type"><font color="white"><b>ADD NOTIFICATION<b/></font></a>
                </div>
                <div class="col-sm-4 dv"><font><sapn class="fa fa-comment-o" style="font-size: 80px; margin-top: 20px;"></sapn></font><br/>
                    <a href="viewfacultydetails" type="mediya_type"><font color="white"><b>VIEW FACULTY DETAILS<b/></font></a>
                </div>
                <div class="col-sm-4 dv"><font><sapn class="fa fa-comment-o" style="font-size: 80px; margin-top: 20px;"></sapn></font><br/>
                    <a href="viewcomplain" type="mediya_type"><font color="white"><b>COMPLAIN<b/></font></a>
                </div>
            </div>
        </div>
        <div class="row" style="margin: 50px;width: 100%;">
            <div class="col-sm-12">
                <div class="col-sm-4 dv"><font><sapn class="fa fa-comment-o" style="font-size: 80px; margin-top: 20px;"></sapn></font><br/>
                    <a href="viewcomplain" type="mediya_type"><font color="white"><b>COMPLAIN<b/></font></a>
                </div>
                <div class="col-sm-3 dv"><font><sapn class="fa fa-key" style="font-size: 80px; margin-top: 20px;"></sapn></font><br/>
                    <a href="achangepassword" type="mediya_type"><font color="white"><b>CHANGE PASSWORD<b/></font></a>
                </div>
                <div class="col-sm-4 dv"><font><sapn class="fa fa-sign-out" style="font-size: 80px; margin-top: 20px;"></sapn></font><br/>
                    <a href="alogout" type="mediya_type"><font color="white"><b>LOG OUT<b/></font></a>
                </div>
            </div>
        </div>
    </div>
@endsection()