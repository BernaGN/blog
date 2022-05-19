<input type="hidden" name="user_id" value="{{ Auth()->user()->id }}">

<x-div.group name="name" text="Title">
    <x-text.input name="name" placeholder="Title" value="{{ $post->name }}" required />
</x-div.group>

<x-div.group name="post" text="Post">
    <x-text.input name="post" placeholder="Post" value="{{ $post->post }}" required />
</x-div.group>

<x-div.group name="image" text="Image">
    <x-text.input type="file" name="image" accept="img/*" required />
</x-div.group>

<x-div.group name="tags" text="Tags">
    <x-text.input name="tags" placeholder="Tags" required />
</x-div.group>

<x-div.group name="category" text="Category">
    <x-text.select name="category" :items="$categories" :valor="$post->category_id" required />
</x-div.group>

<x-buttons.button type="submit" class="btn btn-primary mt-2" text="Save" />
