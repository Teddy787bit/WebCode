const express = require('express');
const path = require('path');
const app = express();
var fetchRouter = require('./routes/fetch-route');
const ejs = require('ejs');
const port = 3000;

app.get('/', (req, res) => {
  res.send('Hello World!')
})

app.listen(port, () => {
  console.log(`Example app listening at http://localhost:${port}`)
})

app.use('/', fetchRouter);
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'ejs');