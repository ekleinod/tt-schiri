---
title: Veranstaltungsorte
date: 13.10.2016
---

{% for venue in site.data.venues %}

## {{ venue.title }}

{{ venue.title }}
{% if venue.street %}: {{ venue.street }}{% endif %}
{% if venue.city %}: {{ venue.city }}{% endif %}

{% if venue.description %}{{ venue.description }}{% endif %}

{% if venue.osm %}

<iframe
	width="425"
	height="350"
	frameborder="0"
	scrolling="no"
	marginheight="0"
	marginwidth="0"
	src="http://www.openstreetmap.org/export/embed.html?bbox=13.445785045623781%2C52.530601658034655%2C13.454668521881104%2C52.5332710194997&amp;layer=mapnik&amp;marker={{ venue.osm.latitude }}%2C{{ venue.osm.longitude }}"
	style="border: 1px solid black"
></iframe>

[Direkt bei Openstreetmap öffnen](http://www.openstreetmap.org/?mlat={{ venue.osm.latitude }}&amp;mlon={{ venue.osm.longitude }}#map=18/{{ venue.osm.latitude }}/{{ venue.osm.longitude }})

{% endif %}

{% endfor %}
