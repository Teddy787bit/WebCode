//Dependency 
const express = require('express');
var path = require('path');
const mongoose = require('mongoose');
mongoose.Promise = global.Promise;
const indexApi = require('./api/routes/index');
const app = express();
var fs = require('fs')
//Connection with DB
mongoose.connect("mongodb://localhost:27017/medicine",{useNewUrlParser: true},(error) =>{
    if (!error){
        console.log("Done");
    }
    else
    {
        console.log("Error"+error);
    }
})

//Server Create
app.listen(3000,()=> console.log("Listrning TO Port 3000"))

//View Set
app.set('view engine', 'ejs');
//Render UI
app.get('/',(req,res)=>{
    res.render('index');
})

//Middleware
app.use('/',indexApi);

//Export app
module.exports = app;