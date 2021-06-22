
//Reading in the csv data from Table.Loaner.csv
const csv = require('csv-parser')
const fs = require('fs')
const results = [];
fs.createReadStream('Table.Loaner.csv')
  .pipe(csv())
  .on('data', (data)=> results.push(data))
  .on('end', ()=> console.log(results));
