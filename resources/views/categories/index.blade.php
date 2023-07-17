@extends('layouts.app')

@section('title', "la liste des catégories d'articles")

@section("content")
    <div class="row">
        <h3>Liste des catégories</h3>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="{{ route('categories.create') }}" class="btn btn-primary">
                Nouvelle catégorie
            </a>
        </div>
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nom de la catégorie</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td style="display: flex">
                            <a class="btn btn-warning btn-sm" style="margin-right: 5px"
                               href="{{ route('categories.edit', $category->id) }}">
                                Modifier
                            </a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input onclick="return confirm('Êtes-vous sûr ?')" class="btn btn-danger btn-sm" 
                                       type="submit" value="Supprimer">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
