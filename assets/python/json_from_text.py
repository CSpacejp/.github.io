import os
import json
#from watchdog.observers import Observer
#from watchdog.events import FileSystemEventHandler

# Choose the language
language = "en"

# Path to the directory containing text files
text_files_directory = "../updates/{}/".format(language)

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
                link = ""
                
                content = file.read()
                # Split content
                lines = content.split("|")

                for line in lines:
                
                    extract = line.split("::")
                    
                    if ("date" in extract[0]):
                        print("Date OK")
                        date = extract[1]
                    elif ("main" in extract[0]):
                        print("Maintitle OK")
                        title = extract[1]
                    elif ("tag" in extract[0]):
                        print("Tag OK")
                        tag = extract[1]
                    elif ("sub" in extract[0]):
                        print("Subtitle OK")
                        innertitle = extract[1]
                    elif ("description" in extract[0]):
                        print("Description OK")
                        description = extract[1]
                    elif ("link" in extract[0]):
                        print("Link OK")
                        print("\n\n")
                        try:
                            link = extract[1]
                        except:
                            pass
                    else:
                        pass

                # Create a publication object
                publication = {
                    "date": date,
                    "title": title,
                    "tag": tag,
                    "innertitle": innertitle,
                    "description": description,
                    "link": link,
                }

            # Append the publication object to the list
            publications.append(publication)

    # Write the publications list to a JSON file
    with open("../updates/updates_{}.json".format(language), "w") as json_file:
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
