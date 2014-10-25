case 'noticias':
                printf('
                    <div id="up-noticias-box" class="login-popup"> 
                        <a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a> 
                        <form method="post" class="signin" action="php/insertarNoticia.php" align="center">
                            <fieldset class="textbox" >
                                Noticia
                                <label class="username">
                                    <input id="titulo" name="titulo" value="" type="text" autocomplete="on" placeholder="ingrese el Titulo">
                                </label>
                                <label class="username">
                                   <textarea name="descripcion" rows="5" cols="30" placeholder="escribe aqui tu noticia"></textarea>
                                </label>
                                    
                                <button class="submit button" type="submit">Publicar Noticia</button>                  
                            </fieldset>
                        </form>
                </div>
                ');
                break;
