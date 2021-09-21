<?php

$productos = [

['nombre' => 'Papas Fritas', 'precio' => 100 , 'imagen' => 'img/papas-fritas.png'],
['nombre' => 'Ensalada', 'precio' => 300 , 'imagen' => 'img/ensalada.png'],
['nombre' => 'Pizza', 'precio' => 500 , 'imagen' => 'img/pizza.png'],
['nombre' => 'Sandwich', 'precio' => 300 , 'imagen' => 'img/sandwich.png'],
['nombre' => 'Hamburguesa', 'precio' => 350 , 'imagen' => 'img/hamburguesa.png'],
['nombre' => 'Galletitas', 'precio' => 200 , 'imagen' => 'img/galletitas.png'],
['nombre' => 'Pancho', 'precio' => 200 , 'imagen' => 'img/pancho.png'],
['nombre' => 'Dona', 'precio' => 100 , 'imagen' => 'img/dona.png'],

]


<section class="productos-section" id="productos">
    <div class="container">
       <div class="row mx-auto text-center">
          <div class="col-lg-8 mx-auto">
              <h3 class="mb-4">nuestros productos</h3>
          </div>
        </div>
        <div class="row align-items-end">

        <?php foreach($productos as $producto): ?>   <!--array-->

          <div class="col-xl-3 col-6 mt-4">
            <div class="producto text-center p-4">
              <img src="$<?php echo $producto['imagen'] ?>" />
              <h4 class="text-left">$<?php echo $producto['nombre'] ?></h4>
              <h5 class="text-left">$<?php echo $producto['precio'] ?></h5>
              <button class="btn btn-agregar">Agregar</button>
            </div>
          </div>
          
          
       </div>
    </div>
</section>

?>