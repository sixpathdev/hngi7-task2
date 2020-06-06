let userInfo = () =>{
    const details ={
        Name : 'Victory Nwokocha Ozioma',
        hng_Id: 'HNG-05224',
        email_Address: 'nwokochavictory47@gmail.com',
        language: 'Javascript',
    }

    return 'Hello World, this is '  + details.Name  + ' with HNGi7 ID ' + details.hng_ID  + ' using ' + details.language + ' for stage 2 task email ' + details.email_Address;
}

console.log(userInfo());