@extends('adminzone/adminmaster')
@section('content')
    <link href="../css/akash.css" rel="stylesheet">
    <script src="../css/akash1.js"></script>
    <script>
        $(document).ready(function () {
            $("#example").DataTable();
        })
    </script>
    <div class="container-fluid"style="height: 500px;width: 100%">
       <div class="row">
        <div class="col-sm-1"></div>
         <div class="col-sm-10">
            <h3 class="text text-center">Faculty Details</h3>
            <hr/>
            <table class="table table-responsive" id="example">
                <thead>
                <tr style="background: teal;color: white">
                    <th>Name</th>
                    <th>D.O.B</th>
                    <th>Father Name</th>
                    <th>Email</th>
                    <th>Mobile No</th>
                    <th>City</th>
                    <th>Adhar No</th>
                    <th>Upload Adhar</th>
                    <th>Address</th>
                    <th>Qualification</th>
                    <th>Image</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
         </div>
        <div class="col-sm-1"></div>
       </div>
    </div>
@endsection()