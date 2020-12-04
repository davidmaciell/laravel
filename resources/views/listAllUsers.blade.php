<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de Usuarios</title>
    <style>
        html{
            height: 100%;
            width: 100%
            }
        body{
            height: 100%;
            width: 100%;
        }
        table{
            display: flex;
            justify-content: center;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1.6em;
            
        }
        table td {
            padding: 0.5em;
        }

    </style>
</head>
<body>
    
    <table>
        <tr>
            <td>#ID</td>
            <td>Nome: </td>
            <td>E-mail: </td>
            <td>Ações: </td>
        </tr>

        @foreach ($usuarios as $user)
            <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            </tr>
        @endforeach

    </table>

</body>
</html>