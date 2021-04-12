<div class="articulo">
    <input type="hidden" id="id" value="<?php echo $item['id']; ?>">
    <div class="imagen">
        <div class="inicio">
                <div class="slider">
                    <input type="hidden" id="id1" value="<?php echo $item['id']; ?>">
                    <ul class="slide" id="imagenes">
                        <?php 
                            $imagens = explode("/", $item['imagen']);
                            $max = sizeof($imagens);
                            for($i = 0;$i<$max;$i++){?>
                                <li id="slide<?php echo $i+1?>"><img src="../imgs/items/<?php echo $item['categoria'];?>/<?php echo $imagens[$i];?>" alt=""></li>
                        <?php }?>
                    </ul>
                    <ul class="menusli">
                        <?php 
                            $imagens = explode("/", $item['imagen']);
                            $max = sizeof($imagens);
                            $imagen1 = "display:none";
                            $imagen2 = "display:none";
                            $imagen3 = "display:none";
                            $imagen4 = "display:none";
                            $imagen5 = "display:none";
                            for($i = 0;$i<$max;$i++){

                                if($i==0){
                                    $imagen1 = "display:block";
                                }
                                if($i==1){
                                    $imagen2 = "display:block";
                                }
                                if($i==2){
                                    $imagen3 = "display:block";
                                }
                                if($i==3){
                                    $imagen4 = "display:block";
                                }
                                if($i==4){
                                    $imagen5 = "display:block";
                                }

                            }?>
                        <li style="<?php echo $imagen1?>"><button class="slide-1">1</button></li>
                        <li style="<?php echo $imagen2?>"><button class="slide-2">2</button></li>
                        <li style="<?php echo $imagen3?>"><button class="slide-3">3</button></li>
                        <li style="<?php echo $imagen4?>"><button class="slide-4">4</button></li>
                        <li style="<?php echo $imagen5?>"><button class="slide-5">5</button></li>
                    </ul>
                </div>
        </div>
    </div>
    <div class="titulo"><?php echo $item['nombre'];?></div>
    <div class="precio">$<?php echo $item['precio'];?></div>
    <div class="botones">
    <button class="btn-add">Agregar al carrito</button>
    </div>
</div>