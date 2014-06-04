# JSC

I built JSC as the engine on which to run jasonsnider.com. While designed to work out of the box, you should not 
consider any part of JSC to be a final implementation. This project was designed to allow me to update common features 
across multiple projects from any one of those projects while maintaining the ability to maintain unique aspects of 
anyone of those systems independently of other projects. The major goal of this project is to provide a starting point 
for new projects, be a simple website, a blog or an original idea. 

## Requires 
* CakePHP

## Powered By
* CakePHP
* jQuery
* Twitter Bootstrap
* HTML5BOILERPLATE
* HTML Purifier
* TinyMCE

### Plugins
* AuditLog
* Contents
* Users
* Utilities
* Tags
* Search
* Config

The setup makes the following assumptions
Your creating a project called jsc.org on the path /var/www/jsc.org
Your user name is jsnider
Apache runs as www-data

Adjust these jsc.org, /var/www/jsc.org, jsnider and www-data as needed

````
# Create a web directory, this directory needs to have access to a CakePHP library
cd /var/www
cd mkdir jsc.org
cd jsc.org
touch build
chmod +x build
````

Add the following to the file build
````
#!/bin/sh
 
#Rebuilds JSC from it's git repositories
#Jason D Snider <jason@jasonsnider.com>
 
##Start by removing the entire website
rm -fR /var/www/jsc.org/app 
 
##Build the code base
###Install the Tinker code base
cd /var/www/jsc.org && git clone git@github.com:jsc/jsc.git app

###Install the Config directory
cd /var/www/jsc.org/app/ && git clone git@github.com:jsc/Config.git Config

###Install the plugins
cd /var/www/jsc.org/app/Plugin/ && git clone git@github.com:jsc/Contents-plugin.git Contents
cd /var/www/jsc.org/app/Plugin/ && git clone git@github.com:jsc/Users-plugin.git Users
cd /var/www/jsc.org/app/Plugin/ && git clone git@github.com:jsc/Utilities-plugin.git Utilities
cd /var/www/jsc.org/app/Plugin/ && git clone git@github.com:jasonsnider/CakePHP-Audit-Log-Plugin.git AuditLog

###Install the vendor libraries
cd /var/www/jsc.org/app/Vendor/ && git clone git://repo.or.cz/htmlpurifier.git HtmlPurifier

sudo chown www-data:jsnider /var/www/jsc.org/lib/Cake/Cache -fR
sudo chown www-data:jsnider /var/www/jsc.org/app/tmp -fR
sudo chown www-data:jsnider /var/www/jsc.org/app/Vendor/HtmlPurifier/library/HTMLPurifier/DefinitionCache/Serializer -fR
````

````
#Build the project
./build
````

Create a database called `jsc` and the a username of `root` with the password of `password`. Please note these are 
simple default settings and are for local development only, for production you MUST change these values.

## Request Object Extensions

$checkForMeta - When this is set to true in a given action, the view of that action will make available a control 
element that will allow a user to manage the meta data of a given page. That page will then know it is to try and 
retrieve it's meta data. This is only intended for pages of a static nature. Pages created using CMS tools, such as a 
post or anything that retrieves data using some kind of a token (slug,id, etc) can manage it's own met data as part
of the CMS functionality.

Usage
````

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