# PHP-Training

Steps to setup and run the project locally using XAMPP:
-------------------------------------------------------

This repository is a collection of **core PHP concepts**, grouped by topic for easier learning.  
Each directory includes example scripts and practical exercises aimed at helping you understand how PHP works from the scratch.

. Perfect for anyone for revisiting PHP basics.

------

Folder structure.

| Folder                    | Topics Covered                                                 |
|---------------------------|----------------------------------------------------------------|
| `Arrays/`                 | Indexed, Associative, Multidimensional arrays, filtering, map |
| `Classes and Objects/`    | Object-oriented PHP: classes, methods, and basic OOP logic     |
| `Cookies/`                | Creating, retrieving, and deleting cookies                     |
| `Functions/`              | Defining and using functions, parameters, returns              |
| `Loops/`                  | Loop structures: `for`, `foreach`, and `while`                 |
| `PHP Forms/`              | Handling HTML forms, form submission using GET/POST            |
| └── `Form Validations/`   | Validating inputs: empty fields, length, data type             |
| `Session/`                | Starting and using PHP sessions                                |
| `String/`                 | String operations and transformations                          |
| `Variables/`              | Variable declarations and scope demonstration                  |
| `conditionalStatement/`   | Basic conditionals: `if`, `if-else`                            |
| Root-Level PHP Files      | Additional examples like `EchoPrint.php` and utility files     |

---

. Tools Required

Step1: Make sure you have the following installed:

- **XAMPP** (to run PHP locally)
- **VS Code** (or any editor you prefer)
- A browser (Chrome, Edge, Firefox, etc.)

---

Step2: Setting Up the Project with XAMPP

To run this project on your system, follow these steps:

 1. Download & Install XAMPP

Head to [apachefriends.org](https://www.apachefriends.org/index.html)  
Download the installer for your OS and complete the installation.

 2. Start Apache Server

- Open the **XAMPP Control Panel**
- Click **Start** next to **Apache**

You only need Apache — MySQL is not required for this project until and unless you're working with databases.

 3. Clone or Download the Project

Clone the repository using Git:

bash
**git clone https://github.com/your-username/PHP-Training.git**

Or download it as a ZIP file and extract it.
--------------------------------------------------------------------
4. Place the Folder in htdocs
Move the full PHP-Training folder to XAMPP’s htdocs directory.

Typical Locations:

macOS: /Applications/XAMPP/xamppfiles/htdocs/PHP-Training

🔐 All PHP projects should be placed inside the htdocs folder to be accessible through localhost.

5. Access the Project in Your Browser
Once Apache is running, open your browser and navigate to:

http://localhost/PHP-Training/
To open a particular PHP file inside a folder:

http://localhost/PHP-Training/<folder-name>/<file-name>.php
🔍 Example: To run Arrays-Index.php inside the Arrays/ folder:

http://localhost/PHP-Training/Arrays/Arrays-Index.php


NOTE: Important VS code extensions:
PHP Server – Instantly preview PHP files in your browser without launching Apache.

PHP Intelephense – Smart code completion, live error checking, and quick documentation.

NEXT STEP:
Replace `your-username` with your actual GitHub username.
- Add the above content to your `README.md` file at the root of the repository.
- Commit and push the changes to GitHub.
