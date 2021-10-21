var Mongoodb = require('../models/model');
//const csv = require('csvtojson');
const fast = require('fast-csv')
const csv = require('csv-parser')
const Medicinedb = require('../models/model');
var csvfile=`${__dirname}/MedicineDataSet.csv`;
//const filepath = `${__dirname}/MedicineDataSet.csv`;
var fs = require('fs');

const route = require('../routes/router');

exports.create=(req,res)=>{
        var stream = fs.createReadStream(csvfile)
        .pipe(csv())
                .on('data', (data) => {
                    var medicine = new Medicinedb({
                        name: data[0],
                        price: data[1],
                        category: data[2],
                        description: data[3],
                        manufacturer:data[4] 
                   });
                   console.log(item);
                })
                .on('end', () => {
                    console.log('CSV file successfully processed');
                })
    /*
        csv()
        .fromFile(csvfile)
        .then((jsonObj)=>{
            console.log(jsonObj)
        })
        */
        }
exports.find=(req,res)=>{
    Medicinedb.find()
    .then(medicine =>{
        res.send(medicine);
    })
    .catch(err =>{
        res.status(500).send({ message : err.message || "Error Occurred while retriving user information" })
    })

}
