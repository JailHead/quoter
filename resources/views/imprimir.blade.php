<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        h1,
        .subtitle {
            text-align: center;
            text-transform: uppercase;
        }

        .contenido {
            font-size: 20px;
        }

        #primero {
            background-color: #ccc;
        }

        #segundo {
            color: #44a359;
        }

        #tercero {
            text-decoration: line-through;
        }
    </style>
</head>

<body>
    <h1>Tus clientes</h1>
    <h3 class="subtitle">{{ $today }} | La informacion de tus clientes es la siguiente</h3>
    <hr>
    <ul class="contenido">
       @foreach ($clients as $client)
            <li>
                <h3>{{ $client->nombre }}</h3>
                <p>{{ $client->ubicacion }}</p>
                <p>{{ $client->email }}</p>
                <p>{{ $client->telefono }}</p>
                <p>{{ $client->created_at }}</p>
            </li>
       @endforeach 
    </ul>
</body>

</html>
