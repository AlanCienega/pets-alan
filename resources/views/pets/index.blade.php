<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mascotas</title>
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
  <form action="/pets" method="POST">
    @csrf
    <label for="name">Nombre:</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="description">Descripción:</label>
    <input type="text" id="description" name="description"><br><br>
    <label for="type">Tipo:</label>
    <select name="type" id="type">
      <option value="dog">Cat</option>
      <option value="cat">Dog</option>
      <option value="turtle">Turtle</option>
    </select>
    <label for="birth_date">Fecha de nacimiento:</label>
    <input type="date" id="birth_date" name="birth_date"><br><br>
    <input type="submit" value="Submit">
  </form>
  <table>
    <tr>
      <th>Name</th>
      <th>Description</th>
      <th>Type</th>
      <th>Numer of days old</th>
      <th>Pet walks</th>
    </tr>
    <tbody>
      @foreach ($pets as $pet)
      <tr>
        <td>{{ $pet->name }}</td>
        <td>{{ $pet->description }}</td>
        <td>{{ $pet->type }}</td>
        <td>{{ $pet->days_since_birth }}</td>
        <td colspan="{{count($pet->walks)}}">
          @foreach ($pet->walks as $walks)
          {{ $walks->location }}
          <br>
          @endforeach
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>

</html>