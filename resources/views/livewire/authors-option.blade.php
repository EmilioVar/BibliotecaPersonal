<select class="js-example-basic-single" name="state">
    @foreach ($authors as $author)
    <option value="{{ $author->id }}">{{ $author->name." ".$author->firstName }}</option>
    @endforeach
  </select>