---
title: Bilder
date: 26.05.2019
layout: page_nosidebar
excerpt_separator: up
---

{% for section in site.data.images %}

## {{ section.title }}

<div class="row">
	{% for image in section.images %}
		<div class="col-md-3 img-portfolio">
			<a href="{{ image | prepend: '/' | prepend: section.path | prepend: '/' | prepend: site.baseurl }}">
				<img class="img-responsive img-hover" src="{{ image | prepend: 'thumb_' | prepend: '/' | prepend: section.path | prepend: '/' | prepend: site.baseurl }}" alt="{{ image }}" />
			</a>
		</div>
	{% endfor %}
</div>

{% endfor %}
