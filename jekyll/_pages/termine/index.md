---
title: Termine
date: 13.10.2016
---


{% for event in site.data.events %}

## {{ event.title }}

Datum
: {% include date.html date=event.date style='full' %}

{% if event.start %}
Zeit
: {{ event.start }}{% if event.end %} bis {{ event.end }}{% endif %} Uhr
{% endif %}

{% if event.venue %}
Ort
: [{{ site.data.venues[event.venue][0].title }}](veranstaltungsorte.html#{{ site.data.venues[event.venue][0].title | slugify }})
{% endif %}

{% endfor %}
