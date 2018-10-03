<h4>Organizações</h4>
@foreach ($orgs as $key => $org)
    {{-- <h1>{{ $org->nome }}</h1> --}}
@endforeach

<div id="bordered-table">    
    <div class="row">
        <div class="col s12">
            <table class="bordered">
                <thead>
                    <tr>
                    <th data-field="id">ID</th>
                    <th data-field="name">Nome</th>                    
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orgs as $key => $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->nome}}</td>
                            <td>
                                <a style="margin-right: 2em" href="#!" class="mdi-editor-border-color btn-tableActions-orgs" onclick="gridActionsOrgs({{$item->id}}, 'edit')"></a>
                                <a href="#!" class="mdi-navigation-close btn-tableActions-orgs" onclick="gridActionsOrgs({{$item->id}}, 'delete')"></a>
                            </td>
                        </tr>    
                    @endforeach                                
                </tbody>
            </table>
        </div>
        <a href="#!" style="margin-top: 2em;" class="waves-effect waves-light btn cyan darken-2" id="btn-new-org" onclick="newOrganization()">Nova</a>
    </div>
</div>
