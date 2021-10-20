const mongodb = require("mongodb").MongoClient;
const csvtojson = require("csvtojson");
const express = require('express');
// let url = "mongodb://username:password@localhost:27017/";
let url = "mongodb://localhost:27017/";
/*
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
          .db("csv_db")
          .collection("MedicineDataset")
          .insertMany(csvData, (err, res) => {
            if (err) throw err;

            console.log(`Inserted: ${res.insertedCount} rows`);
            client.close();
          });
      }
    );
  });
  */
 
  var fetchRouter = require('./routes/fetch-route');
  app.use('/', fetchRouter);