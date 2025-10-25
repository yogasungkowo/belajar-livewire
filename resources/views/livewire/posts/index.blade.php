<div>
    @foreach ($posts as $post)
        <livewire:posts.block :post="$post" :key="$post->id" />
    @endforeach
</div>
