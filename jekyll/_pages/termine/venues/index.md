---
title: Veranstaltungsorte
date: 15.10.2016
---

{% for venue_kv in site.data.venues %}{% assign venue = venue_kv[1][0] %}
- [{{ venue.title }}]({{ venue.title | datapage_url: '.' }}){% endfor %}
