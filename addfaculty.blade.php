@extends('adminzone/adminmaster')
@section('content')
    <div class="container-fluid" style="min-height: 400px;">
        <div class="row text text-center" style="min-height: 50px;font-size: 30px; font-family: thomba;color: black; "></div>
        <div class="row">
            <div class="col-sm-12" style="margin-bottom: 50px;">

                <div class="col-sm-2"></div>
                <div class="col-sm-8"style="min-height: 300px;box-shadow: 5px 5px 5px 5px lightblue">
                    <div class="row">
                        <form action="addfacultycode" method="post" enctype="multipart/form-data">
                            <div class="col-sm-12" style="border: 2px solid black">
                                <div class="col-sm-6" style="margin-bottom: 20px;" >
                                    <label style="font-size: 20px;color: black;font-family: thomba">Name</label>
                                    <input type="text" name="txtname" placeholder="Enter Your Name"  class="form-control"/>
                                    <label style="font-size: 20px;color: black;font-family: thomba">Date Of Birth</label>
                                    <input type="date" name="txtname" placeholder="Enter Your Name"  class="form-control"/>
                                    <label style="font-size: 20px;color: black;font-family: thomba">Father Name</label>
                                    <input type="text" name="txtfather" placeholder="Enter Your father Name"  class="form-control"/>
                                    <label style="font-size: 20px;color: black;font-family: thomba">Email</label>
                                    <input type="email" name="txtmail" placeholder="Enter Your Email"  class="form-control"/>
                                    <label style="font-size: 20px;color: black;font-family: thomba">Mobile No</label>
                                    <input type="number" name="txtmob" placeholder="Enter Mobile No"  class="form-control"/>
                                    <label style="font-size: 20px;color: black;font-family: thomba">City</label>
                                    <input type="text" name="txtcity" placeholder="Enter City"  class="form-control"/>
                                </div>
                                <div class="col-sm-6"style="margin-bottom: 20px" >
                                    <label style="font-size: 20px;color: black;font-family: thomba">Adhar No</label>
                                    <input type="text" name="txtadhar" placeholder="Enter Your Adhar No"  class="form-control"/>
                                    <label style="font-size: 20px;color: black;font-family: thomba">Upload Adhar</label>
                                    <input type="file" name="doc" class="form-control"/><br>
                                    <label style="font-size: 20px;color: black;font-family: thomba">Address</label>
                                    <input type="text" name="txtadd" placeholder="Enter Your Address"  class="form-control"/>
                                    <label style="font-size: 20px;color: black;font-family: thomba">Qualification</label>
                                    <input type="text" name="txtqua" placeholder="Enter Qualification"  class="form-control"/><br>

                                    <label style="font-size: 20px;color: black;font-family: thomba">Upload Photo</label>
                                    <input type="file" name="pic" class="form-control"/><br>
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <input type="submit" Value="Submit" class="btn btn-danger"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </div>
@endsection()