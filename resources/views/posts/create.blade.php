@extends("layouts.app")

@section("title", "Nouvel article")

@section("content")
    <div class="row">
        <h3>Nouvel article</h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        <form enctype="multipart/form-data" 
            action="{{ route('posts.store') }}" method="post">
            @csrf
            @include("posts.form")
            
            <div class="d-grid gap-2 mb-3">
                <button type="submit" class="btn btn-primary">
                    Ajouter un article
                </button>
            </div>
        </form>
    </div>
@endsection
 