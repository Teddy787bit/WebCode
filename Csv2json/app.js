const express = require('express');
const path = require('path');
const app=express();
const ejs = require('ejs');

  const port = 3000;
  app.get('/', (req, res) => {
    res.send('Hello World!')
  })
  var fetchRouter = require('./routes/fetch-route');
  app.use('/', fetchRouter);
  app.listen(port, () => {
    console.log(`Example app listening at http://localhost:${port}`)
  })
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'ejs');
  var fetchRouter = require('./routes/fetch-route');
  app.use('/', fetchRouter);