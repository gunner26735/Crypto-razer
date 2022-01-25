const {
    createConnection
} = require('mysql');

const connection = createConnection({
    host : 'localhost',
    user : 'root',
    password : '',
    database : 'crypto_razer',
});

connection.query('select * from donor', (err, result, fields) =>{
    if(err){
        return console.log(err);
    }
    return console.log(result);
});