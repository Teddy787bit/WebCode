//Requring All dependencys
const express = require('express');
const app = express();
const morgan = require('morgan');
const path = require('path');
const dotenv = require('dotenv');
const bodyparser = require('body-parser');
const connectDB = require('./server/database/connection')
const route = require('./server/routes/router')
//Setting Env
dotenv.config({path:'config.env'});
const PORT = process.env.PORT;

// log requests
app.use(morgan('tiny'));

//Creating Server
app.listen(PORT,()=>{console.log(`Server is runing at http://localhost:${PORT}`)});

//DB Connection
connectDB();

//Parse 
app.use(bodyparser.urlencoded({extended:true}));

//Setting View Engine
app.set("view engine","ejs")

//Load Assets
app.use('/js',express.static(path.resolve(__dirname,"assets/js")))
app.use('/css',express.static(path.resolve(__dirname,"assets/css")));

//Load Routes
app.use('/',route)

