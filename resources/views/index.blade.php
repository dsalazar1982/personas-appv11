<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>App Personas</title>
</head>
<body>


    <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
        <table border="0">
            <tbody>
                <tr>
                    <td><img src="{{URL::asset('/images/comuna.png')}}" width="200" height="150" alt="COMUNAS" >
                    <br></td>
                    <td><img src="{{URL::asset('/images/municipio.png')}}" width="200" height="150" alt="MUNICIPIOS" >
                    <br></td>
                    <td><img src="{{URL::asset('/images/departamento.png')}}" width="200" height="150" alt="DEPARTAMENTOS" >
                    <br></td>
                    <td><img src="{{URL::asset('/images/pais.png')}}" width="200" height="150" alt="PAISES" >
                    <br></td>
                </tr>
                <tr class="text-center">
                    <td><a href="{{ route('comunas.index') }}" class="btn btn-warning">COMUNAS</a></td>
                    <td><a href="{{ route('municipios.index') }}" class="btn btn-success">MUNICIPIOS</a></td>
                    <td><a href="{{ route('departamentos.index') }}" class="btn btn-danger">DEPARTAMENTOS</a></td>
                    <td><a href="{{ route('paises.index') }}" class="btn btn-primary">PAISES</a></td>
                </tr>
                <!-- /*<tr>
                    <td>Row 3, Col 1</td>
                    <td>Row 3, Col 2</td>
                    <td>Row 3, Col 3</td>
                    <td>Row 3, Col 4</td>
                </tr>
                <tr>
                    <td>Row 4, Col 1</td>
                    <td>Row 4, Col 2</td>
                    <td>Row 4, Col 3</td>
                    <td>Row 4, Col 4</td>
                </tr>*/ -->
            </tbody>
        </table>
    </div>
</body>
</html>
