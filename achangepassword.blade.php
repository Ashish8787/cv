@extends('adminzone/adminmaster')
@section('content')
    <div class="container-fluid" style="height: 500px;">
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-4"></div>
                <div class="col-sm-4" style="border: 2px solid black;box-shadow: 2px 2px 2px 2px teal;margin-bottom: 20px;margin-top20px;padding: 10px">
                    <label style="font-size: 20px;color: black;font-family: thomba">Old Password</label>
                    <input type="text" name="txtold" placeholder="Enter Old Password"  class="form-control"/>
                    <label style="font-size: 20px;color: black;font-family: thomba">New Password</label>
                    <input type="text" name="txtnew" placeholder="Enter New Password"  class="form-control"/>
                    <label style="font-size: 20px;color: black;font-family: thomba">Conform Password</label>
                    <input type="text" name="txtcon" placeholder="Enter Conform Password"  class="form-control"/>
                    <br/>
                    <input type="submit" Value="Save Change" class="btn btn-success"/>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
    </div>
@endsection()