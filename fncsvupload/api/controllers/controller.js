var fetchModel= require('../models/model');
module.exports={
 
    fetchData:function(req, res){
      
      fetchModel.fetchData((data)=>{
          res.render('index',{medicineData:data});
      })
    }
}