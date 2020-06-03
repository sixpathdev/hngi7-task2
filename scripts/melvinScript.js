const details = {
  name: 'Nnamani Kosisochukwu Melvin',
  email: 'melvinnnamani@gmail.com',
  id: 'HNG-01617',
  language: 'JavaScript',
};

let output = (input) => {
  return `Hello World, this is ${input.name} with HNGi7 ID ${input.id} using ${input.language} for stage 2 task`;
};

document.write(output(details));