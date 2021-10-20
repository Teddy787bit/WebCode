var express = require('express');
var csv = require("fast-csv");
var router = express.Router();
var fs = require('fs');
const app = express();
app.listen(5000,()=>{
    console.log("App Runing");
})
var mongoose = require('mongoose');

var medicine  = mongoose.model('Medicine');

var csvfile = __dirname + "/../public/files/MedicineDataSet (2).csv";
var stream = fs.createReadStream(csvfile);


/* GET home page. */
router.get('/', function(req, res, next) {

   // res.render('index', { title: 'Import CSV using NodeJS' });
   console.log("Welcome")

}).get('/import', function(req, res, next) {

    var  products  = []
    var csvStream = csv()
        .on("data", function(data){
         
         var item = new medicine({
            c_name	: data[0],
            c_batch_no	: data[1],
            d_expiry_date	: data[2],
            n_balance_qty	: data[3],
            c_packaging	: data[4],
            c_unique_code	: data[5],
            c_schemes	: data[6],
            n_mrp	: data[7],
            c_manufacturer	: data[8],
            hsn_code: data[9],

         });
         
          item.save(function(error){
            console.log(item);
              if(error){
                   throw error;
              }
          }); 

    }).on("end", function(){

    });
  
    stream.pipe(csvStream);
    res.json({success : "Data imported successfully.", status : 200});
     
  }).get('/fetchdata', function(req, res, next) {
    
    Product.find({}, function(err, docs) {
        if (!err){ 
            res.json({success : "Updated Successfully", status : 200, data: docs});
        } else { 
            throw err;
        }
    });
  
});
module.exports = router;
