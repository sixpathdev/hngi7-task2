const person = () => {
    const me = {
        fullName: 'Deborah Pius',
        ID: 'HNG-04925',
        language: 'Javascript',
        email: 'hasuip11@gmail.com'
    }
    return 'Hello World, this is '+ me.fullName +' with HNGi7 ID '+ me.ID +' using '+ me.language +' for stage 2 task email ' + me.email +'' ;
};
console.log(person());