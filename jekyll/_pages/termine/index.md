---
title: Termine
---

{% assign today = site.time | date: '%s' %}

<div class="list-group">
{% for event in site.data.events %}
	{% assign eventdate = event.date | date: '%s' %}
	{% if eventdate > today %}
<a class="list-group-item" href="#"><i class="fa fa-calendar fa-fw" aria-hidden="true"></i>&nbsp; {{ event.date }} &ndash; {{ event.title }}</a>
	{% endif %}
{% endfor %}
</div>

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
