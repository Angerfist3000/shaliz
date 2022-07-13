<?php 
Include("Menu.php");
?>
<title class="titulos">Registro producto</title>

    <section></section>
    
        <section style ="padding: 22px; class ="container">
        <div class ="container p-5 s" >
            <form style ="background: burlywood;color:black; width:700px; padding:30px; margin :auto ; margin-top:100px">
                <h2 style="text-align: center;">FORMULARIO DE REGISTRO</h2>
                <div class="form-goup">
                    <label>Codigo</label> 
                    <input type="text" id="nombre_producto">
                  </div>
                    <div class="form-goup">
                      <label>Nombre de producto</label> 
                      <input type="text" id="nombre_producto">
                    </div>
                    <div class="form-goup">
                        <label>Precio de producto</label> 
                        <input type="text" id="nombre_producto">
                      </div>
                      
                      <button type="button">Registrar</button>
                    <br>
                    
                   
            </form> 
            <hr>
                    <div class="row p-3 mb-2 bg-white text-white">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                    <table class ="table" style="background:white">
                        <head>
                            <th scope ="col">Codigo</th>
                            <th scope ="col">Nombre producto</th>
                            <th scope ="col">Cantidad</th>
                            <th scope ="col">Precio</th>
                            <th scope ="col"></th>
                            <th scope ="col"></th>
                        </head>
                        <body>

                            <tr>
                                <th scope ="row">1</th>
                                <td>Sabritas</td>
                                <td>10</td>
                                <td>19</td>
                                <td>
                                    <button>
                                        Modificar
                                    </button>
                                </td>
                                <td>
                                    <button>
                                        Eliminar
                                    </button>
                                </td>
                                
                            </tr>
                            <tr>
                                <th scope ="row">1</th>
                                <td>Sabritas</td>
                                <td>10</td>
                                <td>19</td>
                                <td>
                                    <button>
                                        Modificar
                                    </button>
                                </td>
                                <td>
                                    <button>
                                        Eliminar
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th scope ="row">1</th>
                                <td>Sabritas</td>
                                <td>10</td>
                                <td>19</td>
                                <td>
                                    <button>
                                        Modificar
                                    </button>
                                </td>
                                <td>
                                    <button>
                                        Eliminar
                                    </button>
                                </td>
                            </tr>
                        </body>
                    </table>
                    </div>
                  </div>
    
        </section>
        <?php 
            Include("pie de pagina.php");
            ?> 
        
  
  </body>
</html>