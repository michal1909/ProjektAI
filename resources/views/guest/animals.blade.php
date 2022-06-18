@include('paritial.head')
@include('paritial.navbar')
<div class="container mt-5 mb-5 text-center">
    <h1 class="mb-4">{{__('Zwierzęta')}}</h1>
    <div class="row py-4 d-flex justify-content-center">
    @foreach($animals as $animal)

            <div class="col-12 col-sm-6 col-md-6 col-lg-3 text-center">
                <div class="card" >
                    <a href="" class="text-decoration-none text-dark">
                        <img src="{{$animal->getImage()}}" class="card-img-top" alt="...">
                        <div class="card-body" style="min-height: 210px;">
                            <h5 class="card-title mb-3">{{$animal->name}}</h5>
                            <p style="text-align: left">
                                <span>{{__('Gatunek: ')}}{{$animal->species}}</span><br>
                                <span>{{__('Płeć: ')}}{{$animal->gender}}</span><br>
                                <span>{{__('Kraj: ')}}{{$animal->country}}</span><br>
                                <span>{{__('Klatka: ')}}{{$animal->enclosure->name}}</span>
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach

        <div class="my-2">
            <div class="table-pagination">
                {{ $animals->links() }}
            </div>
        </div>
    </div>
</div>
@include('paritial.footer')
