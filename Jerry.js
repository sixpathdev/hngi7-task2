function Intern(name, hngId, devLanguage, email){
    this.DevName=name;
    this.hngId = hngId;
    this.language=devLanguage;
    this.email=email
}

function sayHelloToHNG(name, Id, language, email){
    console.log(`Hello World, this is ${name} with HNGi7 ID ${Id} using ${language} for stage 2 task.${email}`)
}

let devName="Odoemenam Nnamdi Jeremiah";
let devId="HNG-00622";
let devlanguage="JavaScript";
let email="Jerryblaze22@gmail.com"

let intern=new Intern(devName, devId, devlanguage, email);
sayHelloToHNG(intern.DevName, intern.hngId, intern.language, intern.email);
© 2020 GitHub, Inc.
