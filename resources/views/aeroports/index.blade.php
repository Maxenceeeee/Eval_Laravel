<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>Index Aeroport</title>
    </head>

    <body style="text-align: center">
        <h1>Aeroports</h1>
        <div>
            @if(session()->has('success'))
                <div>
                    {{session('success')}}
                </div>
            @endif
        </div>
        <div>
            <div>
                <a href="{{route('aeroports.create')}}">Ajouter un aeroport</a>
                <div>&nbsp;&nbsp;</div>
                <a href="{{route('aeroports.main')}}">Retour à la page principal</a>
            </div>
            <br>
            <table border="1" style="margin-left: auto; margin-right: auto">
                <tr>
                    <th>Id &nbsp;&nbsp;</th>
                    <th>Nom Aeroport &nbsp;&nbsp;</th>
                    <th>Ville &nbsp;&nbsp;</th>
                    <th>Ville &nbsp;&nbsp;</th>
                    <th>Nombre de Piste &nbsp;&nbsp;</th>
                    <th>Edit &nbsp;&nbsp;</th>
                    <th>Delete &nbsp;&nbsp;</th>
                </tr>
                @foreach($aeroports as $aeroports)
                    <tr>
                        <td style="text-align: center;">{{$aeroports->id}}</td>
                        <td style="text-align: center;">{{$aeroports->nom_aeroport}}</td>
                        <td style="text-align: center;">{{$aeroports->ville_aeroport}}</td>
                        <td style="text-align: center;">{{$aeroports->code}}</td>
                        <td style="text-align: center;">{{$aeroports->nombre_piste}}</td>
                        <td style="text-align: center;">
                            <a href="{{route('aeroports.edit', ['aeroports' => $aeroports])}}">Edit</a>
                        </td>
                        <td style="text-align: center;">
                            {{-- <form method="post" action="{{route('aeroports.destroy'), ['aeroports' => $aeroports]}}"> --}}
                            <form method="post" action="{{route('aeroports.destroy', [$aeroports])}}">
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
