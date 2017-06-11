---
title: Bilder
date: 11.06.2017
layout: page_nosidebar
---

<div class="alert alert-warning" role="alert">Achtung: das sind Testdaten, keine realen Daten.</div>

{% for section in site.data.images %}

## {{ section.title }}

{% for image in section.images %}
<a href="{{ image.filename }}]({{ image.filename | prepend: 'thumb_' | prepend: '/' | prepend: section.path | prepend: '/' | prepend: site.baseurl }}">![{{ image.filename }}]({{ image.filename | prepend: '/' | prepend: section.path | prepend: '/' | prepend: site.baseurl }})</a>
{% endfor %}

{% endfor %}
