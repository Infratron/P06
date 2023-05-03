<x-layout header="Inserisci qui il tuo articolo">
    <header>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                <form action="{{route('blog.store')}}" method="POST" class="p-5 shadow">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Inserisci qui il titolo della recensione</label>
                        <input type="text" name="title" class="form-control" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Inserisci qui il tuo nome completo</label>
                        <input type="text" name="author" class="form-control" id="author">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Inserisci qui la recensione</label>
                        <textarea name="description" id="description" cols="30" rows="7" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Invia recensione</button>
                </form>
                </div>
            </div>
        </div>
</x-layout>

<!-- author
description -->