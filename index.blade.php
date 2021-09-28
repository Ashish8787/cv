@extends('generalmaster')
@section('content')
    <style>
        #img1{
            border: 2px solid black;
            box-shadow: 2px 2px 2px 2px grey;
            margin-bottom: 50px;
        }
    </style>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12" style="padding: 0px;margin-top: 0px;">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="slide1svn.jpg"style="height:450px;width:100%;padding-top: 0px;margin-top: 0px">
                        <div class="carousel-caption">

                        </div>
                    </div>
                    <div class="item">
                        <img src="slide2svn.jpg" style="height:450px;width:100%;padding-top: 0px">
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="item">
                        <img src="img.jpeg" style="height:450px;width:100%;">
                        <div class="carousel-caption">
                        </div>
                    </div>
                </div>


                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
      </div>
        <div class="row">
            <div class="col-sm-12">
                <h1 style="padding-left: 20px;text-align: center;font-family: 'Times New Roman';font-size: 40px;color: #761c19">Welcome in SVNIET</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-4" style="margin-top: 20px;">
                    <img src="svn.jpeg" id="img1" class="img-rounded" style="height: 300px;width: 100%;"></img>
                </div>
                <div class="col-sm-6" style="padding-top: 40px;">
                    <p>SVN has emerged as a centre of excellence of higher education in Uttar Pradesh.
                        This college has started carving a position for itself in the education domain and is rising as a shining
                        star on the horizon of quality education. SVN has a multi-disciplinary approach and offers courses in various
                        streams encompassing Engineering, Management, Pharmacy, Polytechnic and Diploma in Elementary Education.
                    </p>
                    <p>The prime objective of SVN is to provide a world class learning environment to roll out efficient
                        human resources for the needs of industries, in which faculty, staff and students can discover,
                        examine critically preserve and transmit the knowledge,wisdom and values that will ensure the survival
                        of future generations and improve the quality of life for all.
                    </p>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">

                <div class="col-sm-8">
                    <p>Sports are good for any nation.Various games are played in India.India has excelled in few games and failed in
                        various other games.Our individual performances are outstanding in some games but lack of team work can be seen at various sports.Proper sports policy could have helped in doing better performances at Olympics.
                    </p>
                    <p>In the last 50 years,the government's role has not been quire upto the marks.A country of 90 crores people fails miserably at important world sports event like World Cups,Olympics,Asiads,etc.
                    </p>
                    <br/>
                    <p>In athletics again,India's performance has been poor.The largest team goes to the Olympics and comes without winning any medal.In the last fifty years India had not got any medal. In 1984,P.T Usha,the sprint queen remained away from winning a bronze medal in hurdle race by fraction of a second,though she did outstanding performance by Milkha Singh,the flying Sikh of India.</p>
                </div>
                <div class="col-sm-4">
                    <img src="sport.jfif" id="img1" class="img-rounded" style="height: 300px;width: 100%"></img>
                </div>
            </div>
            <hr/>

            <div class="row">
                <div class="col-sm-12" style="margin-left: 20px;margin-bottom: 20px;">
                    <div class="col-sm-6">
                        <h4 style="background: #2098d1">About us</h4>
                        <video width="100%" height="300px" controls>
                            <source src="video2.mp4" type="video/mp4" style="">
                        </video>
                    </div>
                    <div class="col-sm-6">
                        <h4 style="background: #2098d1">Teacher's Day in Hostel</h4>
                        <video width="100%" height="300px" controls>
                            <source src="VID20190905202330.mp4" type="video/mp4" style="">
                        </video>
                </div>
            </div>
        </div>
    </div>


@endsection()