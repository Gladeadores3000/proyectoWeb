<?php
                        include 'php/opGenericas.php';
                             // Realizar una consulta MySQL
                            $resultado = consultarTodos("contenido", 0, 3);
                            
                            while ($line = mysqli_fetch_assoc($resultado)) {
                                printf( "
                                   <div class=col-md-4 >
                                        <div class=gallery-item >
                                            <div class=gallery-thumb>
                                                <img src=$line[url] alt=$line[titulo]>
                                                <div class=overlay-p>
                                                    <a href=#portfolio class=login-window>
                                                        <i class='fa fa-arrows-alt fa-2x'></i>
                                                    </a>
                                                </div>
                                            </div> 
                                            <h3 class=gallery-title><a href=#>$line[titulo]</a></h3>
                                        </div> 
                                    </div>   
                                     <div id=portfolio class=login-popup>
                                    <a href=# class=close><img src=images/close_pop.png class=btn_close title=Close Window alt=Close /></a>        
                                        <img src=$line[url]>
                                    </div>
                                ");
                            }
                    ?>
