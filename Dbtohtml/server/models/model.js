const mongoose = require('mongoose');
var schema = mongoose.Schema(
    {
    name:{
        type:String,
        require:true
    }
});
const Medicinedb= mongoose.model('MedicineDB',schema);
module.exports=Medicinedb;
