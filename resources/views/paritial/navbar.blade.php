<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top h6 mb-0">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('guest.home')}}"><img src="{{URL::asset('storage/img/logo.png')}}"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('guest.home')}}">{{__('Strona główna')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('guest.animals')}}">{{__('Zwierzęta')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('guest.sponsor')}}">{{__('Zostań sponsorem')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('guest.sponsors')}}">{{__('Nasi sponsorzy')}}</a>
                </li>
            </ul>
            <a class="btn btn btn-dark text-uppercase" href="{{route('login')}}" role="button">{{__('Zaloguj się')}}</a>
        </div>
    </div>
</nav>
