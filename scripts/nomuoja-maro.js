//jshint esversion:6
const  fullName = "Nomuoja Oghenemaro";
const  hngId = "HNG-06080";
const  language = 'Javascript';

task(fullName,hngId,language);

function task (fullName,hngId,language){
  return `Hello World, this is ${fullName} with HNGi7 ID ${hngId} using ${language} for stage 2 task`;
}
