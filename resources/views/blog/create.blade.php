<x-layout header="Inserisci qui il tuo articolo">
    <header>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                <form action="{{route('blog.store')}}" method="POST" class="p-5 shadow" enctype="multipart/form-data">
                    @csrf

 
                                <h1>Create Post</h1>
                                
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                    <div class="mb-3">
                        <label for="cover" class="form-label">Copertina</label>
                        <input type="file" name="cover" class="form-control" id="cover">
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label">Inserisci qui il titolo della recensione</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{old('title')}}">
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Inserisci qui il tuo nome completo</label>
                        <input type="text" name="author" class="form-control" id="author" value="{{old('author')}}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Inserisci qui la recensione</label>
                        <textarea name="description" id="description" cols="30" rows="7" class="form-control">{{old('description')}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Invia recensione</button>
                </form>
                </div>
            </div>
        </div>
</x-layout>

<!-- author
description -->