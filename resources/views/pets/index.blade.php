<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mascotas</title>
</head>
<body>
  <!-- tabla para mostrar name, description, type-->
   <table>
      <tr>
         <th>Name</th>
         <th>Description</th>
         <th>Type</th>
         <th>Numer of days old</th>
      </tr>
      <tbody>
        @foreach ($pets as $pet)
            <tr>
                <td>{{ $pet->name }}</td>
                <td>{{ $pet->description }}</td>
                <td>{{ $pet->type }}</td>
                <td>{{ $pet->days_since_birth }}</td>
            </tr>
        @endforeach
      </tbody>
   </table>
</body>
</html>