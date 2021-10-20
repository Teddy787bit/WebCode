const express = require('express');
const MongoClient = require('mogodb');
const app= express();
app.listen(4000,()=>{
    MongoClient.connect ('mongodb://localhost:27017/csv_db',(err,result)=>{
        if (err) throw err
        var darabase = result.db('')
    })
})