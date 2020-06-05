//jshint esversion:6
const email = 'nomuojamaro@gmail.com';
const  name = "Nomuoja Oghenemaro";
const  hngId = "HNG-06080";
const  language = 'Javascript';

var message = task(name,hngId,language,email);

console.log(message);

function task (name,hngId,language,email){
  
  return `Hello World, this is ${name} with HNGi7 ID ${hngId} using ${language} for stage 2 task email ${email}`;
  
}
