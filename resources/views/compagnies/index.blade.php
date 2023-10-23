<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>Index Compagnie</title>
    </head>

    <body style="text-align:center">
        <h1><strong>Compagnies</strong></h1>
        <br>
        <div>
            @if(session()->has('success'))
                <div>
                    {{session('success')}}
                </div>
            @endif
        </div>
        <div>
            <div>
                <a href="{{route('compagnies.create')}}" class="btn btn-primary">Ajouter une compagnie</a>
                <div>&nbsp;&nbsp;</div>
                <a href="{{route('aeroports.main')}}" class="btn btn-secondary">Retour à la page principal</a>
            </div>
            <br>
            <table class="table table-striped" border="1" style="margin-left: auto; margin-right: auto">
                <tr>
                    <th>Id &nbsp;&nbsp;</th>
                    <th>Nom Compagnie &nbsp;&nbsp;</th>
                    <th>Pays Compagnie &nbsp;&nbsp;</th>
                    <th>Edit &nbsp;&nbsp;</th>
                    <th>Delete &nbsp;&nbsp;</th>
                </tr>
                @foreach($compagnies as $compagnies)
                    <tr>
                        <td style="text-align: center;">{{$compagnies->id}}</td>
                        <td style="text-align: center;">{{$compagnies->nom_compagnie}}</td>
                        <td style="text-align: center;">{{$compagnies->pays}}</td>
                        <td style="text-align: center;">
                            <a href="{{route('compagnies.edit', ['compagnies' => $compagnies])}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td style="text-align: center;" >
                            {{-- <form method="post" action="{{route('compagnies.destroy'), ['compagnies' => $compagnies]}}"> --}}
                            <form method="post" action="{{route('compagnies.destroy', [$compagnies])}}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete"/>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        <br><br>

        </div>
    </body>
</html>
