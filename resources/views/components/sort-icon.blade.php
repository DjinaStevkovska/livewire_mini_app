<div>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->

    <div wire:click="sortBy('{{$field}}')">{{ ucwords($field) }}
        @if ($sortField !== $field)
            <span></span>
        @elseif ($sortAsc)
            <i class="icon-sort-up"></i>
        @else 
            <i class="icon-sort-down"></i>
        @endif
    </div>
    
</div>