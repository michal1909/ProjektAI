<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top h6 mb-0">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="{{URL::asset('storage/img/logo.png')}}"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('admin.dashboard')}}">{{__('Strona główna')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('admin.animals')}}">{{__('Zwierzęta')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('admin.sponsors')}}">{{__('Sponsorzy')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('admin.sponsorships')}}">{{__('Kontrybucje')}}</a>
                </li>
            </ul>
            <span>{{__('Witaj,') ." ". $user->name}}</span>
            <form id="logout-form" name="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <x-button form="logout-form" class="ml-3" type="submit">
                    {{__('Wyloguj się') }}
                </x-button>
            </form>
        </div>
    </div>
</nav>
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    @if (isset($status))
        <div class="p-5">{{ $status }}</div>
    @endif

