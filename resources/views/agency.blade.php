@extends('layouts.main')

@section('content')

<div class="container">
    <h1>Our Offers</h1>

    @foreach ($vacations as $vacation)
        <article>
            <h2>{{ $vacation->name }}</h2>
            <p>{{ $vacation->description }}</p>
            <p>Price: {{ $vacation->price }}</p>
            <p>{{ $vacation->places }}</p>
            <p>{{ $vacation->season }}</p>
        </article>
    @endforeach

    <section>
        {{ $vacations->links() }}
    </section>
</div>

@endsection