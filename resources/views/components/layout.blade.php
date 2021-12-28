<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body class="container-fluid " style="background-color: rgb(44, 44, 44);">
    <form action="/encuesta" method="POST" class="mb-4">
        <input type="hidden" name="_token" value="lbPLsdVieMt0hAUCyDZFobv7VCObBCP3udOUXYVj">  
        <div class=" card col-span-12 break-words bg-white border-1 border-gray-300 w-full lg:w-4/5 lg:col-span-10 mx-auto mt-4">
            <h5 class="card-header " style="background-color:#f2715a; color: white;">
                Encuesta seguimiento y satisfacción usuario/a
            </h5>
            <div class="card-body">
                <p class="card-text">
                    El objetivo de esta encuesta es generar un seguimiento de su atención, 
                    obtener feedback de su condición de salud y su percepción de la calidad 
                    de su atención.
                </p>
            </div>
        </div>

        <div class="card col-span-12 break-words bg-white border-1 border-gray-300 w-full lg:w-4/5 lg:col-span-10 mx-auto mt-4 ">
            <h6 class=" card-header " style="color:#f2715a; background-color: white;">
                Tu Rut
            </h6>
            <div class="card-body">
                <input name="rut" type="text" class="form-control" placeholder="11111111-1" required="">
            </div>
        </div>
        
        {{ $slot }}

        <div class="w-full lg:w-4/5 pr-4 pl-4 mx-auto mt-4">
            <div class="grid gap-2 block md:flex md:justify-end">
                <button type="submit" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded  no-underline bg-blue-600 text-white hover:bg-blue-600 py-3 px-4 leading-tight text-xl" style="background-color: #f2715a; border: #f2715a;">
                    Enviar
                </button>
            </div>
        </div>
    
    </form>
</body>
</html>





