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

<ul class="nav nav-pills nav-stacked">
{% for event in events %}
<li role="presentation"><a class="list-group-item" href="#{{ event.title | slugify }}"><i class="fa fa-calendar fa-fw" aria-hidden="true"></i>&nbsp; {{ event.date-start }}{% if event.date-end %}-{{ event.date-end }}{% endif %} &ndash; {{ event.title }}</a></li>
{% endfor %}
</ul>

<div class="help-block"></div>


{% for event in events %}

<div class="panel panel-default">
	<div class="panel-heading"><i class="fa fa-calendar fa-fw" aria-hidden="true"></i>&nbsp;<a name="{{ event.title | slugify }}">{{ event.title }}</a></div>
	<div class="panel-body">
{% capture panelbody %}
{% include date.html date=event.date-start style='full' %}{% if event.date-end %} bis {% include date.html date=event.date-end style='full' %}{% endif %}

{% if event.description %}{{ event.description }}{% endif %}

	{% if event.time-start %}
Zeit: {{ event.time-start }}{% if event.time-end %} bis {{ event.time-end }}{% endif %} Uhr
	{% endif %}

	{% if event.venue %}
Ort: [{{ site.data.venues[event.venue][0].title }}]({{ site.data.venues[event.venue][0].title | datapage_url: 'venues' }})
	{% endif %}

	{% if event.url %}
Details: [{{ event.url }}]({{ event.url }})
	{% endif %}
{% endcapture %}
{{ panelbody | markdownify }}
	</div>
</div>

{% endfor %}
