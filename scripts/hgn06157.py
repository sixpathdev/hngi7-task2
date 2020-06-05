#HNGi7 TASK FOR STAGE 2
#TEAM FLASH

data = {
        'id': "HNG-06157",
        'fullname': "TOURE Lamagnigui",
        'email': "lamagniguitoure@gmail.com",
        'language': "Python"

    }

def presentation(fullname, id, email, language):
    return "Hello World, this is {} with HNGi7 ID {} and email {} using {} for stage 2 task".format(fullname, id, email, language )

print(presentation(data['fullname'],data['id'], data['email'], data['language']))