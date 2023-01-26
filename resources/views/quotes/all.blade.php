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
        <th>Random Id</th>
        <th>Quote</th>
        </tr>

        @foreach($quotes as $quote)
           <tr>
              <td>{{ $quote->id }}</td>
              <td>{{ $quote->random_id }}</td>
              <td>{{ $quote->quotes }}</td>
           </tr>
        @endforeach
     </table>
</body>
</html>