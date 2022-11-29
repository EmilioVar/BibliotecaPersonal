<select class="form-select authorSelect" name="author_id">
    @foreach ($authors as $author)
    <option value="{{ $author->id }}">{{ $author->name." ".$author->firstName }}</option>
    @endforeach
  </select>