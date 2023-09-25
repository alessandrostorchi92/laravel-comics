{{-- Indico quale layout voglio utilizzare su questa pagina  --}}
@extends ("layouts.public")

@section('comics')

    <main>

        <div class="cards-container">

            <div class="container py-5">

                <div class="row row-cols-lg-6 g-4">

                        @foreach ($comicsList as $comic)
    
                            <div class="card h-100 border-0" style="width: 18rem;">
    
                                <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="comic-cover">
    
                                <div class="card-body bg-dark text-white text-center d-flex flex-column mt-auto">
    
                                    <h5 class="card-title"> {{ $comic['series'] }} </h5>
    
                                    <div class="card-text">
    
                                        <div> {{ $comic['price'] }} </div>
                                        <div> {{ $comic['type'] }} </div>
    
                                    </div>
    
                                </div>
    
                            </div>
    
                        @endforeach

                </div>

            </div>

        </div>

        <div class="container d-flex justify-content-center">

            <button class="btn btn-primary mb-3 px-5 rounded-0">LOAD MORE</button>

        </div>

    </main>
    
@endsection
