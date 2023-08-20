import express from "express";
import { conectar } from "../modelo/db_conectar.js";

var crud_cliente=({});

crud_cliente.leer = (req, res) => {

    conectar.query('select id_cliente, nit, nombres, apellidos, direccion, telefono, date_format(fecha_nacimiento, "%d/%m/%Y") as fecha_nacimiento from db_empresa.clientes',(error, results)=>{
        if(error){
            throw error;
        }else{
            res.render('clientes/index.ejs', {resultado:results})
        }
    })

};

export {crud_cliente}