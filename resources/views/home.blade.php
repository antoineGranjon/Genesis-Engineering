@extends('layout.app')
@section('title')
    Homepage
@stop
@section('content')
    <div class="container-fluid p-0">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('/assets/images/razer.jpg')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('/assets/images/razer2.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('/assets/images/razer3.jpg')}}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- Left and right controls -->
        <div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    <div class="container">
        <h2>Nouveautés</h2>
        <div class="card-deck">
            <div class="col-sd-6 col-md-3 mb-5 p-0 d-flex align-items-stretch">
                <div class="card">
                    <img src="{{asset('/assets/images/pc1.jpg')}}" class="card-img-top" alt="watch">
                    <div class="card-body shadow bg-white rounded degradegris">
                        <h4 class="card-title text-center text-md-left font-weight-bold"> Produit PC </h4>
                        <h5 class="card-text text-center text-md-left"> Notre nouvau PC </h5>
                    </div>
                </div>
            </div>
            <div class="col-sd-6 col-md-3 mb-5 p-0 d-flex align-items-stretch">
                <div class="card">
                    <img src="{{asset('/assets/images/pc1.jpg')}}" class="card-img-top" alt="watch">
                    <div class="card-body shadow bg-white rounded degradegris">
                        <h4 class="card-title text-center text-md-left font-weight-bold"> Produit PC </h4>
                        <h5 class="card-text text-center text-md-left"> Notre nouvau PC </h5>
                    </div>
                </div>
            </div>
            <div class="col-sd-6 col-md-3 mb-5 p-0 d-flex align-items-stretch">
                <div class="card">
                    <img src="{{asset('/assets/images/pc1.jpg')}}" class="card-img-top" alt="watch">
                    <div class="card-body shadow bg-white rounded degradegris">
                        <h4 class="card-title text-center text-md-left font-weight-bold"> Produit PC </h4>
                        <h5 class="card-text text-center text-md-left"> Notre nouvau PC </h5>
                    </div>
                </div>
            </div>
            <div class="col-sd-6 col-md-3 mb-5 p-0 d-flex align-items-stretch">
                <div class="card">
                    <img src="{{asset('/assets/images/pc1.jpg')}}" class="card-img-top" alt="watch">
                    <div class="card-body shadow bg-white rounded degradegris">
                        <h4 class="card-title text-center text-md-left font-weight-bold"> Produit PC </h4>
                        <h5 class="card-text text-center text-md-left"> Notre nouvau PC </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container line">
        <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-4 carre"></div>
                <div class="col-md-4 carre"></div>
                <div class="col-md-4 carre"></div>
            </div>
        </div>
        </div>
    </div>




    <div class="container">
        <h2>Gammes</h2>
        <div class="card-deck">
            <div class="col-sd-6 col-md-3 mb-5 p-0 d-flex align-items-stretch">
                <div class="card">
                    <img src="{{asset('/assets/images/pc1.jpg')}}" class="card-img-top" alt="watch">
                    <div class="card-body shadow bg-white rounded degradegris">
                        <h4 class="card-title text-center text-md-left font-weight-bold"> Produit PC </h4>
                        <h5 class="card-text text-center text-md-left"> Notre nouvau PC </h5>
                    </div>
                </div>
            </div>
            <div class="col-sd-6 col-md-3 mb-5 p-0 d-flex align-items-stretch">
                <div class="card">
                    <img src="{{asset('/assets/images/pc1.jpg')}}" class="card-img-top" alt="watch">
                    <div class="card-body shadow bg-white rounded degradegris">
                        <h4 class="card-title text-center text-md-left font-weight-bold"> Produit PC </h4>
                        <h5 class="card-text text-center text-md-left"> Notre nouvau PC </h5>
                    </div>
                </div>
            </div>
            <div class="col-sd-6 col-md-3 mb-5 p-0 d-flex align-items-stretch">
                <div class="card">
                    <img src="{{asset('/assets/images/pc1.jpg')}}" class="card-img-top" alt="watch">
                    <div class="card-body shadow bg-white rounded degradegris">
                        <h4 class="card-title text-center text-md-left font-weight-bold"> Produit PC </h4>
                        <h5 class="card-text text-center text-md-left"> Notre nouvau PC </h5>
                    </div>
                </div>
            </div>
            <div class="col-sd-6 col-md-3 mb-5 p-0 d-flex align-items-stretch">
                <div class="card">
                    <img src="{{asset('/assets/images/pc1.jpg')}}" class="card-img-top" alt="watch">
                    <div class="card-body shadow bg-white rounded degradegris">
                        <h4 class="card-title text-center text-md-left font-weight-bold"> Produit PC </h4>
                        <h5 class="card-text text-center text-md-left"> Notre nouvau PC </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <div class="container-fluid">
        <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('/assets/images/savoir-faire.jpg')}}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Notre savoir faire</h5>
                        <p>Altera sententia est, quae definit amicitiam paribus officiis ac voluntatibus. Hoc quidem est
                            nimis exigue et exiliter ad calculos vocare amicitiam, ut par sit ratio acceptorum et
                            datorum. Divitior mihi et affluentior videtur esse vera amicitia nec observare restricte, ne
                            plus reddat quam acceperit; neque enim verendum est, ne quid excidat, aut ne quid in terram
                            defluat, aut ne plus aequo quid in amicitiam congeratur.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-4 carre"></div>
            <div class="col-md-4 carre"></div>
            <div class="col-md-4 carre"></div>
        </div>
    </div>
@stop


























