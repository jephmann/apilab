# Jeffrey Hartmann's API Lab

## A personal project in constant progress

Here I shall I practice and test various means to access varied API data sources
-- whether via server-side (PHP in this case) or client-side (JavaScript and/or
its frameworks such as AngularJS); whether the data is in JSON, XML or some
other construct.

Look and Feel is the lowest priority in this project. The highest priority in
this project is accessing and displaying API data.

For starters I might access APIs already known to me:

* TheMovieDB
* Weather Undergound
* MeetUp
* City of Chicago (no API key required)

To be clear, this project is about tapping into outside API data and not about
me writing my own API.

### PHP Notes

I use an object-oriented approach to manage incoming data, an approach which I
previously applied to bootstrap-movie and wunderground-jephmann.

I start with a class called "API", which:

* initializes two properties: an API key and a base URL for the source of the
API data. (Not every API requires an API key.)
* contains a single method, "json_retrieve($url)", for retrieving JSON data from
the API and decoding the data into an associative array.
* might or might not soon include alternative methods to JSON.

Each "API_ClassName" class:
* extends the "API" class and thus inherits its properties and methods.
* gets its own base URL and API key (if any).
* will have custom methods for building specific URLs based on the base URL and
the API key (if necessary) to retrieve specific kinds of data. Those URLs are
what I send to the "json_retrieve($url)" method.

### AngularJS Notes

None yet. ;)
