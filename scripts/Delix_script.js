const  PERSONAL= {
    name: 'Dumisani Tom',
    id: 'HNG-00258',
    email: 's212317165@gmail.com',
    language:'Javascript'
};

const Message = ()=>
{
    return  `Hello World, this is ${PERSONAL.name} with HNGi7 ID ${PERSONAL.id} using ${PERSONAL.language} for stage 2 task.`;
}

console.log(Message());
