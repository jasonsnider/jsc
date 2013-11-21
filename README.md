# The Parbake Project

The Parbake Project is CakePHP application comprised of a central app as well as collection of plugins, themes and
vendor libraries. Each plugin, theme and vendor library is pulled into the project using git submodules. This allows
the developer to control the level of continual integration. 

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

Create a database called `parbake` and the a username of `root` with the password of `password`. Please note these are 
simple default settings and are for local development only, for production you MUST change these values.

## Request Object Extensions

$checkForMeta - When this is set to true in a given action, the view of that action will make available a control 
element that will allow a user to manage the meta data of a given page. That page will then know it is to try and 
retrieve it's meta data. This is only intended for pages of a static nature. Pages created using CMS tools, such as a 
post or anything that retrieves data using some kind of a token (slug,id, etc) can manage it's own met data as part
of the CMS functionality.

Usage
````
# Set
$this->request->checkForMeta = true;

# Get
if($this->request->isEmployee){
    # Do something
}
````

$isEmployee - A boolean value that determines is a logged in user has any level of employee privs, if so additional UI
elements will be made available to that user.

Usage
````
# Set
$this->request->isEmployee = $this->isEmployee();

# Get
if($this->request->isEmployee){
    # Do something
}
````