# The Parbake Project

Built on top of CakePHP, jQuery and Twitter-Bootstrap. The Parbake Project helps me launch web applications very 
quickly. Over the years I have become comfortable with a particular development work flow that involves Git, this 
project encompasses that work flow with my favorite RAD tools. The idea is to quickly launch a web site that can be
molded into a full blown application. The goal is concept to product as quickly as possible.

Requires CakePHP

The setup makes the following assumptions
Your creating a project called parbake.org on the path /var/www/parbake.org
Your user name is jsnider
Apache runs as www-data

Adjust these parbake.org, /var/www/parbake.org, jsnider and www-data as needed

````
# Create a web directory, this directory needs to have access to a CakePHP library
cd /var/www
cd mkdir parbake.org
cd parbake.org
touch build
chmod +x build
````

Add the following to the file build
````
#!/bin/sh
 
#Rebuilds The Parbake Project from it's git repositories
#Jason D Snider <jason@jasonsnider.com>
 
##Start by removing the entire website
rm -fR /var/www/parbake.org/app 
 
##Build the code base
###Install the Tinker code base
cd /var/www/parbake.org && git clone git@github.com:parbake/parbake.git app

###Install the Config directory
cd /var/www/parbake.org/app/ && git clone git@github.com:parbake/Config.git Config

###Install the plugins
cd /var/www/parbake.org/app/Plugin/ && git clone git@github.com:parbake/Contents-plugin.git Contents
cd /var/www/parbake.org/app/Plugin/ && git clone git@github.com:parbake/Users-plugin.git Users
cd /var/www/parbake.org/app/Plugin/ && git clone git@github.com:parbake/Utilities-plugin.git Utilities
cd /var/www/parbake.org/app/Plugin/ && git clone git@github.com:jasonsnider/CakePHP-Audit-Log-Plugin.git AuditLog

###Install the vendor libraries
cd /var/www/parbake.org/app/Vendor/ && git clone git://repo.or.cz/htmlpurifier.git HtmlPurifier

sudo chown www-data:jsnider /var/www/parbake.org/lib/Cake/Cache -fR
sudo chown www-data:jsnider /var/www/parbake.org/app/tmp -fR
sudo chown www-data:jsnider /var/www/parbake.org/app/Vendor/HtmlPurifier/library/HTMLPurifier/DefinitionCache/Serializer -fR
````

````
#Build the project
./build
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