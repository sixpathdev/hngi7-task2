let userInfo = () =>{
    const details ={
        Name : 'Victory Nwokocha Ozioma',
        hng_Id: 'HNG-05224',
        email_Address: 'nwokochavictory47@gmail.com',
        language: 'Javascript',
    }

    return 'Hello World, this is '  + details.Name  + ' with HNGi7 Id ' + details.hng_Id  + ' using ' + details.language + ' for stage 2 task.';
}

console.log(userInfo());