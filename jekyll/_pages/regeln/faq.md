---
title: FAQ
subtitle: Fragen und Antworten
hide-toc: true
date: 17.12.2016
---

Veraltete Antworten bitte per E-Mail melden.
Danke.

<div class="panel-group" id="accordion">

{% for faq in site.data.faq %}
	{% assign faq_content= faq[1] %}

	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#{{ faq[0] }}">{{ faq_content.question | markdownify | remove: '<p>' | remove: '</p>' }}</a>
			</h4>
		</div>
		<div id="{{ faq[0] }}" class="panel-collapse collapse">
			<div class="panel-body">
				{% capture answer %}
{% for ansline in faq_content.answer %}
{{ ansline }}

{% endfor %}
{% if faq_content.see %}
Siehe:
{% for seeref in faq_content.see %}
- {{ seeref }}
{% endfor %}
{% endif %}

Antwort vom {% include date.html date=faq_content.date %}
				{% endcapture %}
				{{ answer | strip | markdownify }}
			</div>
		</div>
	</div>
{% endfor %}

</div>
