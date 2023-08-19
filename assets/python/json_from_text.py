import os
import json
#from watchdog.observers import Observer
#from watchdog.events import FileSystemEventHandler

# Path to the directory containing text files
text_files_directory = "../updates/"

# Function to compile text files into JSON
def compile_text_to_json():
    publications = []

    for filename in os.listdir(text_files_directory):
        if filename.endswith(".txt"):
            with open(os.path.join(text_files_directory, filename), "r") as file:
                
                date = ""
                title = ""
                tag = ""
                innertitle = ""
                description = ""
                
                content = file.read()
                # Split content
                lines = content.split("|")

                for line in lines:
                    extract = line.split(":")
                    
                    if (extract[0] == "date"):
                        date = extract[1]
                    elif (extract[0] == "\ntitle"):
                        title = extract[1]
                    elif (extract[0] == "\ntag"):
                        tag = extract[1]
                    elif (extract[0] == "\ninnertitle"):
                        innertitle = extract[1]
                    elif (extract[0] == "\ndescription"):
                        description = extract[1]
                    else:
                        pass

                # Create a publication object
                publication = {
                    "date": date,
                    "title": title,
                    "tag": tag,
                    "innertitle": innertitle,
                    "description": description,
                }

            # Append the publication object to the list
            publications.append(publication)

    # Write the publications list to a JSON file
    with open(text_files_directory+"updates.json", "w") as json_file:
        json.dump(publications, json_file, indent=4)

### Watchdog event handler
##class TextFileHandler(FileSystemEventHandler):
##    def on_created(self, event):
##        if event.is_directory:
##            return
##        if event.src_path.endswith(".txt"):
##            compile_text_to_json()
##
### Create the Watchdog observer and start monitoring
##event_handler = TextFileHandler()
##observer = Observer()
##observer.schedule(event_handler, path=text_files_directory, recursive=False)
##observer.start()
##
##try:
##    while True:
##        observer.join()
##except KeyboardInterrupt:
##    observer.stop()
##observer.join()

compile_text_to_json()
