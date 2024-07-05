<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3 style="text-align: text-center;">Recu de Reclamation N ° : {{$rec->randomnumber}}</h3>
    <table style="text-align: justify;">

        <tr>
            <th style="text-align: justify;">Nom : </th>
            <td>{{$rec->nom}}</td>
        </tr>
        <tr>
            <th style="text-align: justify;">Telephone : </th>
            <td>{{$rec->tele}}</td>
        </tr>
        <tr>
            <th style="text-align: justify">N ° Dossier : </th>
            <td>{{$rec->numDossier}}</td>

        </tr>
        <tr>
            <th style="text-align: justify">Email : </th>
            <td>{{$rec->email}}</td>
        </tr>

    </table>
    <br>
    <table>
        <tr>
            <th>
                <fieldset>
                    <legend>Objet :</legend>
                    <p style="text-align: justify;">{{$rec->objet}}</p>
                </fieldset>
            </th>
        </tr>
        <tr>
            <th>
                <fieldset>
                    <legend>Description :</legend>
                    <p style="text-align: justify;">{{$rec->des}}</p>
                </fieldset>
            </th>
        </tr>
    </table>


</body>

</html>