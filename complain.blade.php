@extends('facultyzone/facultymaster')
@section('content')
    <div class="container-fluid" style="min-height: 450px;">
        <div class="row text text-center" style="min-height: 50px;font-size: 30px; font-family: thomba;color: #080808; ">Complain</div>
        <div class="row">
            <div class="col-sm-12" style="margin-bottom: 50px;">


                    <div class="col-sm-2"></div>
                    <div class="col-sm-8"style="min-height: 300px; border: 3px solid grey;box-shadow: 5px 5px 5px 5px teal">
                        <div class="row">
                            <form action="complaincode" method="post">
                              <div class="col-sm-12" style="border: 2px solid grey">
                                <div class="col-sm-6" style="margin-bottom: 20px;" >
                                    <label style="font-size: 20px;color: black;font-family: thomba">Name</label>
                                    <input type="text" name="txtname" placeholder="Enter Your Name"  class="form-control"/>

                                    <label style="font-size: 20px;color: black;font-family: thomba">Email</label>
                                    <input type="email" name="txtmail" placeholder="Enter Your Email"  class="form-control"/>
                                    <label style="font-size: 20px;color: black;font-family: thomba">Mobile No</label>
                                    <input type="number" name="txtmob" placeholder="Enter Mobile No"  class="form-control"/>
                                    <label style="font-size: 20px;color: black;font-family: thomba">City</label>
                                    <input type="text" name="txtcity" placeholder="Enter City"  class="form-control"/>
                                </div>
                                <div class="col-sm-6" >
                                    <div class="form-group">
                                        <label for="comment" style="font-size: 20px;font-family: thomba">Comment</label>
                                        <textarea class="form-control" rows="5" id="comment"></textarea>
                                    </div>
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <input type="submit" Value="Submit" class="btn btn-success"/>
                                </div>
                              </div>
                            </form>
                        </div>
                    </div>
            </div>
               <div class="col-sm-2"></div>
        </div>
    </div>
@endsection()