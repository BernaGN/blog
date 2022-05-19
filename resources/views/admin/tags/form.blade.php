<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="{{ $tag->name }}"
        required>
</div>
<x-buttons.button type="submit" class="btn btn-primary mt-2" text="Save" />
