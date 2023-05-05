<x-layout header="Sezione degli articoli">
    <div class="container">
        <div class="row">
        @foreach($articles as $article)
            <div class="col-12 col-md-4 my-3">
                <div class="card">
                    <img src="{{Storage::url($article->cover)}}" class="card-img-top" alt="...">
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