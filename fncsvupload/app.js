const express = require('express');
var path = require('path');
const mongoose = require('mongoose');
mongoose.Promise = global.Promise;
const index = require('./api/routes/index');
const app = express();

mongoose.connect("mongodb://localhost:27017/medicine",{useNewUrlParser: true},(error) =>{
    if (!error){
        console.log("Done");
    }
    else
    {
        console.log("Error"+error);
    }
})
app.listen(3000,()=> console.log("Listrning TO Port 3000"))

// view engine setup
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'pug');


app.use('/',index);
app.get('/',(req,res)=>{
    res.render('index');
});

module.exports = app;