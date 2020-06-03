import os

file_path = os.path.abspath("C:/Users/USER/OneDrive/Desktop/Personal Documents/HNGi7_Tasks/Task2/hngi7-task2/index.php")
def run_phpfile():
    open_file = open(file_path)
    if open_file:
        print("file open")
    else:
        print("Error")

run_phpfile()
