var Mongoodb = require('../models/model')
const csvFilePath='<path to csv file>'
const csv=require('csvtojson')

exports.create=(req,res)=>{
    console.log("Create Function Called");
}
exports.find=(req,res)=>{
    console.log("Find Function Called");
    csv()
    .fromFile("files/MedicineDataSet (2).csv")
    .then((jsonObj)=>{
    console.log(jsonObj);
    
})
}