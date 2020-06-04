const HUMAN = {
	name: 'Bongi Mkhonza',
	ID: 'HNG-01263',
	email: 'bongi.buzzyb@outlook.com',
	language: 'Javascript'
};

const Text = ()=>
{
	return 'Hello World, this is ${HUMAN.name} with HNGi7 ID ${HUMAN.id} and email ${HUMAN.email} using ${HUMAN.language} for stage 2 task.';
}
console.log(Text());