<div>
    {{-- Be like water. --}}

    <div class="w-50 mx-auto">
        <h2>Events with tags</h2>
        <div
            wire:ignore
            style="width: 600px; height:200px;"
            class="textarea mb-5"
            x-data
            x-init="
                new Taggle($el, {
                    {{-- tags: ['these', 'are', 'prefilled', 'tags'], --}}
                    tags: {{ $tags }},
                    onTagAdd: function(e, tag) {
                        {{-- alert('You just added ' + tag + ''); --}}
                        Livewire.emit('tagAdded', tag)
                    },
                    onTagRemove: function(e, tag) {
                        {{-- alert('You just removed ' + tag + ''); --}}
                        Livewire.emit('tagRemoved', tag)
                    },
                })

                Livewire.on('tagAddedFromBackend', tag => {
                    alert('A tag was added: ' + tag)
                })
            "
        >

        </div>
    </div>
</div>
