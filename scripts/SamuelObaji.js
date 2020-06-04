const hngStageTwo = () => {
  const information = {
    myFullName: "Samuel Obaji",
    myId: "HNG-05528",
    myEmail: "obajisamuelekene@gmail.com",
    myLanguage: "Javascript",
  };
  return `Hello World, this is ${information.myFullName} with HNGi7 ID ${information.myId} using ${information.myLanguage} for stage 2 task`;
};
console.log(hngStageTwo());
