<?php
/*****************************************************************************
# Program Name: Program 15.php
# Authors: Josue Antonio Castro Collí. 
# Description: La utilización de los POST en el HTML y PHP. 
# Date: 06/Marzo/2020
#
# Funciones:
# if (isset($_POST["numero"]) && !empty($_POST["nombre"]))      //Compara si tiene el número de pokemon 
																// y el texto que se inserto verifica que no este vacio. 
******************************************************************************
*****************************************************************************/

//Esta pequeña página de php lo único que hace es recibir una petición con un parámetro pasado
//por medio de POST y devolver un pequeño resultado, en este caso dado un número
//Devuelve el número del pokemon correspondiente de acuerdo al pokedex original

if (isset($_POST["numero"]) && !empty($_POST["nombre"])){

//Primero iniciamos un arreglo con todos los nombres de los pokemones originales
$pokemon=array("Bulbasaur","Ivysaur","Venusaur","Charmander","Charmeleon","Charizard","Squirtle","Wartortle","Blastoise","Caterpie","Metapod","Butterfree","Weedle","Kakuna","Beedrill","Pidgey","Pidgeotto","Pidgeot","Rattata","Raticate","Spearow","Fearow","Ekans","Arbok","Pikachu","Raichu","Sandshrew","Sandslash","Nidoran","Nidorina","Nidoqueen","Nidoran","Nidorino","Nidoking","Clefairy","Clefable","Vulpix","Ninetales","Jigglypuff","Wigglytuff","Zubat","Golbat","Oddish","Gloom","Vileplume","Paras","Parasect","Venonat","Venomoth","Diglett","Dugtrio","Meowth","Persian","Psyduck","Golduck","Mankey","Primeape","Growlithe","Arcanine","Poliwag","Poliwhirl","Poliwrath","Abra","Kadabra","Alakazam","Machop","Machoke","Machamp","Bellsprout","Weepinbell","Victreebel","Tentacool","Tentacruel","Geodude","Graveler","Golem","Ponyta","Rapidash","Slowpoke","Slowbro","Magnemite","Magneton","Farfetch'd","Doduo","Dodrio","Seel","Dewgong","Grimer","Muk","Shellder","Cloyster","Gastly","Haunter","Gengar","Onix","Drowzee","Hypno","Krabby","Kingler","Voltorb","Electrode","Exeggcute","Exeggutor","Cubone","Marowak","Hitmonlee","Hitmonchan","Lickitung","Koffing","Weezing","Rhyhorn","Rhydon","Chansey","Tangela","Kangaskhan","Horsea","Seadra","Goldeen","Seaking","Staryu","Starmie","Mr. Mime","Scyther","Jynx","Electabuzz","Magmar","Pinsir","Tauros","Magikarp","Gyarados","Lapras","Ditto","Eevee","Vaporeon","Jolteon","Flareon","Porygon","Omanyte","Omastar","Kabuto","Kabutops","Aerodactyl","Snorlax","Articuno","Zapdos","Moltres","Dratini","Dragonair","Dragonite","Mewtwo","Mew");

//Aquí recibimos una variable por método post y la guardamos en la variable id
$id = (int)$_POST['numero'];

//Regresamos la impresión en forma de cadena de texto del dato de pokemon y su número
echo "El Pokemon número ".$id." es: ".$pokemon[$id];
echo '<br>'.$_POST['nombre'];
}
?>