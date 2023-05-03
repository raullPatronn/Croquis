<div>
 
    <input wire:model.lazy="search" type="text" placeholder="Search users..."/>
    @if($search!='')
    <ul>
        @foreach($users as $user)
            <li>{{ $user->name }} | {{ $user->email}}</li>
        @endforeach
    </ul>
    @else 
       <p> weeeeeeeeeeeeeeeeeeeey noooooooooooooooo esta vacíoooooooo</p>
    @endif
</div>
