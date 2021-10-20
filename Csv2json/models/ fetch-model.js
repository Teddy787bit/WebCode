var mongoose=require('mongoose');
var db = require('../database');
// create an schema
var MedicineSchema = new mongoose.Schema({
        c_name:	String,
        c_batch_no : String,	
        d_expiry_date	: String,
        n_balance_qty	: String,
        c_packaging	 : String,
        c_unique_code	: String,
        c_schemes	: String ,
        n_mrp	: String,
        c_manufacturer	: String,
        hsn_code : String
        });
medicineTable=mongoose.model('MedicineDataset',MedicineSchema);
module.exports={
     
     fetchData:function(callback){
        var medicineData=medicineTable.find({});
        medicineData.exec(function(err, data){
            if(err) throw err;
            return callback(data);
        })
        
     }
}