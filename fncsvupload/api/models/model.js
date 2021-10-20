const { write } = require('@fast-csv/format');
var mongoose=require('mongoose');
var db = require('../database');
// create an schema
var MedicineSchema = new mongoose.Schema({
        c_name:{type:String,required:true},
        c_batch_no : {type:String,required:true},
        d_expiry_date: {type:String,required:true},
        n_balance_qty: {type:String,required:true},
        c_packaging	: {type:String,required:true},
        c_unique_code: {type:String,required:true},
        c_schemes: {type:String,required:true},
        n_mrp: {type:String,required:true},
        c_manufacturer: {type:String,required:true},
        hsn_code: {type:String,required:true},
        });
const medicineData=mongoose.model('medicineData',MedicineSchema);
module.exports= medicineData;
//medicineTable=mongoose.model('MedicineDataset',MedicineSchema);

/*
module.exports={
     fetchData:function(callback){
        var medicineData=medicineTable.find({});
        medicineData.exec(function(err, data){
            if(err) throw err;
            if(data){
                console.log(data);
            }
            return callback(data);
        })
     }
}*/