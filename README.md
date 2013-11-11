# The Parbake Project

The Parbake Project is a collection of plugins and themes for CakePHP. At the core of the project is three plugins 
Utilities, Users and Content; and two themes Parbake and BootstrapParbake. This repository (parbake) provides a simple 
common application (or I suppose you could look at it as a configuration) for working with these as well as other FOSS
and CakePHP community plugins out of the box. You may use this app as a quick start or use the plugins on an as needed
basis.
 
To use this as a quick start, simply clone the repository as a CakePHP app directory. 

The following assumes your creating a project called my-project at /var/www adjust these paths and names accordingly. 

````
# Create a web directory, this directory needs to have access to a CakePHP library
cd /var/www
cd mkdir my-project
cd my-project

# Clone the parbake project
git clone git@github.com:parbake/parbake.git app

# pull the submodules (plugins, themes and vendor directories) into the project
cd app
git submodule update --init --recursive
````

You will want to make Cake/Cache and app/tmp writable by the server, I do this by changing ownership to the Apache 
(www-data) process and the user group that is responsible for maintaining the web directories (some-user). Server 
paths, user and groups names will likely vary.

````
sudo chown www-data:some-user /var/www/my-project/lib/Cake/Cache -fR
sudo chown www-data:some-user /var/www/my-project/app/tmp -fR

sudo chown www-data:some-user /var/www/my-project/app/Vendor/HtmlPurifier/library/HTMLPurifier/DefinitionCache/Serializer -fR
````

Create a database called `cakephp_plugins` and the a username of root with the password of `password`. Since the goal
of this application is to help with the local development of CakePHP plugins, I'm not worried about security.