@extends('layouts.app')

@section('title', "Modification  d'un poste")

@section("content")
    <div class="row">
        <h3>Formulaire de création d'un poste</h3>
    <form action="{{ route("posts.update", $post->id)}}"
        method="post">
        @csrf
        @method("PUT")

        @include("posts.form")

        <div class="d-grip gap-2">
            <button type="submit" class="btn btn-warning btn-sm">
                Enregistre les modifications
            </button>
        

        </div>

    </form>
</div>

    @endsection