<!DOCTYPE html>
<html>
<head>
 <title>Laravel Addition to Database</title>
</head>
<body>

 <h2 style="text-align: center">Une entrée a été créé dans la base de donnée Aeroport</h2>

 <h4>Information concernant l'aeroport ajouté :</h4>
 <div >
    <li>
        <ul><strong>Nom :</strong>{{ $aeroports->nom_aeroport }}</ul>
        <ul><strong>Ville :</strong>{{ $aeroports->ville_aeroport }}</ul>
        <ul><strong>Code :</strong>{{ $aeroports->code }}</ul>
        <ul><strong>Nombre de Piste :</strong>{{ $aeroports->nombre_piste }}</ul>
    </li>
 </div>
 

</body>
</html> 

