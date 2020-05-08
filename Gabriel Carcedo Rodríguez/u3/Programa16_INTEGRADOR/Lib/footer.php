<style type="text/css">
/* codigo a parte*/

.texto {
    color: white;
    position: relative;
    padding: 80px 0;
    text-align: center;
    font-weight: 400;
    font-family:  Montserrat ,Arial;
}

.texto h2, .texto p {
    background: rgba(0,0,0,.4);
    display: inline-block;
    padding: 5px 10px;
}

.texto h2 {
    font-size: 30px;
    letter-spacing: 2.5px;
    font-weight: normal;
}

.texto p {
    font-size: 20px;
    letter-spacing: 2.5px;
}

/*estilo para el footer */
    footer{
    width: 100%;
    background: rgba(255,0,0,.4);
    color: brown;
    position: relative; 
    z-index: 1; 
    
}

.container-footer-all{
    width: 100%;
    max-width: 1200px;
    margin: auto;
    padding: 40px;
}

.container-body{
    display: flex;
    justify-content: space-between;
}

.colum1{
    max-width: 400px;
}

.colum1 h1{
    font-size: 22px;
}

.colum1 p{
    font-size: 14px;
    color: brown;
    margin-top: 20px;
}

.colum2{
    max-width: 400px;
    
}

.colum2 h1{
    font-size: 22px;
}

.row{
    margin-top: 20px;
    display: flex;
}

.row img{
    width: 40px;
    height: 40px;
}

.row label{
    margin-top: 10px;
    margin-left: 20px;
    color: brown;
}

.colum3{
    max-width: 400px;
}

.colum3 h1{
    font-size: 22px;
}

.row2{
    margin-top: 20px;
    display: flex;
}

.row img:hover{
    cursor: pointer;
    transform: translateY(-5px);
}

.row2 img{
    width: 36px;
    height: 36px;
}

.row2 label{
    margin-top: 10px;
    margin-left: 20px;
    max-width: 140px;
}

.container-footer{
    width: 100%;  
    background: rgba(0, 0, 0, .4);
}

.footer{
    max-width: 1200px;
    margin: auto;
    display: flex;
    justify-content: space-between;  
    padding: 20px;
}

.copyright{
    color: #C7C7C7;
}

.copyright a{
    text-decoration: none;
    color: white;
    font-weight: bold;
}

.information a{
    text-decoration: none;
    color: #C7C7C7;
}


@media screen and (max-width: 1100px){
    
    .container-body{
        flex-wrap: wrap;
    }
    
    .colum1{
        max-width: 100%;
    }
    
    .colum2,
    .colum3{
        margin-top: 40px;
    }
}

/*fonts*/

</style>

<link rel="stylesheet" type="text/css" href="fontsmenu.css">


       
       <div class="container-footer-all">
        
            <div class="container-body">

                <div class="colum1">
                    <h1>Mas informaci&oacute;n</h1>

                    <p>Nos dedicamos a brindarle un servicio amable con un ambiente acogedor y, sobre todo, excelentes productos elaborados con ingredientes de la más alta calidad, que le generarán una experiencia inolvidable. Si no está satisfecho, agradecemos que nos lo haga saber y con gusto haremos su estancia más placentera.</p></p>

                </div>

                <div class="colum2">

                    <h1>Redes Sociales</h1>

                    <div class="row">
                        <a href="https://www.facebook.com/AleMarentess/"><img src="facebook.png"></a>
                        <label>Siguenos en Facebook</label>
                    </div>
                    <div class="row">
                        <a href="https://www.instagram.com/marentes_ale/?hl=es-la"><img src="iconos/instagram.png"></a>
                        <label>Siguenos en Instagram</label>
                    </div> 
                     <div class="row">
                        <a href="https://api.whatsapp.com/send?phone=529691036691&text=Buen día, ¿que me recomendaría?"><img src="#"></a>
                        <label>Comunicate por WhatsApp</label>
                    </div>                               


                </div>

                <div class="colum3">

                    <h1>Informacion Contacto</h1>

                    <div class="row2">
                        <img src="iconos/house.png">
                        <label>Calle: 37 s/n 66 y 68.</label>
                    </div>

                    <div class="row2">
                        <img src="iconos/smartphone.png">
                        <label>9691036691</label>
                    </div>


                </div>

            </div>
        
        </div>
        
        <div class="container-footer">
               <div class="footer">
                    <div class="copyright">
                        &copy; 2020 Todos los Derechos Reservados | <a href="">Bacab_Carcedo_Medina</a>
                    </div>

                    <div class="information">
                        <p>Ale Marentes</p>
                    </div>
                </div>

            </div>
        
