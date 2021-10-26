var mongoose = require('mongoose');

var Schema = mongoose.Schema;

var MedicineSchema = new Schema({
    c_name : {type:string}	,
    c_batch_no	: {type:string}	,
    d_expiry_date	: {type:string}	,
    n_balance_qty	: {type:string}	,
    c_packaging	: {type:string}	,
    c_unique_code	: {type:string}	,
    c_schemes	: {type:string}	,
    n_mrp	: {type:string}	,
    c_manufacturer	: {type:string}	,
    hsn_code: {type:string}	
    
});

module.exports = mongoose.model('Medicine', MedicineSchema);