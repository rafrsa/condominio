<h4>Cadastro Org</h4>
@foreach ($orgs as $key => $org)
    {{-- <h1>{{ $org->nome }}</h1> --}}
@endforeach

<div id="bordered-table">
    <h4 class="header">Headers</h4>
    <div class="row">
        <div class="col s12">
            <table class="bordered">
            <thead>
                <tr>
                <th data-field="id">Name</th>
                <th data-field="name">Item Name</th>
                <th data-field="price">Item Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>Alvin</td>
                <td>Eclair</td>
                <td>$0.87</td>
                </tr>
                <tr>
                <td>Alan</td>
                <td>Jellybean</td>
                <td>$3.76</td>
                </tr>
                <tr>
                <td>Jonathan</td>
                <td>Lollipop</td>
                <td>$7.00</td>
                </tr>
                <tr>
                <td>Shannon</td>
                <td>KitKat</td>
                <td>$9.99</td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>
