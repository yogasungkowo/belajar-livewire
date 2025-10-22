<div class="card col-6">
    <x-flash-message />
    <div class="card-body">
        <div class="card-title fw-bold">
        Create Post
    </div>
    <form wire:submit="save">

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" wire:model="form.title">
            @error('form.title')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" rows="3" wire:model="form.content"></textarea>
            @error('form.content')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

</div>
