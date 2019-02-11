---
title: VSR-Termine
---

{% assign today = site.time | date: '%s' %}
{% assign events = '' | split: '' %}
{% for event in site.data.events %}
	{% assign eventdate = event.date-start | date: '%s' %}
	{% if eventdate > today %}
		{% assign events = events | push: event %}
	{% endif %}
{% endfor %}

{% include events_out.html %}