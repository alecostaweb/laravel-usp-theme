@section('menu')

<nav class="navbar navbar-expand-sm navbar-light bg-light mb-3 py-0 border-bottom border-top border-gray">
    <div class="container">
        <a class="navbar-brand" href="{{ $dashboard_url }}"> <strong>
                @section('sitename')
                {{ $title }}
                @show
            </strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @include('laravel-usp-theme::partials.itens_menu')
            </ul>
        </div>
    </div>
</nav>

@show
