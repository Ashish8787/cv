@extends('generalmaster')
@section('content')
    <style>
        #img1{
            border: 2px solid black;
            box-shadow: 2px 2px 2px 2px grey;

        }


        #img1:hover {

            transform: scale(1.2);
            -ms-transform: scale(1.2);
            -webkit-transform: scale(1.2);

        }
    </style>
    <div class="container-fluid">
        <h2 style="text-align: center">Gallery</h2>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-4">
                    <img src="svn.jpeg" id="img1" class="img-rounded" style="height: 300px;width: 100%;"</img>/>
                </div>
                <div class="col-sm-4">
                    <img src="IMG20190905163706.jpg" id="img1" class="img-rounded" style="height: 300px;width: 100%;"</img>/>
                </div>
                <div class="col-sm-4">
                    <img src="IMG20200126094023.jpg" id="img1" class="img-rounded" style="height: 300px;width: 100%;"</img>/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-4">
                    <img src="img3.jpeg" id="img1" class="img-rounded" style="height: 300px;width: 100%;"</img>/>
                </div>
                <div class="col-sm-4">
                    <img src="collf.jpeg" id="img1" class="img-rounded" style="height: 300px;width: 100%;"</img>/>
                </div>
                <div class="col-sm-4">
                    <img src="ash1.jpeg" id="img1" class="img-rounded" style="height: 300px;width: 100%;"</img>/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-4">
                    <img src="collf2.jpeg" id="img1" class="img-rounded"  style="height: 300px;width: 100%;"</img>/>
                </div>
                <div class="col-sm-4">
                    <img src="IMG20200126095345.jpg" id="img1" class="img-rounded" style="height: 300px;width: 100%;"</img>/>
                </div>
                <div class="col-sm-4">
                    <img src="ash.jpeg" id="img1" class="img-rounded" style="height: 300px;width: 100%;"</img>/>
                </div>
            </div>
        </div>
    </div>

@endsection()