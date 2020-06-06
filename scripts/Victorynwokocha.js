let userInfo = () =>{
    const details ={
        Name : 'Victory Nwokocha',
        hng_id: 'HNG-05224',
        email_Address: 'nwokochavictory47@gmail.com',
        language: 'Javascript',
    }

    return 'Hello World, this is '  + details.Name  + ' with HNGi7 ID ' + details.hng_id  + ' using ' + details.language + ' for stage 2 task email ' + details.email_Address;
}

console.log(userInfo());
