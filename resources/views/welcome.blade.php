<x-layout>
<h1>hola</h1>
<table class="table table-striped">
    @forelse($books as $book)
    <tr><td>{{ $book->title }} / {{ $book->author->name }}</td></tr>
    @empty
        <h1>no hay libros</h1>
    @endforelse
</table>
</x-layout>