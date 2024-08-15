<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Walks</title>
    <style>
        td {
            border: 1px solid black;
        }

        tr>th {
            background-color: gray;
            color: white
        }
    </style>
</head>

<body>
    <div>
        <div style="padding: 3px;">
            <a href="/pets" style="background-color: blueviolet; color: white; padding: 2px; border-radius: 10%;">Regresar</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Mascota</th>
                    <th>Lugar</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                @foreach($petWalks as $walk)
                <tr>
                    <td> {{$walk->pet->name}} </td>
                    <td> {{$walk->location}} </td>
                    <td> {{$walk->walk_date}} </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>