@extends('layouts.app')


@section('content')
    <div class="container">
        <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">Torna alla lista Progetti</a>
        <h1>Crea un Progetto</h1>
        <form action="{{ route('admin.projects.store') }}" method="POST" class="mt-5">
            @csrf

            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" />

            <label for="content" class="form-label">Descrizione</label>
            <textarea class="form-control" id="content" name="content" rows="4"></textarea>

            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" />

            <button type="submit" class="btn btn-success mt-5">Salva</button>
        </form>
    </div>
@endsection
