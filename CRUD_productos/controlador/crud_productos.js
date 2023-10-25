import express from "express";
import { conectar } from "../modelo/db_conectar.js";

var crud_producto=({});

// Expresión regular para validar el carnet
const carnetRegex = /^E\d{3}$/;

// Función para validar el carnet
function validarCarnet(carnet) {
    return carnetRegex.test(carnet);
}

crud_producto.leer = (req, res) => {

    conectar.query('SELECT p.id_producto, p.producto, m.marca, p.descripcion, p.precio_costo, p.precio_venta, p.existencia FROM db_productos.productos p INNER JOIN db_productos.marcas m ON p.id_marca = m.id_marca',(error, results)=>{
        if(error){
            throw error;
        }else{
            res.render('productos/index.ejs', {resultado:results})
        }
    })

};

crud_producto.cud = (req, res) => {
    const btn_crear = req.body.btn_crear;
    const btn_actualizar = req.body.btn_actualizar;
    const btn_borrar = req.body.btn_borrar;
    const id_producto = req.body.txt_id;
    const producto = req.body.txt_producto;
    const id_marca = req.body.txt_marca;
    const descripcion = req.body.txt_descripcion;
    const precio_costo = req.body.txt_precio_costo;
    const precio_venta = req.body.txt_precio_venta;
    const existencia = req.body.txt_existencia;
    if(btn_crear){
        conectar.query('insert into productos set ?', {producto: producto,
             id_marca: id_marca, descripcion: descripcion, precio_costo: precio_costo, precio_venta: precio_venta, existencia: existencia }, (error, results)=>{
                if(error){
                    console.log(error);
                }else{
                    res.redirect('/');
                }
             });
    }
    if(btn_actualizar){
        
        conectar.query('update productos set ? where id_producto = ?', [{producto: producto, id_marca: id_marca,
            descripcion: descripcion, precio_costo: precio_costo, precio_venta: precio_venta, existencia: existencia }, id_producto], (error, results)=>{
               if(error){
                   console.log(error);
               }else{
                   res.redirect('/');
               }
        });

    }
    if(btn_borrar){

        conectar.query('delete from productos where id_producto = ?', [id_producto], (error, results)=>{
               if(error){
                   console.log(error);
               }else{
                   res.redirect('/');
               }
        });


    }

};


export {crud_producto}