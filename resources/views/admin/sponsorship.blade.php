@include('paritial.head')
@include('paritial.navbarAdmin')
<div class="container mt-5 mb-5 text-center">
    <h1 class="mb-4">{{__('Kontrybucje')}}</h1>
    <div class="row py-4 d-flex justify-content-center">
        <table class="table">
            <thead class="table-dark">
            <tr>
                <th> {{__('Nazwa sponsora')}}</th>
                <th>{{__('Nazwa zwierzęcia')}}</th>
                <th>{{__('Wkład')}}</th>
                <th>{{__('Usuń')}}</th>
                <th>{{__('Edytuj')}}</th>
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
                        <td>{{$sponsorship->animal->name}}</td>
                        <td><input type="text" name="contribution" value="{{$sponsorship->contribution}}"></td>
                    </form>
                    <td>
                        <form action="{{route('admin.deleteSponsorship')}}" method="post">
                            @csrf
                            <input type="text"  name="id" hidden value="{{$sponsorship->id}}">
                            <button type="submit" class="btn btn-danger">{{__('Usuń')}}</button>
                        </form>
                    </td>
                    <td>
                        <button type="submit" form="myform{{$sponsorship->id}}"  class="btn btn-info">{{__('Edytuj')}}</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="my-2">
            <div class="table-pagination">
                {{ $sponsorships->links() }}
            </div>
        </div>
    </div>
    <h1 class="mt-4 mb-3">{{__('Dodaj kontrybucję')}}</h1>
    <div class="row py-4 d-flex justify-content-center">
        <form method="POST"  action="{{route('admin.createSponsorship')}}"  enctype="multipart/form-data">
            @csrf
            <div>
                <label class="mb-2 mt-3 fw-bold" for="sponsor_id">{{__('Id sponsora:')}}</label><br>
                <input type="number" name="sponsor_id" min="1"><br>
            </div>
            <div>
                <label class="mb-2 mt-3 fw-bold" for="animal_id">{{__('Id zwierzęcia:')}}</label><br>
                <input type="number" name="animal_id" min="1"><br>
            </div>
            <div>
                <label class="mb-2 mt-3 fw-bold" for="contribution">{{__('Wkład:')}}</label><br>
                <input type="number" name="contribution"><br>
            </div>
            <button class="btn btn-outline-dark mt-3" type="submit">{{__("Dodaj")}}</button>
        </form>
    </div>
</div>
@include('paritial.footer')
