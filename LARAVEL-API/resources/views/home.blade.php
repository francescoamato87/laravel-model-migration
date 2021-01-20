<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        <h1>HOMEPAGE new...</h1>

        <section class="guests">
            <h2>Our Guests</h2>

            <ul>
                @foreach ($guests as $guest)
                <li>
                    <h3> {{$guest->name}} {{$guest->lastname}} </h3>
                    <div class="document">
                        <p> {{$guest->date_of_birth }} </p>
                        <p> {{$guest->document_type }} </p>
                    </div>
                </li>
                @endforeach
            </ul>
        </section>

        <section id="app" >
            <h2>Le nostre Moto</h2>
            <ul>
                <li v-for="bike in bikes">
                    <h3> @{{ bike.modello }} </h3>
                    <div class="brand">@{{bike.marca}}</div>
                    <div class="plate">@{{bike.targa}}</div>
                </li>
            </ul>

        </section>

        {{-- JS SCRIPT  --}}
        <script src=" {{ asset('js/app.js') }} "></script>
    </body>
</html>
