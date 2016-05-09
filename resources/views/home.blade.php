@extends('layouts.app')

@section('title', 'Inicio')
@section('content')
    <center>
        <h1>Repositorio de Objetos Virtuales de Aprendizaje Accesible</h1>   <!-- Titulo-->
    </center>
    <br>
    <h2>¡Bienvenido!</h2><!--Subtitulo -->
    <!-- Texto-->
    <p>En este repositorio podr&aacute;s encontrar las diferentes herramientas para la manipulación de los Objetos Virtuales de Aprendizaje, teniendo en cuenta la accesibilidad web.</p>
    <p>Cada uno de los usuarios que utilice este repositorio podr&aacute; realizar la comunicación con los demás usuarios y contar con la ayuda de los administradores. </p>
    <p>&nbsp;</p>
@endsection
@section('chat')	
	<div>
    	<br><br>
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title">
					Mensajes
				</div>
			</div>
			<div class="panel-body">
                                    
    		<?php
        		$i=0;
        		foreach($users_chats as $user_chat)
        		{
            		if(($user_chat->namedestino==\Auth::user()->username) AND ($i<10))
            		{
                		$i++;
                		echo "<h4><a href='".route('chat.users_chats.conversationchat', ['nombredestino' => $user_chat->nameorigen])."' target='_blank'><div class='label label-danger' name='nombreusuario'>".$user_chat->nameorigen .": <span class='glyphicon glyphicon-arrow-right' aria-hidden='true'></span></div></a>";
                		echo "&nbsp;&nbsp;".$user_chat->mensaje."</h4>";
                		echo "&nbsp;&nbsp;<div class='label label-primary'>".$user_chat->created_at."</div>";     
            		}
     			}
    		?>
    		</div>
    	</div>
    </div>
@endsection
