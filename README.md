# Jeffrey Hartmann's API Lab

## A personal project in constant progress

Here I shall practice and test various means to access varied API data sources
-- whether via server-side or client-side, in whatever form the data might be.
For now my concentration is on using PHP and AngularJS on JSON data.

Look and Feel (e.g. navigation, making it pretty, etc.) is the lowest priority
for this project. To be clear, this project is not about me writing my own API.
The highest priority in this project is me *practicing* accessing and displaying
API data in its varying forms via varying means.

For the immediate future this will likely be at an "API 101" level.

For starters I might access APIs already known to me:

* TheMovieDB
* Weather Undergound
* MeetUp
* City of Chicago (no API key required)

### PHP Notes

I use an object-oriented approach to manage incoming data, an approach which I
previously applied to bootstrap-movie and wunderground-jephmann.

I start with a class which I call "API", which:

* initializes two properties: an API key and a base URL for the source of the
API data. (Not every API requires an API key.)
* contains a single method, "json_retrieve($url)", for retrieving JSON data from
the API and decoding the data into an associative array.

Each "API_ClassName" class:
* extends the "API" class and thus inherits its properties and methods.
* gets its own base URL and API key (if any).
* will have custom methods for building specific URLs based on the base URL and
the API key (if necessary) to retrieve specific kinds of data. Those URLs are
what I send to the "json_retrieve($url)" method.

### AngularJS Notes

None yet. ;)
