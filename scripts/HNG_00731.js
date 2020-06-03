var fs = require('fs');

var dataObject = {
  name: 'Peter Baraka',
  email: 'pbobaraka@gmail.com',
  iD: 'HNG-00731',
  language: 'Javascript',
};

var resultObject = {
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
  status: '',
};

fs.writeFile(
  './scripts/results.json',
  JSON.stringify(resultObject, null, 4),
  (err) => {
    if (err) {
      console.error(err);
      return;
    }
    console.log('The result file has been created');
  }
);
