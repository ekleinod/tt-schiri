---
title: VSR-Einsätze
layout: page_nosidebar
---

<div class="alert alert-warning" role="alert">Achtung: das sind Testdaten, keine realen Daten.</div>

{% include downloads.html tag = 'einsatzplan' validonly = true %}

{% assign today = site.time | date: '%s' %}
{% assign games = '' | split: '' %}
{% for game in site.data.games %}
	{% assign gamedate = game.date-start | date: '%s' %}
	{% if gamedate > today %}
		{% assign games = games | push: game %}
	{% endif %}
{% endfor %}

<div class="table-responsive">
{% capture table_out %}
{:.table .table-bordered .table-striped}
| Datum | Uhrzeit | Liga | Spiel | OSR | Stellv. OSR | SR | Spielort |
|:-:|:-:|:-:|:-|:-|:-|:-|:-:|{% for game in games %}
| {{ game.date-start }} | {{ game.time-start }} | {{ game.league }} | {{ game.hometeam }} - {{ game.offteam }} | {{ game.referee }} | {{ game.standbyref }} | {% for ump in game.ump %}{{ ump }}{% unless forloop.last %}, {% endunless %}{% endfor %} | <a href="{{ site.data.clubvenues[game.clubvenue][0].title | datapage_url: 'clubvenues' }}"><i class="fa fa-map-marker fa-fw" aria-hidden="true"></i></a> |{% endfor %}
{% endcapture %}
{{ table_out | markdownify }}
</div>
