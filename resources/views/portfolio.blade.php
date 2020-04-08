@extends('layout')

@section('title', 'Portafolio')

@section('contenido')
    <h1>Portfolio</h1>
@endsection

<ul>
    <?php
  
    foreach ($portfolio as $portfolioList) {
        echo "<li>".$portfolioList['title']."</li>";
    }
    ?>
</ul>