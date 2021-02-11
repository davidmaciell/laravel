<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
        html{
            width: 100%;
            height: 100%;
            }
        body{
            width: 100%;
            height: 100%;
            }
        #formulario{
            width: 500px;
            height: 500px;
            color: blueviolet;
            margin-top: 90px
        }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Usuarioss</title>
</head>
<body>
                    
<form action="{{route('users.edit', ['user' => $user->id]) }}" method="post" class="container justify-content center " id="formulario">
    @csrf
    @method('PUT') <!--no html não tenho o metodo put para iformar no method então coloco ele aqui
    para que aceite-->
        <div class="form-group">
            <label for="">Nome do Usuário: </label>
            <input type="text" class="form-control" id="" placeholder="Nome" name="name" value={{$user->name}}>
        </div>

        <div class="form-group">
          <label for="">E-mail do Usuários: </label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value={{$user->email}}>
        </div>

        <div class="form-group">
          <label for="">Senha do Usuário: </label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary">Editar</button>

      </form>
    

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>