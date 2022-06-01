const express = require('express');
const app = express();
const cors = require("cors");
const bodyParser = require("body-parser");
const user = require('./routes/user');


const connectDB = require('./db/connect')
require('dotenv').config()


app.use(bodyParser.urlencoded({ extended: true }));
app.use(express.json())

app.use(cors({
  origin: '*'
}));


//user
app.use('/api', user);
//testing when server running
app.get('/',(req,res)=>{
  res.send("Hello start")
})


const startDB = async () => {
  try {
    await connectDB('mongodb://localhost:27017/test')
    app.listen(3001,()=>{
      console.log('Server is running on http://localhost:3001/');
    })
  } catch (error) {
    console.log("Error")
  }
}
  
  startDB();

   

