@extends('layouts.app')

@section('title', "Ajout d'une catégorie")

@section("content")
    <div class="row">
        <h3>Formulaire de création d'une catégorie</h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('categories.store') }}" method="post">
            @csrf
            @include('categories.form')
            <div class="d-grip gap-2">
                <button type="submit" class="btn btn-primary">
                    Ajouter une catégorie
                </button>
            </div>
        </form>
    </div>
@endsection
