@extends('layouts.app')

@section('title', "Modification  d'une catégorie")

@section("content")
    <div class="row">
        <h3>Formulaire de création d'une catégorie</h3>
    <form action="{{ route("categories.update", $category->id) }}"
        method="post">
        @csrf
        @method("PUT")

        @include("categories.form")

        <div class="d-grip gap-2">
            <button type="submit" class="btn btn-wraning btn-sm">
                Enregistre les modifications
            </button>
        

        </div>

    </form>
</div>

    @endsection