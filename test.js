
//Reading in the csv data from Table.Loaner.csv
const csv = require('csv-parser');
const fs = require('fs');
const readline = require('readline');
const writer = require('csv-write-stream');
const util = require('util');
const exec = util.promisify(require('child_process').exec);
const lastLines = require('read-last-lines');
const prompting = require('prompt-sync')();

//Creating arrays to store the values 
let username = [];
let barcode = [];
let CB_AV = [];
let CB_OUT = [];
var d = new Date();
var current = d.getTime();
var lastRecord;

var rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});

var option; 

rl.question("What are you trying to loan (Pick a number)\n 1. Charger\n 2. Chromebook", function(answer) {
  option = answer;
  console.log(answer);
  rl.close();
});

function getInformation() {
  const ID = prompting("What is your student ID?");
  const BARCODE = prompting("What is the barcode )
}

switch (option) {
  case 1:
    console.log('charger');
    getInformation(); 
    break;
  case 2:
    console.log('chromebook');
    getInformation();
    break;
}




//Reading in the csv file
var gb = fs.readFileSync("Table.Loaner.csv", 'utf8').toString().split(',');
var cpy = fs.readFileSync('Table.Loaner.csv', 'utf8').toString().split('\r');

console.log("The last record placed into the csv\n");

//Reading the last record that has been added to the csv
lastLines.read('Table.Loaner.csv', 1).then((lines) => console.log(lines));


