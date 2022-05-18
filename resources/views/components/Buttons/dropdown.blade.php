<div class="dropdown open">
    <button class="btn btn-primary dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        Options
    </button>
    <div class="dropdown-menu" aria-labelledby="triggerId">
        <form action="{{ route($destroy . '.destroy', $id) }}" method="post">
            <a class="dropdown-item" href="{{ route($show . '.show', $id) }}"> Show
            </a>
            <a class="dropdown-item" href="{{ route($edit . '.edit', $id) }}"> Edit
            </a>
            @csrf
            @method('Delete')
            <button class="dropdown-item" type="submit">
                Delete
            </button>
        </form>
    </div>
</div>
