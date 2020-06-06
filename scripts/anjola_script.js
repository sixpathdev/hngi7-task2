const data = {
    name: "Sanni Lateef Anjola",
    email: "sanni.anjola@gmail.com",
    id: "HNG-00645",
    language: "JavaScript",

}

const { name, id, email, language } = data;
const displayText = ({ name, id, language, email }) => (`Hello World, this is ${name} with HNGi7 ID ${id} using ${language} for stage 2 task email ${email}`);
console.log(displayText(data));