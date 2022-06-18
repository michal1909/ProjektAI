@include('paritial.head')
@include('paritial.navbar')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{URL::asset('storage/img/c1.png')}}" class="d-block w-100" alt="grafika 1">
        </div>
        <div class="carousel-item">
            <img src="{{URL::asset('storage/img/c2.png')}}" class="d-block w-100" alt="grafika 2">
        </div>
        <div class="carousel-item">
            <img src="{{URL::asset('storage/img/c3.png')}}" class="d-block w-100" alt="grafika 3">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="container mt-5 mb-5">
    <h1 class="text-center mb-3">{{__('Zwierzęta')}}</h1>
    <div class="row py-4 d-flex justify-content-center">
        <div class="col-12 col-sm-6 col-md-6 col-lg-3 text-center">
            <div class="card" >
                    <img src="{{URL::asset('storage/img/crd1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mb-3">{{__('Ssaki')}}</h5>
                    </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3 text-center">
            <div class="card" >
                    <img src="{{URL::asset('storage/img/crd2.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mb-3">{{__('Ptaki')}}</h5>
                    </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3 text-center">
            <div class="card" >
                    <img src="{{URL::asset('storage/img/crd3.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mb-3">{{__('Gady')}}</h5>
                    </div>
            </div>
        </div>
    </div>
    <div class="row py-3 d-flex justify-content-center ">
        <div class="col-12 col-sm-6 col-md-6 col-lg-3 text-center">
            <div class="card" >
                    <img src="{{URL::asset('storage/img/crd4.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mb-3">{{__('Płazy')}}</h5>
                    </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3 text-center">
            <div class="card" >
                    <img src="{{URL::asset('storage/img/crd5.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mb-3">{{__('Ryby')}}</h5>
                    </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3 text-center">
            <div class="card" >
                    <img src="{{URL::asset('storage/img/crd6.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mb-3">{{__('Stawonogi')}}</h5>
                    </div>
            </div>
        </div>
    </div>
    <h1 class="text-center mb-4" id="price-list">{{__('Cennik')}}</h1>
    <div class="row">
        <table class="table table-hover ">
            <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">{{__('Bilet')}}</th>
                <th scope="col">{{__('Cena')}}</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>{{__('Normalny')}}</td>
                <td>{{__('30 PLN')}}</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>{{__('Ulgowy')}}</td>
                <td>{{__('25 PLN')}}</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>{{__('Karta Dużej Rodziny')}}</td>
                <td>{{__('25 PLN')}}</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="row bg-dark mt-5 text-light">
        <div class="col-6">
            <img src="{{URL::asset('storage/img/g1.jpg')}}" class="img-fluid">
        </div>
        <div class="col-6" id="invite">
            <h5 class="text-uppercase py-4">{{__('Przyłącz się do nas')}}</h5>
            <p>
                {{__('Zapraszamy osoby prywatne i firmy chcące przejąć część kosztów utrzymania wybranych przez siebie zwierząt do udziału w honorowej adopcji.')}}
            </p>
            <a href="{{route('guest.sponsor')}}" class="btn btn-outline-light mt-3">{{__('Zobacz więcej')}}</a>
        </div>
    </div>
</div>
@include('paritial.footer')
