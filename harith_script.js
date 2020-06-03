const hngDetails = {
    "firstname" : "Harith",
    "lastname" : "Onigemo",
    "HNG_ID": "HNG-01227",
    "Email": "onigemotosin@gmail.com"
}

let name = hngDetails.firstname + " " + hngDetails.lastname;
let hngid = hngDetails.HNG_ID;
let emailAdd = hngDetails.Email;

console.log(`My name is ${name} and my HNG ID is ${hngid}, my email address is ${emailAdd}`)