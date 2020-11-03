 <div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div wire:poll.1ms="getRevenue">
        Current time: {{ now() }}
        Revenue: $ {{ $revenue }}
    </div>
</div>
