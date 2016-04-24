# Scryer

A flat file blog CMS written in Symfony 2 PHP

## Installation

1. [Install composer](https://getcomposer.org/download/) & [NPM](https://nodejs.org/en/) from NodeJS
2. Copy contents of repository by either cloning the repository or downloading a zip of the repository to a folder on a webserver that supports Symfony.
3. While in the command line in the webserver's `www` folder type the following command :`composer install`. This will install all of the vendor dependencies for you.
4. Install the node dependencies in the App/Resources directory through NPM. `cd {INSERT YOUR WEBROOT HERE}/app/Resources` `npm install`
5. If you'd like you can also add the secret parameter to the app in app/config/parameters.yml, but it will also be autogenerated during composer install.


## Usage

1. Add content to the web/posts/ directory.
2. Change template headers located in app/Resources/views/ under partials and the base.html.twig file.

## Todo

1. Change theming
2. Add typography
3. Minify CSS