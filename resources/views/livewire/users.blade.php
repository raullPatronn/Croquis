<div>
    <div>
        @livewire('buscador-users')
    </div>
    <br>
    <h1>Aqui iria algo que escribiria jajajaj</h1>
    <p>{{$mensaje}}</p>
    <div>

    

    <br>
        <div>
    <table>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td><button wire:click="show({{$user->id}})">detalles</button></td>
            </tr>
        </tbody>
        @endforeach
    </table>



    </div>
    
    </div>
</div>
