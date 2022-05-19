<x-div.group name="name" text="Name">
    <x-text.input name="name" placeholder="Name" value="{{ $tag->name }}" required />
</x-div.group>

<x-buttons.button type="submit" class="btn btn-primary mt-2" text="Save" />
