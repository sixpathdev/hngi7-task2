const getdetails = () => {
    const details = {
        name: "Oluwatosin Oladimeji Oladokun",
        hngid: "HNG-03984",
        language: "javascript",
        email: "tosinoladokun3@gmail.com"
    }
    return "Hello world this is " 
    + details.name 
    + " "
    + "with HNGi7 ID "
    + details.hngid
    + " "
    + "using"
    + " "
    + details.language
    + " "
    + "for stage 2 task"
}

console.log(getdetails());