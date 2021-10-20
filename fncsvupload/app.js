const express = require('express');
var path = require('path');
const mongoose = require('mongoose');
const CSV = require('./api/routes/csv');
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

app.use('/',CSV);
app.get('/',(req,res)=>{
    res.render('index');
});
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'ejs');
module.exports = app;


