@include('paritial.head')
@include('paritial.navbarAdmin')
<div class="container mt-5 mb-5 text-center">
    <h1 class="mb-4">{{__('Kontrybucje')}}</h1>
    <div class="row py-4 d-flex justify-content-center">
        <table class="table">
            <thead class="table-dark">
            <tr>
                <th> {{ __('Sponsor name') }}</th>
                <th>{{ __('Animal name') }} </th>
                <th>{{ __('Contribution') }} </th>
                <th>{{ __('Delete') }} </th>
                <th>{{ __('Update') }} </th>
            </tr>
            </thead>
            <tbody>
            @foreach($sponsorships as $sponsorship)
                <tr>
                    <form action="{{route('admin.updateSponsorship')}}" id="myform{{$sponsorship->id}}" method="post">
                        @csrf
                        <input type="text" name="id" hidden value="{{$sponsorship->id}}">
                        <input type="text" name="sponsor_id" hidden value="{{$sponsorship->sponsor_id}}">
                        <input type="text" name="animal_id" hidden value="{{$sponsorship->animal_id}}">
                        <td>{{$sponsorship->sponsor->name}}</td>
                        <td>{{$sponsorship->animal->name}}"</td>
                        <td><input type="text" name="contribution" value="{{$sponsorship->contribution}}"></td>
                    </form>
                    <td>
                        <form action="{{route('admin.deleteSponsorship')}}" method="post">
                            @csrf
                            <input type="text"  name="id" hidden value="{{$sponsorship->id}}">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                    <td>
                        <button type="submit" form="myform{{$sponsorship->id}}"  class="btn btn-info">Update</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@include('paritial.footer')
