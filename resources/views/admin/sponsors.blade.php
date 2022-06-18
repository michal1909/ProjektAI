@include('paritial.head')
@include('paritial.navbarAdmin')
<div class="container mt-5 mb-5 text-center">
    <h1 class="mb-4">{{__('Nasi sponsorzy')}}</h1>
    <div class="row py-4 d-flex justify-content-center">
        <table class="table">
            <thead class="table-dark">
            <tr>
                <th> {{ __('Name') }}</th>
                <th>{{ __('Address') }} </th>
                <th>{{ __('Telephone') }} </th>
                <th>{{ __('Delete') }} </th>
                <th>{{ __('Update') }} </th>
            </tr>
            </thead>
            <tbody>

            @foreach($sponsors as $sponsor)
                <tr>
                    <form action="{{route('admin.updateSponsor')}}" id="myform{{$sponsor->id}}" method="post">
                        @csrf
                        <input type="text" name="id" hidden value="{{$sponsor->id}}">

                        <td><input type="text" name="name" value="{{$sponsor->name}}"></td>
                        <td><input type="text" name="address" value="{{$sponsor->address}}"></td>
                        <td><input type="text" name="telephone" value="{{$sponsor->telephone}}"></td>
                    </form>
                    <td>
                        <form action="{{route('admin.deleteSponsor')}}" method="post">
                            @csrf
                            <input type="text"  name="id" hidden value="{{$sponsor->id}}">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                    <td>
                        <button type="submit" form="myform{{$sponsor->id}}"  class="btn btn-info">Update</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="  my-2">
            <div class="table-pagination">
                {{ $sponsors->links() }}
            </div>
        </div>
    </div>
</div>
@include('paritial.footer')
