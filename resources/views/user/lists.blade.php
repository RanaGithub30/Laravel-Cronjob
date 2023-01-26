<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
     <table>
        <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        </tr>

        @foreach($lists as $list)
           <tr>
              <td>{{ $list->id }}</td>
              <td>{{ $list->name }}</td>
              <td>{{ $list->email }}</td>
           </tr>
        @endforeach
     </table>
</body>
</html>