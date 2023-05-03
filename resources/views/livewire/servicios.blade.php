<div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
  <form wire:submit.prevent="buscar" class="bg-white shadow-md rounded-md p-4 animate__animated animate__fadeInDown">
    <div class="flex items-center space-x-4">
      <input wire:model.debounce.500ms="busqueda" type="text" class="form-input rounded-l-md flex-grow border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Buscar por edificio o departamento">
    </div>
  </form>

<div class="bg-white shadow-md rounded-md p-4 animate__animated animate__fadeInDown">
  @if($resultados)
    <div class="overflow-x-auto">
      <table class="table-auto min-w-full">
        <thead class="bg-gray-50">
          <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">Ver Detalles</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          @foreach($resultados as $edificio)
            <tr class="hover:bg-gray-100 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:shadow-lg">
              <td class="px-6 py-4 whitespace-nowrap">{{ $edificio->nombre }}</td>
              <td class="px-6 py-4 whitespace-nowrap text-center">
                <ul class="space-y-1">
                  @foreach ($edificio->departamentos as $departamento)
                    <li>
                      <a href="#" wire:click.prevent="servi({{ $departamento->id }})" class="text-indigo-600 hover:underline">{{ $departamento->nombre }}</a>
                    </li>
                  @endforeach
                </ul>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  @endif
</div>

</div>




@if ($mostrarModal)
    <div class="fixed z-10 inset-0 overflow-y-auto">
      <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <!-- Background overlay -->
        <div class="fixed inset-0 transition-opacity">
          <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <!-- Modal -->
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
          <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            <div class="sm:flex sm:items-start">
              <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
                <!-- Heroicon name: outline/exclamation -->
                
              </div>
              <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                <h3 class="text-lg leading-6 font-medium text-gray-900">{{ $servicio->nombre }}</h3>
    <div class="mt-2">
        <p class="text-sm text-gray-500">
        Servicios disponibles en este departamento:
        </p>
        <ul class="mt-2 text-sm text-gray-700">
        <li>{{ $servicio->servicio }}</li>
        </ul>
                </div>
            </div>
        </div>
    </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
            <button wire:click="cerrarModal()" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm">
            Cerrar
            </button>
            </div>
        </div>
    </div>
    </div>
    @endif


<script src="https://cdn.tailwindcss.com"></script>
<script>
    Livewire.on('limpiarResultados', function () {
        window.livewire.emit('limpiarResultados');
    });
</script>