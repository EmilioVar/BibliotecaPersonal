<select class="form-select" name="author">
    @foreach ($authors as $author)
    <option value="{{ $author->id }}">{{ $author->name." ".$author->firstName }}</option>
    @endforeach
  </select>