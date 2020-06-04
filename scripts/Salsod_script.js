const sodiqData = (function (){
   let myData = {
        email: 'Salsod1st@gmail.com',
        file: 'Salsod_script.js',
        name: 'Salaudeen Sodiq',
        id: 'HNG-02654',
        language: 'JavaScript',
        greetings: 'Hello World',
        stage: ' for stage 2 task',
        language: 'JavaScript',
        status: 'Pass',
        introduction: function() {
            let output = `${myData.greetings}, this is ${myData.name} with HNGi7 ID ${myData.id} using ${myData.language} ${myData.stage} email ${myData.email}`;
            return output;
        }
    }

    return myData.introduction()

})();

console.log(sodiqData);

