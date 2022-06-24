<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar datos paciente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
            <form action="{{ route('pacientes.update',$paciente->id) }}" method="POST" enctype="multipart/form-data"> 
            @csrf
            @method('PUT')
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                
                <div class="grid grid-cols-1">
                    <input value="{{$paciente->id}}" id="id" name="id" type="hidden" class="form-control" tabindex="1">    
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Documento:</label>
                    <input name="documento" value="{{ $paciente->documento }}" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" required/>
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Tipo Docuemnto:</label>
                    <select name="tipoDocumento" id="tipoDocumento" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                        <option value="{{ $paciente->tipoDocumento }}">{{ $paciente->tipoDocumento }}</option>
                        <option value="TI">TI</option>
                        <option value="CC">CC</option>
                        <option value="CE">CE</option>
                        <option value="PP">PP</option>
                    </select>
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Nombres:</label>
                    <input name="nombres" value="{{ $paciente->nombres }}" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" required/>
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Apellidos:</label>
                    <input name="apellidos" value="{{ $paciente->apellidos }}" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" required/>
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Dirección:</label>
                    <input name="direccion" value="{{ $paciente->direccion }}" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" required/>
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Telefono:</label>
                    <input name="telefono" value="{{ $paciente->telefono }}" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="number" required/>
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Género:</label>
                    <select name="genero" id="genero" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                        <option value="{{ $paciente->genero }}">{{ $paciente->genero }}</option>
                        <option value="M">M</option>
                        <option value="F">F</option>
                    </select>
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Fecha Nacimiento:</label>
                    <input name="fechaNacimiento" value="{{ $paciente->fechaNacimiento }}" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="date" required/>
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Estado Civil:</label>
                    <input name="estadoCivil" value="{{ $paciente->estadoCivil }}" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" required/>
                </div>
                </div>

                <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
                <a href="{{ route('pacientes.index') }}" class='w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Cancelar</a>
                <button type="submit">Guardar</button>
                </div>
            </form>

            </div>
        </div>
    </div>
</x-app-layout>
