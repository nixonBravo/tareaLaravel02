<div>

    <!-- Formulario -->
    <div class="card card-primary" wire:ignore.self>
        <!-- Formulario Frutas -->
        <div class="card-header">
            <h3 class="card-title">Formulario Jugador</h3>
        </div>
        <form @if($Id==0) wire:submit.prevent="insert" @else wire:submit.prevent="update('{{$Id}}')" @endif>
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" wire:model.lazy="nombre" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label>Apellido</label>
                    <input type="text" class="form-control" wire:model.lazy="apellido" placeholder="Apellodo">
                </div>
                <div class="form-group">
                    <label>Numero</label>
                    <input type="number" class="form-control" wire:model.lazy="numero" placeholder="Numero">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
    <!-- /.formulario -->

    <!-- Formulario Button -->
    {{-- <button type="button" wire:click="insert" class="btn-outline-primary btn-lg" data-bs-target="#FormaModal">Add</button>
            --}}
    <!-- /.formulario button -->

    <!-- Tabla -->

    <div class="row">
        <div class="col-md-12 ">
            <div class="card-header">
                <h3 class="card-title">Jugadores</h3>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr style="text-align: center">
                            <th>Item</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Numero</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jugadores as $jugador)
                            <tr style="text-align: center">
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $jugador->nombre }}</td>
                                <td>{{ $jugador->apellido }}</td>
                                <td>{{ $jugador->numero }}</td>
                                <td>
                                    <button wire:click="edit({{ $jugador->id }})" class="text-muted">
                                        <i class="fas fa-edit"></i>
                                    </button>

                                    <button wire:click="delete({{ $jugador->id }})" style="border: none">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- /.tabla -->
</div>
