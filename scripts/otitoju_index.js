function taskTwo() {
    var data = {
        fullname: "OTITOJU JOHN OLUWAPELUMI",
        id: "HNG-01044",
        email: "otitojuoluwapelumi@gmail.com",
        language: "javaScript"
    }
    var output = `Hello World, this is ${data.fullname} with HNGi7 ID: ${data.id} and email ${data.email} using ${data.language} for stage 2 task.`
    return output
}
console.log(taskTwo())