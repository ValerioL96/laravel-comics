@extends('layouts.app')

@section('page-title','Laravel Comics')

@section('main-content')
    <section class="list-products">
        @foreach ($comics as $comic)
    <article class="series_comics">
            <img src="{{ $comic['thumb'] }}" alt="{{$comic['title']}}">
            <p>
                {{$comic['title']}}
            </p>
        </article>
        @endforeach
        <div><p>Load more</p></div>
    </section>

    <section class="container-main">
        <ul>
            <li>
                <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="">
                DIGITAL COMICS
            </li>
            <li>
                <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="">
                DC MERCHANDISE
            </li>
            <li>
                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
                SUBSCRIPTION
            </li>
            <li>
                <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="">
                COMIC SHOP LOCATOR
            </li>
            <li>
                <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="">
                DC POWER VISA
            </li>
            </ul>
    </section>
@endsection
