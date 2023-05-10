@extends("layouts.app")

@section("page-title", "Home page")

@section("content")

    <div class="jumbotron"></div>

    <main>
        <div class="container">
            <div class="current-series">CURRENT SERIES</div>

            @foreach($data["cards"] as $card)
            <div class="box">
                <img src="{{ $card['thumb'] }}" alt="">
                <h5>{{$card["title"]}}</h5>
            </div>
            @endforeach
        </div>

        <a href="#" class="btn-load">LOAD MORE</a>
    </main>

    <div class="info-banner">
        <ul class="container">
            @foreach($data["iconsBanner"] as $iconBanner)
            <li>
                <img src="img/{{$iconBanner['icon']}}') }}" alt="">
                <span>{{$iconBanner['title']}}</span>
            </li>
            @endforeach
        </ul>
    </div>
@endsection