var mongoose = require('mongoose');

var Schema = mongoose.Schema;

var MedicineSchema = new Schema({

  c_name: { type: String, Required:  'Name cannot be left blank.' },

  c_batch_no:    { type: String,   Required:  'Batch can not be blank.'},

  d_expiry_date: { type: Date ,    Required:  'Expiry can not be blank'},

  n_balance_qty: { type: Integer },

  c_packging: { type: String },

  c_unique_code:{type: Integer,Required:'Unique code can not be blank'},

  c_schemes:{type: String},

  n_mrp:{type:Double},
  
  c_manufacturer:{type: String},

  hsn_code:{type: Integer,Required:'code can not be blank'}
});

module.exports = mongoose.model('Medicine', MedicineSchema);