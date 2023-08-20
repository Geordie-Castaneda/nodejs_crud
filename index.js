import express from "express";
const app_e = express();
app_e.listen('5000',function(){
    console.log('Aplicacion Iniciada : http://localhost:5000/')
})

app_e.get('/',function(req,res){
    res.send("Hola mundo, primeros cambios")
})

