@extends('generalmaster')
@section('content')
   <div class="container-fluid" style="height: 400px;">
       <div class="row">
           <div class="col-sm-12" style="margin-bottom: 50px;">
               <div class="col-sm-3"></div>
               <div class="col-sm-6" style="border: 3px solid black;box-shadow: 5px 5px 2px 2px red;font-family: 'Times New Roman'">
                   <form action="logincode" method="post">
                   <h3 style="text-align: center">LOGIN HERE</h3>
                   <label style="font-size: 20px;margin-bottom:10px;color: maroon;">Login ID</label>
                   <input type="email" name="txtmail" placeholder="Enter Login ID"  class="form-control"/>
                       <label style="font-size: 20px;color: maroon;">Password </label>
                       <span id="sp" style="margin-left: 90%;cursor: pointer"onclick="Show()">Show</span><br/>
                       <input type="password" id="txtpass" placeholder="Enter Password"  class="form-control"/>
                       <input type="hidden" name="_token"value="{{csrf_token()}}">
                       <input type="submit" Value="Login" class="btn btn-danger" style="margin: 10px;text-align: center;"/>
                   </form>
               </div>
               <div class="col-sm-3"></div>
           </div>
       </div>
   </div>
   <script>
       function Show()
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
@endsection()