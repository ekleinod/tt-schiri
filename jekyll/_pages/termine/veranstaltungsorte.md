---
title: Veranstaltungsorte
date: 15.10.2016
---

{% for venue in site.data.venues %}

## {{ venue.title }}

{{ venue.title }}
{% if venue.street %}: {{ venue.street }}{% endif %}
{% if venue.city %}: {{ venue.city }}{% endif %}

{% if venue.description %}{{ venue.description }}{% endif %}

{% if venue.osm %}

{% assign lat_diff = 0.0013 %}
{% assign long_diff = 0.0045 %}

<iframe class="osm"
	scrolling="no"
	src="http://www.openstreetmap.org/export/embed.html?bbox={{ venue.osm.longitude | minus: long_diff }}%2C{{ venue.osm.latitude | minus: lat_diff }}%2C{{ venue.osm.longitude | plus: long_diff }}%2C{{ venue.osm.latitude | plus: lat_diff }}&amp;layer=mapnik&amp;marker={{ venue.osm.latitude }}%2C{{ venue.osm.longitude }}"
></iframe>

[Direkt bei Openstreetmap öffnen](http://www.openstreetmap.org/?mlat={{ venue.osm.latitude }}&amp;mlon={{ venue.osm.longitude }}#map=18/{{ venue.osm.latitude }}/{{ venue.osm.longitude }})

{% endif %}

{% endfor %}
