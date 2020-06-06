class Intern:
    def __init__(self, name, board_id, script, email):
        self.name = name
        self.board_id = board_id
        self.script = script
        self.email = email

    "Hello World, this is [yourfull-name] with HNGi7 ID [yourID] and email [youremail] using [language] for stage 2 task"

    def __repr__(self):
        return f'Hello World, this is {self.name} with HNGi7 ID {self.board_id} and email {self.email} using {self.script} for stage 2 task'


samad = Intern(name="Adeleke Abdulsamad",
               board_id="HNG-04118",
               script="python",
               email="dekunle02@gmail.com"
               )

print(samad)