<div class="col-md mb-4">
    <div class="card">
        <div class="card-header">
            {{ $date->format('d-m-Y') }}
            <div class="float-end">{{ $user }}</div>
        </div>
        <div class="card-body">
            <h4 class="card-title">{{ $title }}</h4>
            <p class="card-text">{{ $post }}</p>
            <img src="{{ asset($image) }}" alt="Imagen">
        </div>
        <div class="card-footer text-muted">
            @foreach ($tags as $tag)
                <p>{{ $tag->name }}</p>
            @endforeach
        </div>
    </div>
</div>
