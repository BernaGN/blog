<select name="{{ $name }}" id="{{ $name }}" class="form-control" {{ $attributes }}>
    <option value=""></option>
    @foreach ($items as $item)
        <option value="{{ $item->id }}" {{ $item->id == $valor ? 'selected' : '' }}>
            {{ $item->name }}</option>
    @endforeach
</select>
