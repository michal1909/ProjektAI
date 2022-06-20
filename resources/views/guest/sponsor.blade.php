@include('paritial.head')
@include('paritial.navbar')
<div class="container mt-5 mb-5 text-center">
    <h1 class="mb-4">{{__('Zostań sponsorem')}}</h1>
    <div class="row py-4 d-flex justify-content-center">
        <div class="w-50">
            <form method="POST"    action="{{route('guest.createSponsor')}}"  enctype="multipart/form-data">
                @csrf
                <div>
                    <label class="mb-2 mt-3 fw-bold" for="name">{{__('Nazwa:')}}</label><br>
                    <input class="form-control" type="text" name="name" ><br>
                </div>
                <div>
                    <label class="mb-2 mt-3 fw-bold" for="address">{{__('Adres:')}}</label><br>
                    <input class="form-control" type="text" name="address"><br>
                </div>
                <div>
                    <label class="mb-2 mt-3 fw-bold" for="telephone">{{__('Telefon:')}}</label><br>
                    <input class="form-control" type="text" name="telephone"><br>
                </div>
                <div>
                    <label class="mb-2 mt-3 fw-bold" for="image">{{__('Zdjęcie:')}}</label><br>
                    <label>
                        <input class="form-control" type="file"  name="image">
                        <a class="input-image-link" hidden>{{__("Select image")}}</a>
                    </label>
                </div>
                <button class="btn btn-outline-dark mt-3" type="submit">{{__("Wyślij")}}</button>
            </form>
        </div>
    </div>
</div>
@include('paritial.footer')
