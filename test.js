
//Reading in the csv data from Table.Loaner.csv
const csv = require('csv-parser')
const fs = require('fs')
const results = [];
const readline = require('readline')


//Reading in the csv file
fs.createReadStream('Table.Loaner.csv')
  .pipe(csv())
  .on('data', (data)=> results.push(data))
  .on('end', ()=> console.log(results));

//Creating arrays to store the values 
let username = [];
let barcode = [];
let CB_AV = [];
let CB_OUT = [];
var d = new Date();
var current = d.getTime();

var rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});

var option; 

rl.question("What are you trying to loan", function(answer) {
  option = answer;
  console.log(answer);
  rl.close();
  console.log(current);
});

alert(current);



