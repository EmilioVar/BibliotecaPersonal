<x-layout>
    <h1>formulario</h1>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- modal author -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    añadir autor
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo autor</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <livewire:create-author />
                        </div>
                    </div>
                </div>
                <!-- end modal author -->
                <form action="{{ route('book.create') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Título</label>
                        <input name="title" type="text" class="form-control" id="title" placeholder="Título">
                    </div>
                    <!-- author -->
                    <livewire:authors-option />

                    <div class="mb-3">
                        <label for="author" class="form-label">Título</label>
                        <input name="author" type="text" class="form-control" id="title" placeholder="Título">
                    </div>
                    <div class="mb-3">
                        <label for="editorial" class="form-label">Editorial</label>
                        <input name="editorial" type="text" class="form-control" id="editorial"
                            placeholder="Editorial">
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label">Año de publicación</label>
                        <input name="year" type="number" class="form-control" id="year"
                            placeholder="Año de publicación">
                    </div>
                    <div class="mb-3">
                        <label for="pages" class="form-label">nº páginas</label>
                        <input name="pages" type="number" class="form-control" id="pages" placeholder="Páginas">
                    </div>
                    <div class="mb-3">
                        <label for="where" class="form-label">¿Donde está</label>
                        <input name="where" type="text" class="form-control" id="where"
                            placeholder="debajo de la cama... en el armario...">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Categoría</label>
                        <input name="category" type="text" class="form-control" id="category"
                            placeholder="miedo, risa, acción...">
                    </div>
                    <div class="mb-3">
                        <label for="vote" class="form-label">Título</label>
                        <input name="vote" type="number" class="form-control" id="vote"
                            placeholder="del 1 al 5">
                    </div>
                    <div class="mb-3">
                        <label for="comment" class="form-label">Comentario</label>
                        <textarea id="comment" name="comment" rows="10" cols="50" placeholder="¿qué opinas del libro?"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Subir</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
