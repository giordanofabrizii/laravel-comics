@extends('layouts.app')

@section('page-name', 'DC Comics')

@section('jumbo')
    <img class="header-jumbo" src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="s">
@endsection

@section('main')
    <section>
        <div class="container">
            <span>Current series</span>

            <div class="comics">
                @foreach ($data as $comic)
                <article>
                    <img src="{{ $comic['thumb'] }}" alt="{{$comic['title']}}">
                    <p>
                        {{$comic['title']}}
                    </p>
                </article>
                @endforeach
            </div>

            <button>Load more</button>
        </div>
    </section>
@endsection

@section('nav')
    <section class="nav">
        <ul>
            <li>
                <a href="">
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="">
                    <h2>
                        digital comics
                    </h2>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="">
                    <h2>
                        dc merchandise
                    </h2>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
                    <h2>
                        subscription
                    </h2>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="">
                    <h2>
                        comic shop locator
                    </h2>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="">
                    <h2>
                        dc power visa
                    </h2>
                </a>
            </li>
        </ul>
    </section>
@endsection
