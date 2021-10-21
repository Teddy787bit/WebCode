var Mongoodb = require('../models/model');
const csv = require('csvtojson');
const fast = require('fast-csv');
//const csv = require('csv-parser');
const Medicinedb = require('../models/model');
var csvfile = `${__dirname}/MedicineDataSet.csv`;
//const filepath = `${__dirname}/MedicineDataSet.csv`;
var fs = require('fs');
const route = require('../routes/router');
const connectDB = require('../database/connection')

exports.create = (req, res) => {
/*
    var medicine = [];
    csv().fromFile(csvfile).then(source => {
        //console.log(source)
        // Fetching the all data from each row
        for (var i = 0; i < source.length; i++) {
            var oneRow = {
                c_name: source[0],
                c_batch_no: source[1],
                d_expiry_date: source[2],
                n_balance_qty: source[3],
                c_packaging: source[4],
                c_unique_code: source[5],
                c_schemes: source[6],
                n_mrp: source[7],
                c_manufacturer: source[8],
                hsn_code: source[9]
            };

        //console.log(oneRow)
        medicine.push(oneRow);
        //console.log(medicine)
        }
        var collection = connectDB.collection(medicinedbs);
    })*/
    const medicine = Medicinedb({
                c_name: "test",
                c_batch_no: "test" ,
                d_expiry_date: "test" ,
                n_balance_qty: "test" ,
                c_packaging: "test" ,
                c_unique_code: "test",
                c_schemes: "test" ,
                n_mrp: "test" ,
                c_manufacturer: "test" ,
                hsn_code:"test"
    })
    medicine.save(medicine).then(data=>{
        res.send(data)
    })
    .catch(err=>{res.err})
    
      }

exports.find = (req, res) => {
    Medicinedb.find()
        .then(medicine => {
            res.send(medicine);
        })
        .catch(err => {
            res.status(500).send({ message: err.message || "Error Occurred while retriving user information" })
        })

}
