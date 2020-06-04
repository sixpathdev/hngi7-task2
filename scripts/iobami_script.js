
const name = "Ayobami Aladenoye";
const id = "HNG-04665";
const email = "ayobamialadenoye@gmail.com";
const language = "JavaScript";
const myInfo = {
    name,
    id,
    language,
    email,
};

const printMyInfo = ({name, id, language}) => (`Hello World, this is ${name} with HNGi7 ID ${id} using ${language} for stage 2 task`);

console.log(printMyInfo(myInfo));
