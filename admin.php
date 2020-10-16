<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>¡Bienvenido Administrador!</title>
        <link rel="icon" href="icon.png" type="image/icon type">
        <link href="estilos.css" rel="stylesheet"/>
    </head>
    <body>
        <input type="checkbox" id="Check">
        <label for="Check">
            <img src="menu.png" class="icono">
        </label>
        <nav>
            <ul>
                <li><a href="QLite.php">QLite Music</a></li>
                <li><a href="admin.php">Gestionar QLite Music</a></li>
                <li><a href="home.html">Cascarita 1</a></li>
                <li><a href="formula.php">Primer Intento de Formulario</a></li>
            </ul>
        </nav>

        <img src="QLite Music-logos_transparent.png" class="logoprron">

        <div class="formsearch">
            <h4>Buscar a un Usuario</h4>
            <form method="POST">
                <input class="control" type="email" name="correo" id="correo" placeholder="Ingrese el Correo Electrónico Registrado">
                <input class="botonxd" type="submit" name="buscar" value="Buscar Registro">
            </form>
        </div>

        <div class="formdelete">
            <h4>Eliminar a un Usuario</h4>
            <form method="POST">
                <input class="control" type="email" name="correo" id="correo" placeholder="Ingrese el Correo Electrónico Registrado">
                <input class="botonxd" type="submit" name="eliminar" value="Eliminar Registro">
            </form>

        <?php
        include("search.php");
           
        include("delete.php");
        ?>

        <div id="main">
            <div id="image">
                <img id="alo"/>
            </div>
            <div id="player">
                <div id="songTitle"></div>
                <div id="seek-bar">
                    <div id="fill"></div>
                    <div id="handle"></div>
                </div>
                <div id="buttons">
                    <button id="pre" onclick="pre()"><img src="Pre.png" height="90%" width="90%"/></button>
                    <button id="play" onclick="playOrPauseSong()"><img id="pausa"/></button>
                    <button id="next" onclick="next()"><img src="Next.png" height="90%" width="90%"/></button>
                </div>
                
                
            </div>
        </div>
    </body>
    <script type="text/javascript">
    
        var songs = ["musica/The Worst.mp3","musica/G.O.A.T.mp3","musica/40oz.mp3","musica/Loud.mp3","musica/Ascend.mp3",
        "musica/Hallelujah.mp3","musica/The Sound Of Silence.mp3","musica/Aqui No Es Asi.mp3","musica/Sombras.mp3",
        "musica/All you need is love.mp3","musica/De musica ligera.mp3"];
        var titulos =["The Worst - Polyphia","G.O.A.T. - Polyphia","40oz - Polyphia","Loud - Polyphia","Ascend - TheDooo",
        "Hallelujah - TheDooo","The Sound Of Silence - TheDooo","Aquí No es Asi - Caifanes","Sombras En Tiempos Perdidos - Caifanes",
        "All You Need Is Love - The Beatles","De Música Ligera - Soda Stereo"];
        var cover = ["covers/1.jpg","covers/2.jpg","covers/1.jpg","covers/1.jpg","covers/5.jpg","covers/6.jpg","covers/7.jpg",
        "covers/3.jpg","covers/4.jpg","covers/8.jpg","covers/9"];
        var botones = ["Play.png","Pause.png"];

        var songTitle = document.getElementById("songTitle");
        var alo = document.getElementById("alo");
        var pausa = document.getElementById("pausa");
        var fillBar = document.getElementById("fill");
        
        var song = new Audio();
        var currentSong = 0; 
        pausa.src = botones[1]

        window.onload = playSong;

        function playSong(){
            song.src = songs[currentSong]; 
            songTitle.textContent = titulos[currentSong]; 
            song.play();  
            alo.src = cover[currentSong];
        }
        
        function playOrPauseSong(){
            if(song.paused){
                song.play();
                pausa.src = botones[1];
            }
            else{
                song.pause();
                pausa.src = botones[0]
            }
        }
        
        song.addEventListener('timeupdate',function(){ 
            var position = song.currentTime / song.duration;
            fillBar.style.width = position * 100 +'%';
        });
        
        function next(){    
            currentSong++;
            if(currentSong > 10){
                currentSong = 0;
            }
            playSong();
            pausa.src = botones[1]
        }
    
        function pre(){
            currentSong--;
            if(currentSong < 0){
                currentSong = 10;
            }
            playSong();
            pausa.src = botones[1]
        }
    </script>
</html>
