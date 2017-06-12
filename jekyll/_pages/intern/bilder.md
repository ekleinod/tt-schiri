---
title: Bilder
date: 12.06.2017
layout: page_nosidebar
---

<div class="alert alert-warning" role="alert">Achtung: das sind Testdaten, keine realen Daten.</div>

{% for section in site.data.images %}

## {{ section.title }}

<div class="row">
	{% for image in section.images %}
		<div class="col-md-3 img-portfolio">
			<a href="{{ image | prepend: 'thumb_' | prepend: '/' | prepend: section.path | prepend: '/' | prepend: site.baseurl }}">
				<img class="img-responsive img-hover" src="{{ image | prepend: '/' | prepend: section.path | prepend: '/' | prepend: site.baseurl }}" alt="{{ image }}" width="750" height="450" />
			</a>
		</div>
	{% endfor %}
</div>

{% endfor %}
