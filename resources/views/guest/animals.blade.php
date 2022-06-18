@include('paritial.head')
@include('paritial.navbar')
<div class="container mt-5 mb-5 text-center">
    <h1 class="mb-4">{{__('Zwierzęta')}}</h1>
    <div class="btn-group" role="group" aria-label="Basic outlined example">
        <button type="button" class="btn btn-outline-dark">{{__('Wszystkie')}}</button>
        <button type="button" class="btn btn-outline-dark">{{__('Ssaki')}}</button>
        <button type="button" class="btn btn-outline-dark">{{__('Ptaki')}}</button>
        <button type="button" class="btn btn-outline-dark">{{__('Gady')}}</button>
        <button type="button" class="btn btn-outline-dark">{{__('Płazy')}}</button>
        <button type="button" class="btn btn-outline-dark">{{__('Ryby')}}</button>
        <button type="button" class="btn btn-outline-dark">{{__('Stawonogi')}}</button>
    </div>
    <div class="row py-4 d-flex justify-content-center">
    @foreach($animals as $animal)

            <div class="col-12 col-sm-6 col-md-6 col-lg-3 text-center">
                <div class="card" >
                    <a href="" class="text-decoration-none text-dark">
                        <img src="{{$animal->getImage()}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-3">{{$animal->name}}</h5>
                            <h5 class="card-title mb-3">{{$animal->species}}</h5>
                            <span>{{__('gender')}}</span>
                            <span>{{$animal->country}}</span>
                            <span>{{$animal->enclosure->name}}</span>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach

        <div class="  my-2">
            <div class="table-pagination">
                {{ $animals->links() }}
            </div>
        </div>
    </div>
</div>
@include('paritial.footer')
