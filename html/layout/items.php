<div class="articulo">
    <div class="referencia" id="id">Referencia: <?php echo $item['id']; ?></div>
    <div class="imagen">
        <div class="inicio">
                <div class="slider">
                    <ul>
                        <?php 
                            $imagens = explode("/", $item['imagen']);
                            $max = sizeof($imagens);
                            for($i = 0;$i<$max;$i++){?>
                                <li><img src="../imgs/items/<?php echo $item['categoria'];?>/<?php echo $imagens[$i];?>" alt=""></li>
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