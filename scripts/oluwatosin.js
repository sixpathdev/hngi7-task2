const getdetails = () => {
    const details = {
        name: "Oluwatosin Oladokun",
        hngid: "HNG-03984",
        email: "tosinoladokun3@gmail.com",
        language: "javascript"
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
    + "for stage 2 task "
    + "email "
    + details.email
}

console.log(getdetails());