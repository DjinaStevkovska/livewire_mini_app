<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="row">
        
        <div class="w-50">
                   
            <div class="mt-3 mb-3">
                @if ($successMessage)
                <div class="alert alert-success alert-dismissible show" role="alert">
                    <strong>Success: </strong>{{ $successMessage }}
                    {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"> --}}
                    <button type="button" class="close" wire:click="$set('successMessage', null)">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
            </div>


            <div class="col-sm-2"></div>
            <h2 class="mb-5">Contact Us</h2>

            <form class="form-horizontal" wire:submit.prevent="sendContactForm">
                @csrf

                {{-- @if (session('success'))
                <div class="alert alert-warning" role="alert">
                    <strong>Note: </strong>
                    {{ (session('success'))}}
                  </div>
                @endif --}}

                <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Name:</label>
                    <div class="col-sm-10">
                        {{ $name }}
                        <input wire:model.lazy="name"
                        type="name" 
                        class="form-control 
                        @error('name') border border-danger @enderror" 
                        id="name" 
                        placeholder="Enter name" 
                        name="name"
                        value="{{ old('name')}}"
                        >

                        @error('name')
                            <p class="text-danger font-weight-bold">{{ $message }}</p>
                        @enderror
                    </div>
                </div>	

                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                    <input  wire:model.lazy="email"
                    type="email" 
                    class="form-control
                    @error('email') border border-danger @enderror" 
                    id="email" 
                    placeholder="Enter email" 
                    name="email"
                    value="{{ old('name')}}"
                    >

                    @error('email')
                        <p class="text-danger font-weight-bold">{{ $message }}</p>
                    @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="message">Message:</label>
                    <div class="col-sm-10">          
                    <textarea wire:model.lazy="message"
                    type="message" 
                    class="form-control 
                    @error('message')border border-danger @enderror" 
                    id="message" 
                    placeholder="Enter message" 
                    name="message"
                    rows="3">{{ old('message')}}
                    </textarea>

                    @error('message')
                        <p class="text-danger font-weight-bold">{{ $message }}</p>
                    @enderror
                    </div>

                </div>

                <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label><input type="checkbox" name="remember"> Remember me</label>
                    </div>
                    </div>
                </div>

                <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                            <button class="btn btn-primary" type="submit">
                            <span wire:loading wire:target="sendContactForm" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            <span>Submit</span>
                        </button>
                    </div>
                </div>

            </form>            
        </div>
    </div>
</div>
