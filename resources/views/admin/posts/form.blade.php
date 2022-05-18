<input type="hidden" name="user_id" value="{{ Auth()->user()->id }}">
<div class="form-group">
    <label for="name">Title</label>
    <input type="text" name="name" id="name" class="form-control" placeholder="Title" aria-describedby="helpId"
        value="{{ $post->name }}" required>
</div>
<div class="form-group">
    <label for="post">Post</label>
    <input type="text" name="post" id="post" class="form-control" placeholder="Post" aria-describedby="helpId"
        value="{{ $post->post }}" required>
</div>
<div class="form-group">
    <label for="image">Image</label>
    <input type="file" name="image" id="image" class="form-control" aria-describedby="helpId" accept="img/*" required>
</div>
<div class="form-group">
    <label for="tags">Tags</label>
    <input type="text" name="tags" id="tags" class="form-control" placeholder="Tags" aria-describedby="helpId"
        required>
</div>
<div class="form-group">
    <label for="category">Category</label>
    <select name="category" id="category" class="form-control" required>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ $category->id == $post->category_id ? 'selected' : '' }}>
                {{ $category->name }}</option>
        @endforeach
    </select>
</div>
<button type="submit" class="btn btn-primary mt-2">Save</button>
