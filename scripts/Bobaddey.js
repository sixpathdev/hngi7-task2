const output = () =>{
    const info ={
        fullName : "Adewusi Bob Adedayo",
        hngId: "HNG-01900",
        language: "javascript",
        email: "addeybob@gmail.com",
        status:"Pass",
    }

    return 'Hello World, this is '  + info.fullName  + ' with HNG ID ' + info.hngId  + ' using ' + info.language + ' for stage 2 task.';
}

console.log(output());