let info = {
  full_name: 'Herbert Olinga',
  id: 'HNG-03838',
  lang: 'Javascript',
  email_address: 'tikewilly@gmail.com',
};

let displayOutput = ({ full_name, id, lang, email_address }) => {
  console.log(
    `Hello World, this is ${full_name} with HNGi7 ID ${id} using ${lang} for stage 2 task and ${email_address}.`
  );
};

displayOutput(info);
