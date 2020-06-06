 var details = {
 	name : "Abdullahi Luqman" ,
 	email : "luqmonac56@gmail.com",
 	lang : "Javascript",
 	hngId : "HNG-03395",
 };

var work = function (){
	return `Hello World, this is ${details.name} with HNGi7 ID ${details.hngId} using ${details.lang} for stage 2 task email ${details.email}`
};
console.log(work());