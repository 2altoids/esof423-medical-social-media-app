<center> <h1>Medical Social Media Network </h1> </center>
<center> <h2>Developer Documentation </h2> </center>

This documentation is for developers who wish to contribute the the application.  The documentation is split into 7 different categories:

* Latest Release Code
* Fastest Development Code
* Directory Layout
* Setup
* Testing
* Creating a new Release
* Outstanding and Resolved Issues





<h3>Latest Release Code</h3>

To obtain the latest release code  visit the github repository at:
[https://github.com/2altoids/esof423-medical-social-media-app](https://github.com/2altoids/esof423-medical-social-media-app) and clone the master branch to download the latest release code.

The method for obtaining the latest release code may change as updates are made to the application.  Any changes in how to access the latest release code will be posted here.

<h3>Latest Development Code</h3>

To obtain the latest release code  visit the github repository at:
[https://github.com/2altoids/esof423-medical-social-media-app/tree/develop](https://github.com/2altoids/esof423-medical-social-media-app/tree/develop) and clone the master branch to download the latest code currently under development.

Please be aware that development branch may contain unknown bugs or other unknown issues.

<h3>Directory Layout</h3>

The directory layout is as follows for the current release:

├── css

│   ├── dcotor.css

│   └── global.css

├── html

│   └── clinician.html

├── images

├── php

│   ├── login.php

│   └── register.php

├── devDocs.md

├── userDocs.md

├── index.html

├── .travis.yml

└── README.md

With the "css" directory containing css files, the "php" directory containing php scripts, the "html" directory containing any needed html files and finally the "images" directory containing any referenced images.


<h3>Setup</h3>

To setup for development clone the latest stable development code to your local machine.

If PHP is not installed on your machine install the latest version of PHP as well as an editor to properly edit php files.

Next you will need configure the .php scripts in the php folder to correctly connect to your local or remote databases.

Once the databases have been configured you should be ready to begin development.

<h3>Testing</h3>

Testing is accomplished using Travis CI, which automates builds and tests.  Travis CI documentation can be found here:  [https://docs.travis-ci.com/](https://docs.travis-ci.com/).  The behavior of Travis CI is defined in the `.travis.yml` specification file in the main directory.

Unit testing specifications are currently under development.


<h3>Creating a new Release</h3>

We are currently developing the guidelines for contributor based releases

<h3>Outstanding and Resolved issues</h3>

There are no outstanding or resolved issues as of 3/1/2019
