---
title: Termine
---

{% assign today = site.time | date: '%s' %}

{% for event in site.data.events %}

	{% assign eventdate = event.date | date: '%s' %}

	{% if eventdate > today %}

## {{ event.title }}

Datum
: {% include date.html date=event.date style='full' %}

		{% if event.start %}
Zeit
: {{ event.start }}{% if event.end %} bis {{ event.end }}{% endif %} Uhr
		{% endif %}

		{% if event.venue %}
Ort
: [{{ site.data.venues[event.venue][0].title }}]({{ site.data.venues[event.venue][0].title | datapage_url: 'venues' }})
		{% endif %}

	{% endif %}

{% endfor %}
