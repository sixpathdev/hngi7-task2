const Nonso2 = { 
    myName:"Nonso Ezebuiro",  
    myId: "HNG-06515", 
    myEmail: "donaldezebuiro@gmail.com", 
    language: "Javascript"
}

var email = Nonso2.myEmail;
var hng_id = Nonso2.myId;

function myDetails(intern) {
    if (intern == "Nonso"){
        message =  "Hello World, this is " + Nonso2.myName + " with HNGi7 ID " + Nonso2.myId + " using " + Nonso2.language + " for stage 2 task email " + email;}
    return message;}
    
console.log(myDetails("Nonso"))