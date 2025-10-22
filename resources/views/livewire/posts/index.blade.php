<div class="d-flex flex-column align-items-center row">
    <livewire:posts.create />

    {{-- <div class="mt-4">
        @foreach ($posts as $post)
            <div class="card mb-3">
                <div class="card-header">
                    {{ $post->title }} by {{ $post->user->name }}
                </div>
                <div class="card-body">
                    <p class="card-text">{{ $post->content }}</p>
                </div>
            </div>
        @endforeach

        {{ $posts->links() }}
    </div> --}}
</div>
