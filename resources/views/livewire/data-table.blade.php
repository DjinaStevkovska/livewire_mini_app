<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day --}}

    <div class="container">
        <table class="table">
            <thead>
                <th>
                    <input wire:model="search" class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
                        aria-label="Search">
                </th>
                <th></th>
                <th></th>
                <th></th>
            </thead>
            <thead>
              <tr class="table-active">
                <th scope="col">
                    {{-- component --}}
                    <x-sort-icon
                        field="name"
                        :sortField='$sortField'
                        :sortAsc="$sortAsc"/>
                </th>
                <th scope="col">
                    {{-- component --}}
                    <x-sort-icon
                        field="email"
                        :sortField='$sortField'
                        :sortAsc="$sortAsc"/>
                </th>
                <th scope="col">Active
                    <input wire:model="active" type="checkbox">
                </th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
              <tr>
                {{-- <th class="align-middle" scope="row">{{ $user->id }}</th> --}}
                <td class="align-middle">{{ $user->name }}</td>
                <td class="align-middle">{{ $user->email }}</td>
                <td class="align-middle">
                    @if ($user->active === 0)
                        <div class="btn btn-danger btn-block btn-sm">Non-active</div>
                    @else
                        <div class="btn btn-success btn-block btn-sm">Active</div>
                    @endif
                </td>
                <td class="align-middle"><a href="/">Edit</a></td>
            </tr>

                @endforeach
            </tbody>
        </table>
        {{ $users->links() }}

    </div>
</div>
