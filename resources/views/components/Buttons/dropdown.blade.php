<div class="dropdown open">
    <x-buttons.button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false" />
    <div class="dropdown-menu" aria-labelledby="triggerId">
        <form action="{{ route($route . '.destroy', $id) }}" method="post">
            <x-buttons.a class="dropdown-item" :route="$route . '.show'" :id="$id" text="Show" />
            <x-buttons.a class="dropdown-item" :route="$route . '.edit'" :id="$id" text="Edit" />
            @csrf
            @method('Delete')
            <x-buttons.button class="dropdown-item" type="submit" text="Delete" />
        </form>
    </div>
</div>
