# Guidelines to post an update in the website

How to post an update in the Updates section of the website?

1) Edit example_template.txt  
a) Do NOT remove the key symbols (:: and |) and keywords (date, maintitle, tag, subtitle, description, link)  
b) Make sure the text entered is enclosed between :: and |  
c) It is not necessary to fill everything. For eg: link::| is a valid response  
d) Refer to the reference image to understand what each keyword represents  

3) Rename example_template.txt to X_(your custom name).txt (eg: 2_recruitment.txt), where X is the number of the update.
The number can be found by looking at the assets/updates/ folder.

4) After renaming, drop the file in the assets/updates/ folder.

5) Execute the json_from_text.py script in the assets/python/ folder. This will read through all the txt files within the
assets/updates/ folder and generate a JSON file (updates.json in assets/updates/) combining all the txt files.

6) Update the above changes (push and commit) on github to publish the new update.

Notes:
1) It is possible to use HTML styling within the template.
2) For any update beyond the scope of the template, it is better to create a blog post (A template for creating a blog post will be created soon)
   
   
