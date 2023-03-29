@extends('persoon.layout')

{{-- this is the peronen --}}
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Alle personen</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="{{ route('persoon.create') }}" class="btn btn-success">Nieuwe persoon</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Voornaam</th>
                        <th>Achternaam</th>
                        <th>Geboortedatum</th>
                        <th>Acties</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($personen as $persoon)
                    <tr>
                        <td>{{ $persoon->voornaam }}</td>
                        <td>{{ $persoon->achternaam }}</td>
                        <td>{{ $persoon->geboortedatum }}</td>
                        <td>
                            <a href="{{ route('persoon.show', $persoon->id) }}" class="btn btn-primary">Bekijk</a>
                            <a href="{{ route('persoon.edit', $persoon->id) }}" class="btn btn-warning">Wijzig</a>
                            <form action="{{ route('persoon.destroy', $persoon->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Verwijder</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection