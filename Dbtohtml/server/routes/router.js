const express= require('express');
const controller = require('../controllers/controller');
const route = express.Router();


//Render Files
route.get('/',controller.homeRoute);

//API
//DataToTable
route.get('/GetAll',controller.find);
//UploadCSV
route.post('/UploadCsv',controller.create);

module.exports=route;

