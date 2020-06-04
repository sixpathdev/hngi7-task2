const output = () => {
  const info = {
    fullName: "Favour Igwe",
    hngId: "HNG-01067",
    email: "favchiazokam@gmail.com",
    language: "javascript",
  };
  return (
    "Hello world, this is " +
    info.fullName +
    " with HNG ID " +
    info.hngid +
    " using " +
    info.language +
    " for stage 2 task email " +
    info.email +
    "."
  );
};

console.log(output());
