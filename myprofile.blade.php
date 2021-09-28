@extends('facultyzone/facultymaster')
@section('content')
    <div class="container-fluid" style="height: 450px">
    <form action="#" method="post">
        <div class="col-sm-12">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <input type="text" class="form-control" readonly name="txtmail" style="margin-top: 10px;"\>
                <input type="text" class="form-control" readonly name="txtname" style="margin-top: 10px;"\>
                <input type="text" class="form-control" readonly name="fname" style="margin-top: 10px;"\>
                <input type="text" class="form-control" readonly name="txtmob" style="margin-top: 10px;"\>
                <input type="text" class="form-control" readonly name="txtbranch" style="margin-top: 10px;"\>
                <br/>
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <input type="submit" class="btn btn-success" value="Upload Profile"/>
            </div>
            <div class="col-sm-40"></div>
        </div>
    </form>
    </div>
@endsection()