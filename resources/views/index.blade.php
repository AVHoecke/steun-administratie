@extends('layouts.app')
@section('content')
    <h1 class="text-center">Applicatie opvolging dossiers & activiteiten.</h1>
<div>
    <form action="/">
        @csrf
        <label for="familieNaam">Familie</label>
        <input type="text" name="familieNaam">
    </form>
    <table class="table table-light">
        <thead>
            <tr>
                <th scope="col">Naam</th>
                <th scope="col">Adres</th>
                <th scope="col">Details</th>
            </tr>
        </thead>
        @isset($gezinnen)
        <tbody>
            @foreach ($gezinnen as $gezin)
            <!-- re-read to learn once: this results in the same url-->
            <!-- onclick="window.location='{{ route('gezin', $gezin->Code) }}'" -->
            <!-- onclick="window.location='{{ route('gezin', ['code' => $gezin->Code]) }}'" -->
            <tr onclick="window.location='{{ route('gezin', $gezin->Code) }}'">
                <td scope="row">
                    <?= $gezin->Naam ?>
                </td>
                <td scope="row">
                    <?= $gezin->Adres ?>
                </td>
                <td scope="row">
                @if($gezin->Details)
                    <?= $gezin->Details ?>
                @else
                    <?= 'Je moet kloppen want de bel doet het niet.' ?>
                @endif
                </td>
        </tr>
            @endforeach
        </tbody>
        @endisset
    </table>
</div>
@endsection