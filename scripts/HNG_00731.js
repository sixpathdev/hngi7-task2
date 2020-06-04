var fs = require('fs');

var dataObject = {
  file: 'HNG-00731.js',
  name: 'Peter Baraka',
  email: 'pbobaraka@gmail.com',
  iD: 'HNG-00731',
  language: 'Javascript',
};

var resultObject = {
  file: dataObject.file,
  name: dataObject.name,
  email: dataObject.email,
  iD: dataObject.iD,
  language: dataObject.language,
  output:
    'Hello World, this is ' +
    dataObject.name +
    ' with HNGi7 ID ' +
    dataObject.iD +
    ' using ' +
    dataObject.language +
    ' for stage 2 task',
  status: 'Pass',
};

fs.writeFile(
  './scripts/results.json',
  JSON.stringify(resultObject, null, 4),
  (err) => {
    if (err) {
      console.error(err);
      return;
    }
    console.log('results.json has been created');
  }
);
