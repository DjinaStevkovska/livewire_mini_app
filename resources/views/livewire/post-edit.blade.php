<div>
    {{-- Because she competes with no one, no one can compete with her. --}}

    <div class="container">
        <div class="w-50 mx-auto">
            <h1>EDIT POST NUMBER {{ $post->id }}</h1>
                @if ($successMessage)
                    <div class="alert alert-success" role="alert">
                        <strong>Note: </strong>
                        {{ $successMessage }}
                        <button type="button" class="close" wire:click="$set('successMessage', null)">
                        <span aria-hidden="true">&times;</span>
                  </div>
                @endif

            <form wire:submit.prevent="updatePost"
            {{-- action="{{ route('post.update', $post)}}" 
            method="POST" --}}
            enctype="multipart/form-data"
            type="multipart"
            >
            @csrf
            {{-- @method('PATCH') --}}
                <div class="row mx-auto">
                    <div class="col-md-2">
                        <strong>Title</strong>
                    </div>
                    <div class="col-md-10">
                        <input wire:model="title"
                            type="text" 
                            name="title" 
                            value="{{ old('title', $post->title) }}">
                        @error('title')
                            <p class="text-danger font-weight-bold">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="row mx-auto">
                    <div class="col-md-2">
                        <strong>Content</strong>
                    </div>
                    <div class="col-md-10">
                        <textarea wire:model="content"
                            name="content" cols="20" rows="10">{{ old('content', $post->content) }}</textarea class="">
                    @error('content')
                        <p class="text-danger font-weight-bold">{{ $message }}</p>
                    @enderror
                    </div>
                </div>

                <div class="row mx-auto">
                    <div class="col-md-2">
                        <strong>Photo</strong>
                    </div>
                    <div class="col-md-10">

                        <div
                            x-data="{ isUploading: false, progress: 0 }"
                            x-on:livewire-upload-start="isUploading = true"
                            x-on:livewire-upload-finish="isUploading = false"
                            x-on:livewire-upload-error="isUploading = false"
                            x-on:livewire-upload-progress="progress = $event.detail.progress"
                        >


                        <input  wire:model="photo"
                            name="photo" 
                            type="file"
                            class="mb-2">
                        
                            <div x-show="isUploading" class="m-3">
                                <span wire:loading wire:target="photo" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                <progress max="100" x-bind:value="progress"></progress>
                            </div>
                        
                        @error('photo')
                            <p class="text-danger font-weight-bold mt-2">{{ $message }}</p>
                        @enderror    

                        @if ($photo)
                            <img class="mt-2" src="{{ $photo->temporaryUrl() }}" alt="temp">
                        @elseif ($post->photo)
                            <img class="mt-2" src="{{ Storage::url($post->photo)}}" alt="photo">
                        @endif
                        
                    </div>
                </div>

                <br><br>
                
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>

            <div><a href="/post/{{$post->id}}" class="text-white">Back</a></div>

        </div>
    </div>
</div>
