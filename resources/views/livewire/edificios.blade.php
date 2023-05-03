<div>
<div class="flex flex-col items-center">
  <p class="text-lg font-bold mb-4">Haz clic en el edificio que deseas ver</p>
</div>
<livewire:servicios />
  <div class="flex justify-center items-center">
    <img src="{{ asset('imagenes/mapa.jpg') }}" width="980" usemap="#mapa_zonas" />
</div>

<map name="mapa_zonas">
    <area shape="rect" coords="122,136,185,198" alt="Edificio N" wire:click="mostrarEdificio(17)"/>
    <area shape="rect" coords="220,137,295,195" alt="Edificio M" wire:click="mostrarEdificio('15')" />
    <area shape="rect" coords="265,210,290,231" alt="Exterior" wire:click="mostrarEdificio('14')" />
    <area shape="rect" coords="221,242,296,307" alt="Edificio L" wire:click="mostrarEdificio('12')" />
    <area shape="rect" coords="324,231,406,256" alt="Edificio F" wire:click="mostrarEdificio('6')" />
    <area shape="rect" coords="413,273,503,298" alt="Edificio D" wire:click="mostrarEdificio('4')" />
    <area shape="rect" coords="381,181,446,207" alt="Edificio H" wire:click="mostrarEdificio('8')" />
    <area shape="rect" coords="427,224,502,255" alt="Edificio E" wire:click="mostrarEdificio('5')" />
    <area shape="rect" coords="483,181,517,206" alt="Edificio G" wire:click="mostrarEdificio('7')" />
    <area shape="rect" coords="525,146,561,208" alt="Edificio K" wire:click="mostrarEdificio('11')" />
    <area shape="rect" coords="578,256,659,282" alt="Edificio C" wire:click="mostrarEdificio('3')" />
    <area shape="rect" coords="577,298,635,323" alt="Edificio A" wire:click="mostrarEdificio('1')" />
    <area shape="rect" coords="648,297,683,323" alt="Edificio B" wire:click="mostrarEdificio('2')" />
    <area shape="rect" coords="408,425,432,447" alt="Edificio J" wire:click="mostrarEdificio('10')" />
</map>

@if ($mostrarModal)
    <div class="fixed z-10 inset-0 overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen px-4">
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-3xl sm:w-full">
                <div class="bg-gray-100 px-4 py-3 border-b border-gray-200">
                    <h3 class="text-lg text-center font-medium leading-6 text-gray-900">{{ $nombreEdificio->nombre }}</h3>
                </div>
                <div class="px-4 py-5 sm:p-6">
                    <div class="grid grid-cols-3 gap-4">
                        @foreach($nombreEdificio->departamentos as $departamento)
                            <div class="bg-gray-100 rounded-md shadow-md px-4 py-6 flex flex-col items-center justify-center transition duration-500 ease-in-out transform hover:-translate-y-1 hover:shadow-lg hover:bg-gray-200">
                                <div class="text-lg font-bold text-gray-700">{{ $departamento->nombre }}</div>
                                <div class="text-sm text-gray-600">{{ $departamento->encargado }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button wire:click="$set('mostrarModal', false)" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
@endif


</div>
<script src="https://cdn.tailwindcss.com"></script>