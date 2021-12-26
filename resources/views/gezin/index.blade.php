@extends('layouts.app')
@section('content')
<h1 class="text-center"><?= $gezin->Naam ?></h1>
<div class="d-flex justify-content-end">
    <ul class="list-group">
        <h5>Contactgegevens:</h5>
        <li class="list-group-item"><?= $gezin->Adres ?></li>
        <li class="list-group-item"><?= $gezin->Telefoon ?></li>
        <li class="list-group-item"><?= $gezin->Email ?></li>
    </ul>
</div>
<div>
    <table class="table table-light">
        <thead>
            <tr>
                <th colspan="4"><h4 class="text-center">Steun Ontvangers</h4></th>
            </tr>
            <tr>
                <th scope="col">Naam</th>
                <th scope="col">Familienaam</th>
                <th scope="col">Info</th>
                <th scope="col">Details</th>
            </tr>
        </thead>
        @isset($steunOntvangers)
        <tbody>
            @foreach ($steunOntvangers as $steunOntvanger)
{{--             <tr onclick="window.location='{{ route('steunOntvanger', $steunOntvanger->{'ID Steun Ontvanger'}) }}'">
 --}}                <tr>
                <td scope="row">
                    <?= $steunOntvanger->Voornaam ?>
                </td>
                <td scope="row">
                    <?= $steunOntvanger->Familienaam ?>
                </td>
                <td scope="row">
                    <a href="<?= $steunOntvanger->{'URL Info'}?>">Google Drive</a>
                <td scope="row">
                    <?= $steunOntvanger->Details ?>
                </td>
            </tr>
            @endforeach
        </tbody>
        @endisset
    </table>
</div>
@endsection