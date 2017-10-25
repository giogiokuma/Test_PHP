'use strict'; 

const fs = require('fs'); 
const readline = require('readline'); 
const rs = fs.ReadStream('./data_list.csv');
const rl = readline.createInterface({ 'input': rs, 'output': {} });
const map = new Map(); // key: 給水所名称 value: データ
rl.on('line', (lineString) => {
    const columns = lineString.split(','); 
    const index = parseInt(columns[0]);
    const place = columns[1];
    const cup_L = parseInt(columns[8]);
    const cup_S = columns[9]; 
    if (index >= 1 || index <= 28) {
        console.log('[' + place + ']' + cup_L + cup_S); 
    }
    
});