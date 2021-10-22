const csv = require('csvtojson');
const Medicinedb = require('../models/model');
var csvfile="assets/files/MedicineDataSet.csv";
const route = require('../routes/router');
//Home Page 
exports.homeRoute = (req,res)=>{
    res.render('index',{success:""});
}
//API UploadCsv
exports.create = (req, res) => {
    csv()
        .fromFile(csvfile)
        .then(function jobj(jsonObj) {
            for(i=0;i<jsonObj.length;i++){
                try {
                    Medicinedb.findOneAndUpdate({c_batch_no:jsonObj[i].c_batch_no},{
                        c_name:jsonObj[i].c_name,
                        c_batch_no : jsonObj[i].c_batch_no,
                        d_expiry_date: jsonObj[i].d_expiry_date,
                        n_balance_qty: jsonObj[i].n_balance_qty,
                        c_packaging	: jsonObj[i].c_packaging,
                        c_unique_code: jsonObj[i].c_batch_no,
                        c_schemes: jsonObj[i].c_schemes,
                        n_mrp: jsonObj[i].n_mrp,
                        c_manufacturer: jsonObj[i].c_manufacturer,
                        hsn_code: jsonObj[i].hsn_code,
                    },{upsert:true,returnNewDocument : true,returnOriginal: false})
                } catch (err)
                {
                   console.log(err)
                }
            }
            console.log("Updated")  
            res.render('index',{success:"Data uploaded successfully"});
        })
}
//API GetAll
exports.find = (req, res) => {
    Medicinedb.find()
        .then(medicine => {
            res.render('showdata',{medicine,success:""})
        })
        .catch(err => {
            res.status(500).send({ message: err.message || "Error Occurred while retriving user information" })
        })
    

}
