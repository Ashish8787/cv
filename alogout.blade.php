@extends('adminzone/adminmaster')
@section('content')
    <script>
        function show()
        {
            var s=document.getElementById("sp").innerText;
            if (s=="Show")


            {
                document.getElementById("txtpass").type="text";
                document.getElementById("sp").innerText="Hide";
            }
            if (s=="Hide")
            {
                document.getElementById("txtpass").type="password";
                document.getElementById("sp").innerText="Show";
            }
        }
    </script>
    <div class="container-fluid" style="height: 450px;">
        <div class="row">
            <div class="col-sm-12" style="margin-bottom: 50px;">
                <div class="col-sm-3"></div>
                <div class="col-sm-6" style="border: 2px solid black;box-shadow: 5px 5px 2px 2px teal;font-family: 'Times New Roman'">
                    <h3 style="text-align: center">LOGOUT HERE</h3>
                    <label style="font-size: 20px;margin-bottom:10px;color: black;">Login ID</label>
                    <input type="email" name="txtmail" placeholder="Enter Login ID"  class="form-control"/>
                    <label style="font-size: 20px;color: black;">Password </label>
                    <span id="sp" style="margin-left: 90%;cursor: pointer"onclick="show()">Show</span><br/>
                    <input type="password" id="txtpass" placeholder="Enter Password"  class="form-control"/>
                    <input type="submit" Value="LOGOUT" class="btn btn-success" style="margin: 10px;text-align: center;"/>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
    </div>

@endsection()