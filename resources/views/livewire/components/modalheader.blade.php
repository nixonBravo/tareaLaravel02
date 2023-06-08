<div class="card card-primary" id="FormaModal">
    <!-- Formulario Frutas -->
    <div class="card-header">
        <h3 class="card-title">Formulario Jugador</h3>
    </div>
    <form action="{{ url('/') }}" method="POST">
        @csrf
        <div class="card-body">
           