//jshint esversion:6
const  fullName = "Nomuoja Oghenemaro";
const  hngId = "HNG-06080";
const  language = 'Javascript';
const email = 'nomuojamaro@gmail.com';

console.log(task(fullName,hngId,language,email));

function task (fullName,hngId,language,email){
  return `Hello World, this is ${fullName} with HNGi7 ID ${hngId} and email ${email} using ${language} for stage 2 task`;
}
