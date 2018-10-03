@if(!isset($organizacao))
    <h4>Inserindo Organização</h4>
@else
    <h4>Editando Organização</h4>
@endif

<div class="col s12 m12 l6">
    <div class="card-panel">          
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12">                                                   
                        Nome
                        @if(!isset($organizacao))
                            <input placeholder="" id="name-org" name="name-org" type="text" value=""/>                        
                        @else
                            <input placeholder="" id="name-org" name="name-org" type="text" value="{{$organizacao['nome']}}"/>                        
                        @endif                        
                    </div>
                </div>
                @if(!isset($organizacao))
                    <a href="#!" style="margin-top: 2em;" class="waves-effect waves-light btn cyan darken-2" id="btn-new-org" onclick="insertOrganization()">Inserir</a>
                    <a href="#!" style="margin-top: 2em;" class="waves-effect waves-light btn cyan darken-2" id="btn-new-org" onclick="backListOrg()">Cancelar</a>
                @else
                    <a href="#!" style="margin-top: 2em;" class="waves-effect waves-light btn cyan darken-2" id="btn-new-org" onclick="editOrganization({{$organizacao['id']}})">Editar</a>
                    <a href="#!" style="margin-top: 2em;" class="waves-effect waves-light btn cyan darken-2" id="btn-new-org" onclick="backListOrg()">Cancelar</a>
                @endif
            </form>
        </div>
    </div>
</div>
              