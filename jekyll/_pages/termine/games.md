---
title: VSR-Einsätze
---

{% assign today = site.time | date: '%s' %}
{% assign games = '' | split: '' %}
{% for game in site.data.games %}
	{% assign gamedate = game.date-start | date: '%s' %}
	{% if gamedate > today %}
		{% assign games = games | push: game %}
	{% endif %}
{% endfor %}

{{ games }}
