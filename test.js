
//Reading in the csv data from Table.Loaner.csv
const csv = require('csv-parser');
const fs = require('fs');
const readlines = require('readline');
const writer = require('csv-write-stream');
const util = require('util');
const exec = util.promisify(require('child_process').exec);
const lastLines = require('read-last-lines');
const prompting = require('prompt');
const readline = require('readline-sync');

//Creating arrays to store the values 
let username = [];
let barcode = [];
let CB_AV = [];
let CB_OUT = [];
var d = new Date();
var current = d.getTime();
var lastRecord;
var id;
var CB_BARCODE;

var rl = readlines.createInterface({
  input: process.stdin,
  output: process.stdout
});

var option; 

rl.question("What are you trying to loan (Pick a number)\n 1. Charger\n 2. Chromebook", function(answer) {
  option = Number(answer);
  console.log(answer);
  rl.close();
});

console.log("\n");

function ask() {
  prompting.get(['username', 'barcode'], function(err, result) {
    var r = result.username;
    var d = result.barcode;
    console.log(r);
    console.log(d);
    });
}

prompting.start();

switch (option) {
  case 1:
     console.log('charger');
      ask.call();
      break;
  case 2:
      console.log('chromebook');
      ask.call();
      break;
  default:
      break;
}

//Reading in the csv file
var gb = fs.readFileSync("Table.Loaner.csv", 'utf8').toString().split(',');
var cpy = fs.readFileSync('Table.Loaner.csv', 'utf8').toString().split('\r');


//Reading the last record that has been added to the csv
//lastLines.read('Table.Loaner.csv', 1).then((lines) => console.log(lines));


