<form action="{{route('post.store')}}" method="POST">
    @csrf
    <div class="form-floating mb-3">
        <input required name="title" type="text" class="form-control" id="title" placeholder="Tytuł wpisu...">
        <label for="title">Tytuł</label>
    </div>
    <div class="form-floating mb-3">
        <input name="preview_content" type="text" class="form-control" id="preview_content" placeholder="Treść poglądowa...">
        <label for="preview_content">Podgląd treści</label>
    </div>
    <div class="form-floating mb-3">
        <input name="content" type="text" class="form-control" id="content" placeholder="Treść poglądowa...">
        <label for="content">Treść</label>
    </div>
    <div class="form-floating mb-3">
        <input name="active" type="text" class="form-control" id="active" placeholder="Treść poglądowa...">
        <label for="active">Aktywny</label>
    </div>
    <div class="form-floating mb-3">
        <input name="publication_date" type="datetime-local" class="form-control" id="publication_date" placeholder="Data publikacji...">
        <label for="publication_date">Data publikacji</label>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary" type="submit">Zapisz</button>
    </div>
</form>
