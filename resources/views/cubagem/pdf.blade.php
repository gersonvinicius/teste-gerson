<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <h3>Valores das cubagens</h3>
    <table>
        <thead>
            <tr>
                <td>id </td>
                <td>valor</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($cubagens as $cubagem)
                <tr>
                    <td>{{ $cubagem['id'] }} </td>
                    <td>{{ $cubagem['valor'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
  </body>
</html>
