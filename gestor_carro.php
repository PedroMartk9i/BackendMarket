<?php
session_start();
//verificar metodo post
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    //verificar que sea un boton de agregar un producto
    if (isset($_POST['Agregar_al_carro']))
    {
        //verificar que el carro este creado en la sesion
        if(isset($_SESSION['carro']))
        {
            $misProductos=array_column($_SESSION['carro'],'Nombre');
            if(in_array($_POST['Nombre'],$misProductos))
            {
                echo"<script>
                alert('Producto ya agregado');
                window.location.href='productos.php';
                </script>";
            }
            else
            {
                $count=count($_SESSION['carro']);
                $_SESSION['carro'][$count]=array('Nombre'=>$_POST['Nombre'],'Precio'=>$_POST['Precio'],'Imagen'=>$_POST['Imagen'],'Cantidad'=>1);
                echo"<script>
                alert('Producto agregado');
                window.location.href='productos.php';
                </script>";
            }

            
        }
        else
        {
            //crear el carro
            $_SESSION['carro'][0]=array('Nombre'=>$_POST['Nombre'],'Precio'=>$_POST['Precio'],'Imagen'=>$_POST['Imagen'],'Cantidad'=>1);
            echo"<script>
                alert('Producto agregado');
                window.location.href='productos.php';
                </script>";
        }
    }
    //Para retirar un producto del carrito
    if(isset($_POST['Remover_Producto']))
    {
        foreach($_SESSION['carro'] as $key => $value)
        {
            if($value['Nombre']==$_POST['Nombre'])
            {
                unset($_SESSION['carro'][$key]);
                $_SESSION['carro']=array_values($_SESSION['carro']);
                echo "<script>
                alert('Producto Removido');
                window.location.href='carro.php';
                </script>";
            }
            
        }
    }
    //Agregar uno más del mismo item en el carrito
    if(isset($_POST['UnoMas']))
    {
        foreach($_SESSION['carro'] as $key => $value)
        {
            if($value['Nombre']==$_POST['Nombre'])
            {
                $_SESSION['carro'][$key]['Cantidad']= $_SESSION['carro'][$key]['Cantidad']+1;
                $_SESSION['carro']=array_values($_SESSION['carro']);
                echo "<script>
                window.location.href='carro.php';
                </script>";
            }
        }
    }
    //Agregar uno menos del mismo item en el carrito
    if(isset($_POST['UnoMenos']))
    {
        foreach($_SESSION['carro'] as $key => $value)
        {
            if($value['Nombre']==$_POST['Nombre'])
            {
                //Verificar que haya mínimo uno de cada item en el carrito
                if($_SESSION['carro'][$key]['Cantidad']>1)
                {
                    $_SESSION['carro'][$key]['Cantidad']= $_SESSION['carro'][$key]['Cantidad']-1;
                    $_SESSION['carro']=array_values($_SESSION['carro']);
                }
                echo "<script>
                    window.location.href='carro.php';
                    </script>";
                
            }
        }
    }
    //Quitar todos los productos del carro
    if(isset($_POST['QuitarTodo']))
    {
        session_destroy();
        echo "<script>
                    window.location.href='carro.php';
                    </script>";
    }
    //Comprar
    if(isset($_POST['Comprar']))
    {
        
        echo "<script>
        alert('Compra exitosa');
        window.location.href='productos.php';
            </script>";
    }
}
