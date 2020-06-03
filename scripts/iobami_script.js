const getMyInfo = ({ fullName, HNGi7_id, preferredLanguage }) => {

    return `Hello World, this is ${fullName} with HNGi7 ID ${HNGi7_id} ` +
     `using ${preferredLanguage} for stage 2 task`;
};

const myInfo = {
    fullName: 'Ayobami Aladenoye John',
    HNGi7_id: 'HNG-04665',
    preferredLanguage: 'JavaScript',
};

console.log(getMyInfo(myInfo));
