<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Examen parte 2</title>
</head>

<body>


    <div class="container">
        <h1>Ejercicio 2.1</h1>

        <p>El error en el script era que se estaba invocando mal la funcion, es decir se invocaba primero el codigo
            javaScript
            antes que el elemento HTML, y en ese caso, se intentaba imprimir un mensaje en un elemento que no existia en
            el momento
            porque se creaba despues, ademas de que cuando se hacia referencia al id del elemento HTML en donde se
            imprimiria el
            mensaje se estaba referenciando con dobles comillas en el "getElementById()" y lo correcto es referenciar
            con comillas simples.

            Ademas de que lo correcto es poner todos los archivos JavaScript en otro archivo y por ende en otra carpeta,
            posterior a eso
            mandar a llamar los archivos javaScript en los archivos HTML.
        </p>
      <h4>Resultado </h4>  
        Mensaje:<p id="resultado"></p>

    </div>


    <div class="container">
        <h1>Ejercicio 2.2</h1>
        <p>Los errores en este problema son: es que en primera se esta intentando "parsear" caracteres especiales de los idiomas latin u occidentales con el ISO-8859-1,
            el cual no soporta todos estos caracteres especiales, por lo que la palabra "César" no puede ser procesada por esa variante ISO, pero puede ser parseada con otras variantes como
            por ejemplo con ascii, desde luego que se tiene que buscar una variante adecuada para las necesidades, el segundo problema es la manera en como se esta intentando imprimir el array retornado con el json_encode, la manera correcta o aceptable de imprimir el array
            es simplemente haciendo un echo a la funcion mediante su objeto creado        
    </p>
<br>

        <h4>Resultado </h4>  
       <h4>Impresion iconv con ascii:</h4>

            <?php
                class Foo {

                    function aMemberFunc() {
                    return json_encode(array("nombre"=>iconv('UTF-8', "ascii//TRANSLIT", "César")));
                            }
                        }

                    $foo = new Foo;
                    echo $foo->aMemberFunc();
                    //echo $foo['aMemberFunc']();
            ?>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
<script>

    function myFunction() {
        var tt = []
        tt['1'] = 1;
        tt['100'] = 2;
        console.log(tt['100']);
        document.getElementById('resultado').innerHTML = tt['100'];
    }
    myFunction();

</script>

</html>