var Mongoodb = require('../models/model');
const csv = require('csvtojson');
const filepath = `${__dirname}/MedicineDataSet.csv`;


exports.create=(req,res)=>{
    res.render('index');
    console.log("Create Function Called");
    console.log(filepath);
    csv()
    .fromFile(filepath)
    .then((jsonObj)=>{
    console.log(jsonObj);
})
}

exports.find=(req,res)=>{
    console.log("Find Function Called");

}