# Jeffrey Hartmann's API Lab

## A personal project in constant progress

As my job search continues, in this project I shall practice and test various
means to access varied API data sources -- whether via server-side or
client-side, in whatever form the data might be. For now my concentration is on
using PHP and AngularJS on JSON data as well as PHP on XML.

Look and Feel (e.g. navigation, making it pretty, etc.) is the lowest priority
for this project. I may implement minimal styling and frameworks like Bootstrap
if only to maintain my focus what I can do with the data. 

To be clear, this project is not about me writing my own API.
The highest priority in this project is me *practicing* accessing and displaying
API data in its varying forms via varying means.

For the immediate future this will likely be at an "API 101" level Regardless I
welcome constructive suggestions -- alternate data sources (beyond JSON, XML),
alternate means of accessing the data, "real world" situations -- which I could
apply to this project and thus help me restore my career.

For starters I might access JSON APIs already known to me:

* TheMovieDB
* Weather Undergound
* MeetUp
* City of Chicago (no API key required)
* Last.fm (both JSON and XML)

### PHP Notes

I use an object-oriented approach to manage incoming data, an approach which I
previously applied to bootstrap-movie and wunderground-jephmann.

I start with a class which I call "API", which:

* initializes three properties: an API key (usually but not always required), an
API secret (usually optional) and a base URL for the source of the API data.
* contains a single method, "retrieve_data($url, BOOLEAN)", for retrieving
either JSON data (TRUE) or XML data (FALSE) from an API ($url) and decoding the
data into an associative array.

Each "API_ClassName" class:
* extends the "API" class and thus inherits its properties and methods.
* gets its own base URL, API key (if any) and API secret (if any).
* has custom methods for building specific URLs based on the base URL and
the API key (if necessary) to retrieve specific kinds of data. Those URLs are
what I send to the "retrieve_data($url, BOOLEAN)" method.

### AngularJS Notes

None yet. ;)
