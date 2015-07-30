API Documentation Generator
===========================

## Overview

This project setup is designed to automate the documentation of your API.

Using a combination of...
 
 - API-specific PHPDoc comments
 - The Node task runner [Grunt](http://gruntjs.com/)
 - The [APIDoc](http://apidocjs.com/) NPM module

...HTML documentation will be automatically generated from source PHP files as they are annotated and saved.

The resulting documentation can be viewed in the browser:

 - [http://localhost:9999](http://localhost:9999)

Any changes to the watched source files will automatically rebuild the docs and reload the browser.

An example of the generated documentation can be seen [here](http://apidocjs.com/example/).


## Installation

Ensure that Node is installed on your system, and ensure that the following packages are installed globally

Grunt CLI

    npm install grunt-cli -g

APIDoc

    npm install apidoc -g

Then install the project's modules by running the following command from the command line in `docs` folder:

    npm install


## Configuration and Build

### Configuration

To configure which files are watched, open `Gruntfile.js` and edit the variables in the head of the file.

Currently, `api/routes` is watched for changes.


### Starting the build process

Run the following command in the project's root folder:

    grunt

This will:

 - Open the browser to the documentation URL
 - Monitor the input folder for changes
 - Rebuild the static documentation files when source files change
 - Reload the browser when the documentation rebuilt

Leave the command window open and the files will continue to be monitored.


## Documenting the PHP code

The project's route callbacks should be documented in the following manner:


    /**
     * @api {get} /user/:id Request User information
     * @apiName GetUser
     * @apiGroup User
     *
     * @apiParam {Number} id Users unique ID.
     *
     * @apiSuccess {String} firstname Firstname of the User.
     * @apiSuccess {String} lastname  Lastname of the User.
     */
    $app->post( '/', function() use ($app)
    {
        ...
    }


See the APIDoc JS project's [documentation](http://apidocjs.com/#params) for the full list of supported annotations.





