@include('paritial.head')
@include('paritial.navbar')
<div class="container mt-5 mb-5 text-center">
    <h1 class="mb-4">{{__('Nasi sponsorzy')}}</h1>
    <div class="row py-4 d-flex justify-content-center">
        @foreach($sponsors as $sponsor)
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 text-center">
                <div class="card" >
                    <a href="" class="text-decoration-none text-dark">
                        <img src="{{$sponsor->getImage()}}" class="card-img-top" alt="...">
                        <div class="card-body" style="min-height: 185px;">
                            <h5 class="card-title mb-3">{{$sponsor->name}}</h5>
                            <p style="text-align: left">
                                <span>{{__('Adres: ')}}{{$sponsor->address}}</span><br>
                                <span>{{__('Telefon: ')}}{{$sponsor->telephone}}</span><br>
                                <span>{{__('Patronat ')}}</span><br>
                                @foreach($sponsor->sponsorships as $sponsorship)
                                    <span>{{$sponsorship->animal->name}} : {{$sponsorship->contribution}}<span><br>
                                @endforeach
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
        <div class="my-2">
            <div class="table-pagination">
                {{ $sponsors->links() }}
            </div>
        </div>
    </div>
</div>
@include('paritial.footer')
