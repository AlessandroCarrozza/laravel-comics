@extends("layouts.app")

@section("page-title", "Home page")

@section("content")
    <h1>main</h1>
    <div class="jumbotron"></div>

    <main>
        <div class="container">
            <div class="current-series">CURRENT SERIES</div>

            <div class="box">
                <img src="image" alt="Comics Photo">
                <h5>title</h5>
            </div>
        </div>

        <a href="#" class="btn-load">LOAD MORE</a>
    </main>

    <div class="info-banner">
        <ul class="container">
            <li v-for="info in infos">
            <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                <span>info text</span>
            </li>
        </ul>
    </div>
@endsection