<div>
    {{-- Do your work, then step back. --}}
    <form class="form-inline">

        <div class="nav-item dropdown">
              <input wire:model.debounce.300ms="search"
                class="form-control nav-link dropdown-toggle" 
                type="search" 
                id="navbarDropdownMenuLink" 
                data-toggle="dropdown"
                aria-haspopup="true" 
                aria-expanded="false"
                placeholder="Search" 
                aria-label="Search"
                autocomplete="on"
                style="width: 500px"
                >

            @if (strlen($search) > 3)
            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink" style="width: 500px">
                <div style="
                        overflow-y: scroll;
                        height: 400px;
                        width: 500px;
                        overflow-y: scroll;
                    ">
                    @forelse ($searchResults as $result)
                        <li>
                            <a 
                                @if (array_key_exists('trackViewUrl', $result))
                                    href="{{ $result['trackViewUrl'] }}"
                                @else
                                    href=""
                                @endif
                                class="dropdown-item m-2">

                                <div class="row">
                                    <img src="{{ $result['artworkUrl60']}}" alt="" class="mr-3">
                                    <div class="">
                                        <div class="h6">{{ $result['trackName']}}</div>
                                        <div class="text-muted">{{ $result['artistName']}}</div>
                                    </div>
                                </div>
                            </a>
                        </li>      
                    @empty
                        <li class="m-2">
                            No results were found " {{ $search }} "
                        </li>
                    @endforelse
                </div>
            </div>    
            @endif

        </div>

      </form>
</div>
