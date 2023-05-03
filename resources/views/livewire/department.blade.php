<div>
    <div class="font-semibold text-xl text-gray-800 leading-tight bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <h1>Gestion de Departamentos ITS MOTUL</h1>

    <input wire:model.lazy="search" type="text" name="buscador">
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Edificio</th>
            </tr>            
        </thead>
        <tbody>
            @foreach($departaments as $department)
            <tr>
                <th>{{$department -> nombre}}</th>
                <th></th>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>

</div>
