<x-layout header="Sezione degli articoli">
    <div class="container mt-5">
        <div class="row justify-content-center">
        @foreach($articles as $article)
            <div class="col-12 col-md-4">
                <div class="card">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->title}}</h5>
                        <p class="small fst-italic">{{$article->author}}</p>
                        <p class="card-text">{{$article->description}}</p>
                    </div>
                    </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>