<h4>Cadastro Org</h4>
@foreach ($orgs as $key => $org)
    <h1>{{ $org->nome }}</h1>
@endforeach