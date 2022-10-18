@extends('adminlte::page')

@section('title', 'Administrador')

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
	
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	
@stop

@section('content_header')
    
@stop

@section('content')

   
        
    
 
               
                
                 
                
                     <div class='w-full md:w-1/2 px-3 mb-6'>
                            @if (session('Info'))
                            <div class="alert alert-success">
                                <strong>
                                    {{session('Info')}}
                                </strong>    
                            </div>
                        )
                    
                        @endif
                                <p class="h5">Nombre</p>
                                <p class="form-control">{{$useres->name}}</p>
                        </div>
                        
                        <h2 class="h5"> Listado de roles</h2>
                        @can('useres.edit')
                        {!! Form::model($useres, ['route' => ['useres.update' , $useres], 'method' => 'put']) !!}
                                @foreach ($roles as $role)
                                    <div>
                                        <label>
                                            {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                                            {{$role->name}}
                                        </label>
                                    </div>
                                @endforeach


                                {!! Form::submit('Asignar rol', ['class' => 'btn btn-primary mt-2']) !!}
                        {!! Form::close() !!}
                        <br>
                        <form action="{{ route ('useres.destroy' , $useres->id)}}" method="POST" class="formulario-eliminar">
                            <button class="btn btn-danger mt-2" type="submit">
                                Eliminar usuario
                            </button>
                            @csrf
                            @method('DELETE')
                            <br>
                            <br>
                            <button class="btn btn-secondary mt-2" type="button"><a href="{{ route('useres.index') }}">Hecho</a></button>
                                </button>
					</form>
                             @endcan   
            </div>
        </div>
    </div>
</body>

@stop



@section('js')
    <script> console.log('Hi!'); </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>

        $('.formulario-eliminar').submit(function(e){
            e.preventDefault();
            Swal.fire({
            title: '¿De verdad quiere eliminar este usuario señor?',
            text: "Aqui entre nosotros ¿Que te hizo?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, aqui mando yo',
            cancelButtonText: 'Quizas merezca una oportunidad'
            }).then((result) => {
            if (result.isConfirmed) {
                // Swal.fire(
                // 'Deleted!',
                // 'Your file has been deleted.',
                // 'success'
                // )
                this.submit();
            }
            })
        });
    
    </script>
	
@stop