const express = require('express');
var path = require('path');
const mongoose = require('mongoose');
const uploadCSV = require('./api/uploadCSV');
const GetAll = require('./api/GetAll');
mongoose.connect("mongodb://localhost:27017/mydb",{useNewUrlParser: true},(error) =>{
    if (!error){
        console.log("Done");
    }
    else
    {
        console.log("Error"+error);
    }
})
const app = express();
app.use('/api/uploadcsv',uploadCSV);
app.listen(3000,()=> console.log("Listrning TO Port 3000"))
app.get('/',(req,res)=>{
    res.render('index');
});
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'pug');

module.exports = app;


