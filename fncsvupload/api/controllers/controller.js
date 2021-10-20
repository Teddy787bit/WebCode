var medicineData = require('../models/model');
exports.find = (req, res)=>{

      medicineData.find()
          .then(medicine => {
              res.send(medicine)
          })
          .catch(err => {
              res.status(500).send({ message : err.message || "Error Occurred while retriving user information" })
          })
}
/*var fetchModel= require('../models/model');
export.
module.exports={
 
    fetchData:function(req, res){
      
      fetchModel.fetchData((data)=>{
          res.render('index',{medicineData:data});
      })
    }
}*/