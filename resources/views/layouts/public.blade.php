{{-- Questo file deve contenere tuti gli elementi visibili agli utenti che si ripetono in tutte le pagine del sito web  --}}

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Crea un nuovo progetto Laravel che riprende il progetto vite-comics">
    
    <title> Laravel Comics</title>

    {{-- Questa riga di codice serve per caricare il scss e js --}}
    @vite(['resources/scss/app.scss', 'resources/js/app.js']) 

</head>

<body>
    
    <header>
        @include('partials.navbar')
    </header>

    <main>
        {{-- segnaposto che verrà sostituito con il contenuto di ogni pagina --}}
        @yield('content')
    </main>

    <footer>
        @include('partials.footer')
    </footer>

</body>

</html>