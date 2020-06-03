

  
//initializing important variables
let fname = "Osara Wisdom";
let id = "HNG-04550";
let language = "JavaScript";

//defining the function
function getGreeting(){
  return `Hello World, this is ${fname} with HNGi7 ID ${id} using ${language} for stage 2 task.`
}

//calling the function incase index.php cant read the document.write
getGreeting()

//outputing to the browser
document.write(getGreeting())
