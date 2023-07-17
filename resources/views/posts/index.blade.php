@extends('layouts.app')

@section("title", "La liste des articles")

@section("content")
    <div class="row">
        <h3>La liste des articles</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Titre</th>
                    <th>Date de publication</th>
                    <th>Auteur</th>
                    <th>Catégorie</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>
                            <img width="50" class="img-thumbnail"
                            src="{{ asset('images/'.$post->image) }}" alt="">
                        </td>
                        <td>
                            <strong>{{ $post->title }}</strong>
                        </td>
                        <td>{{ $post->date_pub }}</td>
                        <td>{{ $post->author }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>
                            @if ($post->status == 1)
                                <span class="badge text-bg-success">
                                    Publié
                                </span>
                                @else
                                <span class="badge text-bg-danger">
                                    Non Publié
                                </span>
                            @endif
                        </td>
                        <td style="display: flex">
                            <a class="btn btn-primary btn-sm"
                            style="margin-right: 5px"
                                href="{{ route('posts.show',$post->id) }}">
                                Détail
                            </a>

                            <a class="btn btn-warning btn-sm"
                            style="margin-right: 5px"
                                href="{{ route('posts.edit',$post->id) }}">
                                Modifier
                            </a>

                            <form action="{{ route('posts.destroy',$post->id) }}" 
                                method="post">
                                <input onclick="return confirm('Êtes-vous sûr?')"
                                class="btn btn-sm btn-danger" 
                                type="submit" value="Supprimer">
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
