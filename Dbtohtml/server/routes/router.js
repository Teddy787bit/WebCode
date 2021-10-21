const express= require('express');

const route = express.Router();

route.get('/',(req,res)=>{

    res.render('index');
})

//API
route.get('/GetAll',)

module.exports=route;

