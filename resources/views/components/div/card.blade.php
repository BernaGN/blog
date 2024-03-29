<div class="col-md mb-4">
    <div class="card">
        <div class="card-header">
            {{ $item->created_at->format('d-m-Y') }}
            <div class="float-end">{{ $item->user->name }}</div>
        </div>
        <div class="card-body">
            <h4 class="card-title">{{ $item->name }}</h4>
            <p class="card-text">{{ $item->post }}</p>
            <img src="{{ asset('storage/uploads/' . $item->image) }}" alt="Imagen" class="img-fluid">

            <x-buttons.a route="posts.show" :id="$item->id" text="Show" />
        </div>
        <div class="card-footer text-muted">
            @foreach ($item->tags as $tag)
                <p>{{ $tag->name }}</p>
            @endforeach
        </div>
    </div>
</div>
