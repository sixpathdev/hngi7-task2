const name = 'Ayobami Aladenoye';
const hng_id = 'HNG-04665';
const email = 'ayobamialadenoye@gmail.com';
const preferredLanguage = 'JavaScript';

const myInfo = {
    fullName: name,
    HNGi7_id: hng_id,
    preferredLanguage: preferredLanguage,
    email: email,
};

const getMyInfo = ({ fullName, HNGi7_id, preferredLanguage }) => {

    return `Hello World, this is ${fullName} with HNGi7 ID ${HNGi7_id} ` +
        `using ${preferredLanguage} for stage 2 task`;
};

console.log(getMyInfo(myInfo));
