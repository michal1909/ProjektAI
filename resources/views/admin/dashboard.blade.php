@include('paritial.head')
@include('paritial.navbarAdmin')
<div class="container mt-5 mb-5 text-center">
    <h1 class="mb-4">{{__('Witaj') ." ". $user->name}}</h1>

</div>
@include('paritial.footer')
