@include('paritial.head')
@include('paritial.navbar')
<div class="container mt-5 mb-5 text-center">
    <h1 class="mb-4">{{__('Zostań sponsorem')}}</h1>
        <form method="POST"    action="{{route('guest.createSponsor')}}"  enctype="multipart/form-data">
        @csrf
            <div>
                <label for="name">Name:</label><br>
                <input type="text" name="name" ><br>
            </div>
            <div>
                <label for="address">Address:</label><br>
                <input type="text" name="address"><br>
            </div>
            <div>
                <label for="telephone">Telephone:</label><br>
                <input type="text" name="telephone"><br>
            </div>
           <div>
               <label for="image">Image:</label><br>
               <label>
                   <input type="file" hidden name="image">
                   <a class="input-image-link">{{__("Select image")}}</a>
               </label>
           </div>
            <button class="btn btn-warning mt-3" type="submit">Wyślij</button>
        </form>
</div>
@include('paritial.footer')
