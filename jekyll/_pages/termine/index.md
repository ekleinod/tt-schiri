---
title: Termine
date: 13.10.2016
---

Auf dieser Seite werden bald die Termine stehen.

{% for event in site.data.events %}

## {{ event.title }}

{% if event.venue %}
Ort
: {{ site.data.venues[event.venue][0].title }}
{% endif %}

{% endfor %}
