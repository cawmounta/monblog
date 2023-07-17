<div class="form-group mb-3">
    <label for="title">Titre de l'article : </label>
    <input type="text" name="title" class="form-control">
</div>
<div class="from-group mb-3">
    <label for="description">Description de l'article :</label>
    <textarea name="description" class="form-control"></textarea>
</div>
<div class="from-group mb-3">
    <label for="image">Image de l'article</label>
    <input type="file" name="image" class="form-control">
</div>
<div class="from-group mb-3">
    <label for="date_pub">
        Date de publication de l'article 
    </label>
    <input type="date" name="date_pub" class="form-control">
</div>
<div class="from-group mb-3">
    <label for="author">Auteur de l'article</label>
    <input type="text" name="author" class="form-control">
</div>
<div class="form-group mb-3">
    <label for="category">Catégorie de l'article</label>
    <select name="category_id" class="form-select">
        <option>Choisir une catégorie</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">
                {{ $category->name }}
            </option>
        @endforeach
    </select>
</div>
<div class="from-group mb-3">
    <label for="status">Statut de l'article</label>
    <select name="status" class="form-select">
        <option value="1">Publié</option>
        <option value="0">Non publié</option>
    </select>
</div>
