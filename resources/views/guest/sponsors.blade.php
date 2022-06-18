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
                        <div class="card-body">
                            <h5 class="card-title mb-3">{{$sponsor->name}}</h5>
                            <span>{{$sponsor->address}}</span>
                            <span>{{$sponsor->telephone}}</span>
                            <h5>Sponsorships</h5>
                            @foreach($sponsor->sponsorships as $sponsorship)
                                <h5>{{$sponsorship->animal->name}} : {{$sponsorship->contribution}}</h5>
                            @endforeach
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
