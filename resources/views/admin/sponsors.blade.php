@include('paritial.head')
@include('paritial.navbarAdmin')
<div class="container mt-5 mb-5 text-center">
    <h1 class="mb-4">{{__('Nasi sponsorzy')}}</h1>
    <div class="row py-4 d-flex justify-content-center">
        <div class="table-responsive">
            <table class="table">
                <thead class="table-dark">
                <tr>
                    <th> {{__('Nazwa')}}</th>
                    <th>{{__('Adres')}}</th>
                    <th>{{__('Telefon')}}</th>
                    <th>{{__('Usuń')}}</th>
                    <th>{{__('Edytuj')}}</th>
                </tr>
                </thead>
                <tbody>

                @foreach($sponsors as $sponsor)
                    <tr>
                        <form action="{{route('admin.updateSponsor')}}" id="myform{{$sponsor->id}}" method="post">
                            @csrf
                            <input class="form-control" type="text" name="id" hidden value="{{$sponsor->id}}">

                            <td><input class="form-control" type="text" name="name" value="{{$sponsor->name}}"></td>
                            <td><input class="form-control" type="text" name="address" value="{{$sponsor->address}}"></td>
                            <td><input class="form-control" type="text" name="telephone" value="{{$sponsor->telephone}}"></td>
                        </form>
                        <td>
                            <form action="{{route('admin.deleteSponsor')}}" method="post">
                                @csrf
                                <input class="form-control" type="text"  name="id" hidden value="{{$sponsor->id}}">
                                <button type="submit" class="btn btn-danger">{{__('Usuń')}}</button>
                            </form>
                        </td>
                        <td>
                            <button type="submit" form="myform{{$sponsor->id}}"  class="btn btn-info">{{__('Edytuj')}}</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="my-2">
            <div class="table-pagination">
                {{ $sponsors->links() }}
            </div>
        </div>
    </div>
</div>
@include('paritial.footer')
