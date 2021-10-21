const mongoose = require('mongoose')
var schema = new mongoose.schema({
    name:{
        type:String,
        require:true
    }
});
const Medicinedb= mongoose.model('MedicineDB',schema);
module.exports=Medicinedb;
