@extends('layouts.master')
@section('content')
<h1>Gezinnen.</h1>
<div>
    <table class="table table-light">
        <thead>
            <tr>
                <th scope="col">Naam</th>
                <th scope="col">Id</th>
                <th scope="col">Details</th>
            </tr>
        </thead>
        <tbody>
            @php 
             foreach ($gezinnen as $gezin) {
            @endphp
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
            @php }
            @endphp
        </tbody>
    </table>
</div>
@endsection