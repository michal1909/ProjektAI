@include('paritial.head')
@include('paritial.navbarAdmin')
<div class="container mt-5 mb-5 text-center">
    <h1 class="mb-4">Zwierzęta</h1>
    <div class="btn-group" role="group" aria-label="Basic outlined example">
        <button type="button" class="btn btn-outline-dark">Wszystkie</button>
        <button type="button" class="btn btn-outline-dark">Ssaki</button>
        <button type="button" class="btn btn-outline-dark">Ptaki</button>
        <button type="button" class="btn btn-outline-dark">Gady</button>
        <button type="button" class="btn btn-outline-dark">Płazy</button>
        <button type="button" class="btn btn-outline-dark">Ryby</button>
        <button type="button" class="btn btn-outline-dark">Stawonogi</button>
    </div>
    <div class="row py-4 d-flex justify-content-center">
        <table class="table">
            <thead class="table-dark">
            <tr>
                <th> {{ __('Name') }}</th>
                <th>{{ __('Species') }} </th>
                <th>{{ __('Gender') }} </th>
                <th>{{ __('Country') }} </th>
                <th>{{ __('Enclosure') }} </th>
                <th>{{ __('Delete') }} </th>
                <th>{{ __('Update') }} </th>
            </tr>
            </thead>
            <tbody>
            @foreach($animals as $animal)
                <tr>
                    <form action="{{route('admin.updateAnimal')}}" id="myform{{$animal->id}}" method="post">
                        @csrf
                        <input type="text" name="id" hidden value="{{$animal->id}}">
                        <input type="text" name="enclosure_id" hidden value="{{$animal->enclosure_id}}">
                        <td><input type="text" name="name" value="{{$animal->name}}"></td>
                        <td><input type="text" name="species" value="{{$animal->species}}"></td>
                        <td><input type="text" name="gender" value="{{$animal->gender}}"></td>
                        <td><input type="text" name="country"  value="{{$animal->country}}"></td>
                        <td>
                            {{$animal->enclosure->name}}</td>

                    </form>
                    <td>
                        <form action="{{route('admin.deleteAnimal')}}" method="post">
                            @csrf
                            <input type="text"  name="id" hidden value="{{$animal->id}}">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                    <td>
                        <button type="submit" form="myform{{$animal->id}}"  class="btn btn-info">Update</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@include('paritial.footer')
