    <div class="row">
        <div class="container">
            <div class="row mb-3 mt-3 col-sm-12">
                <h5 class="col-8"> Apuntes, detalles y teoría de la construcción.</h5>
                <div class="col-4">
                    <input
                        type="search"
                        class="form-control"
                        placeholder="Search..."
                        autocomplete="off">
                </div>
            </div>

            @foreach($posts as $post)
                <div class="container">
                    <div class="card mb-1 mt-3">
                        <div class="card-header">
                            <p>Tema creado por, {{$post->user->name}}, el día<em> {{$post->created_at}}.</em></p>
                        </div>
                        <div class="card-body">
                            <img src="/images/{{$post->image->url}}" class="card-img-top">
                            <p class="card-title">CATEGORIA: {{$post->category->name}}</p>
                            <p class="text-uppercase text-center">{{$post->name}}</p>
                            <p class="card-text text-justify">{{$post->excerpt}}
                                <a href="#" class="float-right">Leer más</a>
                            </p>
                        </div>
                        <div class="card-footer">
                            <p class="float-right">comentarios: {{$post->comments->count()}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="d-flex justify-content-center mt-3">
                {{$posts->links()}}
            </div>

        </div>

    </div>
