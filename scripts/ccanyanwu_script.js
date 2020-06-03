
 //function that returns my full details as a string 
 const myDetails = () => {
   //variables to hold my data 
   const name = 'Chukwuemeka Collins Anyanwu',
         id = 'HNG-00278',
         email = 'eme42c@gmail.com',
         language = 'JavaScript';
         
         //returns a string containing details 
   return `Hello World, this is ${name} with HNGi7 ID ${id} and email ${email} using ${language} for stage 2 task`;
 }
 
 //prints this output to the browser
document.write(myDetails());