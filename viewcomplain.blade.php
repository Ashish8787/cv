@extends('adminzone/adminmaster')
@section('content')
    <link href="../css/akash.css" rel="stylesheet">
    <script src="../css/akash1.js"></script>
    <script>
        $(document).ready(function () {
            $("#example").DataTable();
        })
    </script>
    <div class="container-fluid"style="height: 450px;width: 100%">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <h3 class="text text-center">Complain Details</h3>
            <hr/>
            <table class="table table-responsive" id="example">
                <thead>
                <tr style="background: teal;color: white">
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile No</th>
                    <th>City</th>
                    <th>Massage</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
        <div class="col-sm-2"></div>

    </div>
    </div>

@endsection()