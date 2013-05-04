<!DOCTYPE html>
<html>
    <head>
	<title>Prueba Carga de Datos Via XML</title>
        <meta charset="utf-8" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
   		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/latest/jquery.mobile.js"></script>
    <!-- Cargando los datos por xml de cada Software Libre registrado -->
    <script type="text/javascript" language="javascript">
    $(document).ready(function(){
        $.ajax({
            type: "GET",
            url: "./?software",
            dataType: "xml",
            success: function(xml){
                $(xml).find('item').each(function(){
                var sTitulo = $(this).find('nombre').text();
                var sVersion = $(this).find('idSoftware').text();
                var sDescripcion = $(this).find('resumen').text();
                var sCategoria = $(this).find('url').text();
                var sAuthor = $(this).find('desarrollador').text();
                $("<tr></tr>").html("<th style='color:#fff;background-color:#619BC7;padding:3px;border-radius:3px'>" + sTitulo + "</th>").appendTo("#listado");
                $("<tr></tr>").html("<th style='color:#000000;background-color:#ccc;padding:3px'>Descripcion: </th><td style='border:1px solid #ccc'>" + "" + sDescripcion + "</td>").appendTo("#listado");
                $("<tr></tr>").html("<th style='color:#000000;background-color:#ccc;padding:3px'>Categoria: </th><td style='border:1px solid #ccc'>" + "" + sCategoria + "</td>").appendTo("#listado");
                $("<tr></tr>").html("<th style='color:#000000;background-color:#ccc;padding:3px'>Version: </th><td style='border:1px solid #ccc'>" + "" + sVersion + "</td>").appendTo("#listado");
                $("<tr><td style='padding:5px'></td></tr>").appendTo("#listado");
                  $("<li style='padding:5px'></li>").html("<b>" + sTitulo + ":</b> " + sDescripcion + "," + sAuthor + "<br>").appendTo("#buscar");
            });
            },
            error: function() {
            alert("Error al cargar datos de Archivo XML.");
            }
        });
    });    
</script>
    </head>
    <body>
<div data-role="page">

	<div data-role="header" data-theme="b">
		<h1>Listado de Software</h1>
	</div>

	<div data-role="content" >	

			<table data-role="table" id="listado" data-mode="reflow" style='text-align:left;max-width:600px;margin:0 auto'>
				<thead><tr></tr></thead>
				<tbody></tbody>
			</table>
		<p>Listado de Herramientas Libres</p>		
		<ul data-role="listview" data-inset="true" data-filter="true" id="buscar" data-filter-placeholder="Filtrar Software">
		</ul>		
								
<?php render('_footer')?>