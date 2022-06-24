<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pacientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <a type="button" href="{{ route('pacientes.create') }}" class="bg-indigo-500 px-12 py-2 rounded text-gray-200 font-semibold hover:bg-indigo-800 transition duration-200 each-in-out">Agregar</a>
                <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-800 text-white">
                        <th class="border px-4 py-2">Documento</th>
                        <th class="border px-4 py-2">Tipo Documento</th>
                        <th class="border px-4 py-2">Nombres</th>
                        <th class="border px-4 py-2">Apellidos</th>
                        <th class="border px-4 py-2">Dirección</th>
                        <th class="border px-4 py-2">Telefono</th>
                        <th class="border px-4 py-2">Género</th>
                        <th class="border px-4 py-2">Fecha Nacimiento</th>
                        <th class="border px-4 py-2">Estado Civil</th>
                        <th class="border px-4 py-2">Acciones</th>
                        
                    </tr>  
                </thead>    
                <tbody>
                    @foreach ($pacientes as $paciente)
                    <tr>
                        <td style="display: none;">{{$paciente->id}}</td>
                        <td>{{$paciente->documento}}</td>
                        <td>{{$paciente->tipoDocumento}}</td>
                        <td>{{$paciente->nombres}}</td>
                        <td>{{$paciente->apellidos}}</td>
                        <td>{{$paciente->direccion}}</td>
                        <td>{{$paciente->telefono}}</td>
                        <td>{{$paciente->genero}}</td>
                        <td>{{$paciente->fechaNacimiento}}</td>
                        <td>{{$paciente->estadoCivil}}</td>
                                                
                        <td class="border px-4 py-2">
                            <div class="flex justify-center rounded-lg text-lg" role="group">
                                <!-- botón editar -->
                                <a href="{{ route('pacientes.edit', $paciente->id) }}" class="rounded bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4">Editar</a>

                                <!-- botón borrar -->
                                <form action="{{ route('pacientes.destroy', $paciente->id) }}" method="POST" class="formEliminar">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="rounded bg-pink-400 hover:bg-pink-500 text-black font-bold py-2 px-4">Borrar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach   
                </tbody>  
                     
            </table>   
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    (function () {
  'use strict'
  //debemos crear la clase formEliminar dentro del form del boton borrar
  //recordar que cada registro a eliminar esta contenido en un form  
  var forms = document.querySelectorAll('.formEliminar')
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {        
          event.preventDefault()
          event.stopPropagation()        
          Swal.fire({
                title: '¿Confirma la eliminación del registro?',        
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#20c997',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Confirmar'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                    Swal.fire('¡Eliminado!', 'El registro ha sido eliminado exitosamente.','success');
                }
            })                      
      }, false)
    })
})()
</script>