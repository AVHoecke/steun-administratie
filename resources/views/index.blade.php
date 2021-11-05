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
                <th scope="col">Id</th>
                <th scope="col">Details</th>
            </tr>
        </thead>
        @isset($gezinnen)
        <tbody>
            @foreach ($gezinnen as $gezin)
            <tr>
                <td scope="row">
                    <?= $gezin->Naam ?>
                </td>
                <td scope="row">
                    <?= $gezin->Code ?>
                </td>
                <td scope="row">
                    <?= 'Je moet kloppen want de bel doet het niet.' ?>
                </td>
            </tr>
            @endforeach
        </tbody>
        @endisset
    </table>
</div>
@endsection