This is the content for the website at [hackasaurus.org/hackbook].

## Prerequisites

You need either PHP and Apache, or Python.

Note that PHP should only be used for server-side includes via the 'include_once()' function.

## Architecture

This Website is just a bunch of static HTML/JS/CSS files. The header, footer and code snippets are loaded into the file with PHP includes.

## Setup

Just run this at the terminal prompt:

    cd hackbook
    python manage.py runserver

Then, point your browser to http://localhost:8000/.
