const express= require('express');
const controller = require('../controllers/controller');
const service = require('../services/services');
const route = express.Router();

route.get('/',service.homeRoute);
//Render Files

route.get('/GetAll',service.showdata);
//API

route.get('/api/GetAll',controller.find);
route.post('/uploadCsv',controller.create);
route.get('/uploadCsv',service.updatecsv);

module.exports=route;

