---
title: Veranstaltungsorte
---

<ul class="nav nav-pills nav-stacked">
	{% for venue_kv in site.data.venues %}
		{% assign venue = venue_kv[1][0] %}
		<li role="presentation"><a class="list-group-item" href="{{ venue.title | datapage_url: '.' }}">{{ venue.title }}</a></li>
	{% endfor %}
</ul>
