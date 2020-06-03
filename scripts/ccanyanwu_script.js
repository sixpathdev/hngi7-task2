//function that returns my full details as a string 
 const myDetails = () => {
   //object to hold my data 
   const bio ={
     name : 'Chukwuemeka Collins Anyanwu',
     id : 'HNG-00278',
     email : 'eme42c@gmail.com',
     lang : 'JavaScript'
   } 
         
         //returns a string containing details 
   return `Hello World, this is ${bio.name} with HNGi7 ID ${bio.id} using ${bio.lang} for stage 2 task`;
 }
 
 //prints this output to the browser
document.write(myDetails());