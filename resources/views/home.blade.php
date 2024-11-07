@section('content')
    <div class="container">
        <h1 class="mb-4">Welcome to EduFun</h1>
        <div class="row">
            @foreach($articles as $article)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{{ Str::limit($article->content, 100) }}</p>
                            <a href="/article/{{ $article->id }}" class="btn btn-primary">Read more...</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $articles->links() }}
    </div>
@endsection
