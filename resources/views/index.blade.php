@extends('layouts.app')
@section('content')
                    <h1 class="text-center">Applicatie opvolging dossiers & activiteiten.</h1>
<div>
    <form action="/">
        @csrf
        <label for="familieNaam">Familie</label>
        <input type="text" name="familieNaam">
    </form>
    <table class="table table-light table-hover">
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
            <tr onclick="window.location='{{ route('gezin', $gezin->{'ID Gezin'}) }}'">
                <td scope="row">
                    <img style="height: 1em" src="<?= asset('images/clipart59277.png') ?>" alt="internal-link"> 
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