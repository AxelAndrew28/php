<?php
$inventario = [ //Aqui definimos el inventario inicial de la tienda con varias categorias y comics 
    'suspense_terror' => [
        ['titulo' => 'The Long Halloween', 'editorial' => 'DC', 'autor' => 'Tim Sale', 'idioma' => 'Inglés', 'precio' => 20, 'stock' => 10],
        ['titulo' => 'Uzumaki', 'editorial' => 'Planeta', 'autor' => 'Junji Ito', 'idioma' => 'Japonés', 'precio' => 25, 'stock' => 15],
        ['titulo' => 'Tomie', 'editorial' => 'Planeta', 'autor' => 'Junji Ito', 'idioma' => 'Japonés', 'precio' => 25, 'stock' => 20],
    ],
    'accion' => [
        ['titulo' => 'Berserk Deluxe Edition 1', 'editorial' => 'Dark Horse', 'autor' => 'Kentaro Miura', 'idioma' => 'Japonés', 'precio' => 30, 'stock' => 12],
    ],
];

// main
// Antes del descuento
mostrarComicsEnTabla(); 
mostrarValorAlmacen(); 
aplicarDescuentoManga();
// Mostramos el inventario actualizado
mostrarComicsEnTabla();
mostrarValorAlmacen();  


// Funciones
function mostrarComicsEnTabla()
{
    global $inventario; //Esta funcion muestra el inventario como si fuera una tabla HTML con detalles de los comicsw
    echo "<table border='1'>";  //aqui creamos la tabla donde van los comics
    echo "<tr><th>Título</th><th>Editorial</th><th>Autor</th><th>Idioma</th><th>Precio</th><th>Stock</th></tr>";
    foreach ($inventario as $categoria => $comics) {
        foreach ($comics as $comic) {
            echo "<tr>";
            echo "<td>{$comic['titulo']}</td>";
            echo "<td>{$comic['editorial']}</td>";
            echo "<td>{$comic['autor']}</td>";
            echo "<td>{$comic['idioma']}</td>";
            echo "<td>€{$comic['precio']}</td>";
            echo "<td>{$comic['stock']}</td>";
            echo "</tr>";
        }
    }
    echo "</table><br>";
}

function mostrarValorAlmacen()
{//Con esta funcion calculamos el valor del almacen sumando el precio por el stock de cada comic o manga
    global $inventario;
    $valorTotal = 0;
    foreach ($inventario as $categoria => $comics) {
        foreach ($comics as $comic) { //con el bucle vamos calculando cada comic con su respectivo precio y stock
            $valorTotal += $comic['precio'] * $comic['stock']; //aqui hacemos el calculo del valor total multiplicando el precio por el stock
        }
    }
    echo "<p>El valor total del almacen es: €{$valorTotal}</p><br>"; //sout del valor total
}

function aplicarDescuentoManga()
{//Por ultimo aqui arreglamos el tema del descuento en todos los comics japoneses/mangas
    global $inventario;
    foreach ($inventario as $categoria => &$comics) {
        foreach ($comics as &$comic) { //aqui busca entre todos los comics para encontrar los japoneses
            if ($comic['idioma'] === 'Japonés') { //aqui señalamos que todos los comics con idioma japones 
                $comic['precio'] *= 0.7;//aqui se hace el descuento del 30%
            }
        }
    }
}
