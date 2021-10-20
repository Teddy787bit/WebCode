const mongodb = require("mongodb").MongoClient;
const csvtojson = require("csvtojson");
const express = require('express');
const router = express.Router();
const path = require('path');
const app=express();

var fetchController= require('../controllers/controller');

// let url = "mongodb://username:password@localhost:27017/csv_db";
let url = "mongodb://localhost:27017";
router.post('/uploadCsv',(req,res)=>{
    csvtojson()
  .fromFile("file/MedicineDataSet (2).csv")
  .then(csvData => {
    console.log(csvData);

    mongodb.connect(
      url,
      { useNewUrlParser: true, useUnifiedTopology: true },
      (err, client) => {
        if (err) throw err;
        client
          .db("medicine")
          .collection("MedicineDataset")
          .insertMany(csvData, (err, res) => {
            if (err) throw err;
            console.log(`Inserted: ${res.insertedCount} rows`);
            client.close();
          });
      }
    );
  });
});
router.get('/GetAll',fetchController.fetchData);
module.exports = router;