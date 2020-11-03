<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

    <div class="p-4 w-50 mx-auto">

        <div class="mb-3">
            @if ($successMessage)
            <div class="alert alert-success alert-dismissible show" role="alert">
                <strong>
                    {{ $successMessage }}
                </strong>
                <button type="button" class="close" wire:click="$set('successMessage', null)">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
        </div>


        <form wire:submit.prevent="postComment"
            {{-- action="{{ route('comment.store', $post)}}" 
            method="POST" --}}
            >
            @csrf
    
            <textarea wire:model.defer="comment"
            name="comment"  
            class="w-100
            @error('name') border border-danger @enderror"  
            placeholder="Write a new comment..."
            required
            ></textarea>
    
            @error('comment')
                <p class="text-danger font-weight-bold">{{ $message }}</p>
            @enderror

            <br>
    
            <div class="flex justify-content-between">
                {{-- <img src="{{ auth()->user()->photo }}" alt="photo" height="40px" width="40px" class="mr-3 rounded-circle"> --}}
                <span><strong>Djina Stevkovska</strong></span>
                <button type="submit" class="btn btn-primary float-right">
                    <span>Post Comment</span>
                    <span wire:loading wire:target="postComment" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                </button>
            </div>
    
        </form>
    
        @error('body')
            <small class="text-danger">{{ $message}}</small>   
        @enderror
    </div>

    
    <div class="p-4 w-50 mx-auto m-0"
        {{-- style="
            overflow-y: scroll;
            height: 400px;
            width: 500px;
            overflow-y: scroll;
        " --}}
    >
    @foreach ($post->comments->sortDesc() as $comment)
            <img src="" alt="">
            <div><strong>{{ $comment->username }}</strong>
                <div class="float-right">
                    <small>
                        {{ ($comment->created_at)->format('d F Y') }} at {{ ($comment->created_at)->format('H:i') }}
                    </small>
               </div>
            </div>
            
            <div class="mt-1">
                {{ $comment->content}}
            </div>
        <hr>
    @endforeach
    </div>
</div>
