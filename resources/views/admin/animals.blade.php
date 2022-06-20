@include('paritial.head')
@include('paritial.navbarAdmin')
<div class="container mt-5 mb-5 text-center">
    <h1 class="mb-4">Zwierzęta</h1>
    <div class="row py-4 d-flex justify-content-center">
        <div class="table-responsive">
            <table class="table">
                <thead class="table-dark">
                <tr>
                    <th> {{ __('Nazwa') }}</th>
                    <th>{{ __('Gatunek') }} </th>
                    <th>{{ __('Płeć') }} </th>
                    <th>{{ __('Kraj') }} </th>
                    <th>{{ __('Klatka') }} </th>
                    <th>{{ __('Usuń') }} </th>
                    <th>{{ __('Edytuj') }} </th>
                </tr>
                </thead>
                <tbody>
                @foreach($animals as $animal)
                    <tr>
                        <form action="{{route('admin.updateAnimal')}}" id="myform{{$animal->id}}" method="post">
                            @csrf
                            <input class="form-control" type="text" name="id" hidden value="{{$animal->id}}">
                            <input class="form-control" type="text" name="enclosure_id" hidden value="{{$animal->enclosure_id}}">
                            <td><input class="form-control" type="text" name="name" value="{{$animal->name}}"></td>
                            <td><input class="form-control" type="text" name="species" value="{{$animal->species}}"></td>
                            <td><input class="form-control" type="text" name="gender" value="{{$animal->gender}}"></td>
                            <td><input class="form-control" type="text" name="country"  value="{{$animal->country}}"></td>
                            <td>
                                {{$animal->enclosure->name}}</td>

                        </form>
                        <td>
                            <form action="{{route('admin.deleteAnimal')}}" method="post">
                                @csrf
                                <input class="form-control" type="text"  name="id" hidden value="{{$animal->id}}">
                                <button type="submit" class="btn btn-danger">{{ __('Usuń') }}</button>
                            </form>
                        </td>
                        <td>
                            <button type="submit" form="myform{{$animal->id}}"  class="btn btn-info">{{ __('Edytuj') }}</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="my-2">
            <div class="table-pagination">
                {{ $animals->links() }}
            </div>
        </div>
    </div>
    <h1 class="mb-4 mt-4">{{__('Dodaj zwierzę')}}</h1>
    <div class="row py-4 d-flex justify-content-center">
        <div class="w-50">
            <form method="POST"  action="{{route('admin.createAnimal')}}"  enctype="multipart/form-data">
                @csrf
                <div>
                    <label class="mb-2 mt-3 fw-bold" for="enclosure_id">{{__('Id klatki:')}}</label><br>
                    <input class="form-control" type="number" name="enclosure_id" min="1"><br>
                </div>
                <div>
                    <label class="mb-2 mt-3 fw-bold" for="name">{{__('Nazwa zwierzęcia:')}}</label><br>
                    <input class="form-control" type="text" name="name"><br>
                </div>
                <div>
                    <label class="mb-2 mt-3 fw-bold" for="species">{{__('Gatunek:')}}</label><br>
                    <input class="form-control" type="text" name="species"><br>
                </div>
                <div>
                    <label class="mb-2 mt-3 fw-bold" for="gender">{{__('Płeć:')}}</label><br>
                    <input class="form-control" type="text" name="gender"><br>
                </div>
                <div>
                    <label class="mb-2 mt-3 fw-bold" for="country">{{__('Kraj:')}}</label><br>
                    <input class="form-control" type="text" name="country"><br>
                </div>
                <div>
                    <label class="mb-2 mt-3 fw-bold" for="image">{{__('Zdjęcie:')}}</label><br>
                    <label>
                        <input class="form-control" type="file"  name="image">
                        <a class="input-image-link" hidden>{{__("Select image")}}</a>
                    </label>
                </div>
                <button class="btn btn-outline-dark mt-3" type="submit">{{__("Dodaj")}}</button>
            </form>
        </div>
    </div>
</div>
@include('paritial.footer')
