@extends('master/layout')
@section('content')




<?php
    echo "<h1 style='text-align: center'>Com base nos teus requisitos te recomendamos os seguintes livros:</h1>";
    foreach ($data as $book){
        echo '<div class="row">';
            echo '<div class="col-2"></div>';
            echo '<div class="col-8">';
                echo '<div class="booksDisplay">';
                    echo '<div class="bookShelf">';
                        echo '<img src="http://localhost/Bookstan/public/img/books/' . $book[5] . '.jpg">';
                        echo '<h1>' . $book[9] . '%</h1>';
                        echo '<h2> ' . $book[0] . '</h2>';
                        echo '<h3>Gênero:' . $book[1] . '</h3>';
                        echo '<h3>Público: ' . $book[2] . '</h3>';
                        echo '<h3>Tags: ' . $book[3] . '</h3>';
                        echo '<h3>Autor: ' . $book[6] . '</h3>';
                        echo '<h3>Ano públicado: ' . $book[7] . '</h3>';
                        echo '<h3>' . $book[8] .  ' Volumes públicados</h3>';
                        echo '<button type="submit" class="btn-discover btn btn-light interested">Estou interessado</button>';
                    echo '</div>';
               echo '</div>';
           echo '</div>';
           echo' <div class="col-2"></div>';
        echo '</div>';

    }

?>

@endsection
