@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Mis Currículums</h1>
    <a href="{{ route('cvs.create') }}" class="btn btn-success">Crear Nuevo Currículum</a>
    <ul class="mt-4">
        @forelse($cvs as $cv)
            <li>
                {{ $cv->title }}
                <!-- Botón para eliminar el currículum -->
                <form action="{{ route('cvs.destroy', $cv->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </li>
        @empty
            <p>No tienes currículums creados.</p>
        @endforelse
    </ul>
</div>
@endsection
