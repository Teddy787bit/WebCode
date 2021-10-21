const express= require('express');
const controller = require('../controllers/controller');

const route = express.Router();

route.get('/',(req,res)=>{

    res.render('index');
})

//API
route.get('/GetAll',controller.find);
route.post('/uploadCsv',controller.create);

module.exports=route;

