'use strict'; 

const fs = require('fs');
const readline = require('readline'); 
const rs = fs.ReadStream('./data6.csv');
const rl = readline.createInterface({ 'input': rs, 'output': {} });
const map = new Map();
rl.on('line', (lineString) => {
    const columns = lineString.split(',');
    //const date1 = parseInt(columns[0]);
    const date1 = columns[0];
    const val = columns[1]; 
    
    console.log('[' + date1 + ']' + ' ' + val);

});
