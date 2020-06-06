const output = () => {
  const info = {
    fullName: "Favour Igwe",
    hngId: "HNG-01067",
    email: "favchiazokam@gmail.com",
    language: "javascript",
  };
  return (
    "Hello  World, this is " +
    info.fullName +
    " with HNGi7 ID " +
    info.hngId +
    " using " +
    info.language +
    " for stage 2 task email " +
    info.email
  );
};

console.log(output());
