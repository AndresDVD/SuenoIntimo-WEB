<div class="articulo">
    <input type="hidden" id="id" value="<?php echo $item['id']; ?>">
    <div class="imagen">
        <div class="inicio">
                <div class="slider">
                    <ul class="slide">
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
                            for($i = 0;$i<$max;$i++){?>
                                <li><a href="#slide<?php echo $i+1?>"><?php echo $i+1?></a></li>
                        <?php }?>
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