---
title: Veranstaltungsorte
date: 15.10.2016
---

{% assign lat_diff = 0.0013 %}
{% assign long_diff = 0.0045 %}

{% for venue_kv in site.data.venues %}

{% assign venue = venue_kv[1][0] %}

## {{ venue.title }}

Adresse
{% if venue.street %}: {{ venue.street }}{% endif %}
{% if venue.city %}: {{ venue.city }}{% endif %}

{% if venue.details %}{{ venue.details }}{% endif %}

[Detailseite "{{ venue.title }}"{% if venue.osm %} mit Karte{% endif %}]({{ venue.title | datapage_url: 'venues' }})

{% endfor %}
