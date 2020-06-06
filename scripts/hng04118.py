class Intern:
    def __init__(self, name, board_id, script, email):
        self.name = name
        self.board_id = board_id
        self.script = script
        self.email = email

    def __repr__(self):
        return f'Hello World, this is {self.name} with HNGi7 ID {self.board_id} using {self.script} for stage 2 task email {self.email}.'


samad = Intern(name="Adeleke Abdulsamad",
               board_id="HNG-04118",
               script="python",
               email="dekunle02@gmail.com"
               )

print(samad)

"""
    Hello World, this is YOUR NAME with HNGi7 ID YOUR ID using THE LANGUAGE for stage 2 task email YOUR EMAIL HERE.
"""