@extends('layouts.master')
@section('content')
    <h1 class="text-center">Gezin</h1>
<div>
    <table class="table table-light">
        <thead>
            <tr>
                <th scope="col">Naam</th>
                <th scope="col">Adres</th>
                <th scope="col">Telefoon</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">
                    <?= $gezin->Naam ?>
                </td>
                <td scope="row">
                    <?= $gezin->Adres ?>
                </td>
                <td scope="row">
                    <?= $gezin->Telefoon ?>
                </td>
                <td scope="row">
                    <?= $gezin->Email ?>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection