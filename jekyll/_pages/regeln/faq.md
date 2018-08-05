---
title: Regelecke
subtitle: Fragen und Antworten
hide-toc: true
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
				{{ faq_content.answer | strip | markdownify }}
				{% if faq_content.see %}
					{{ 'Siehe
' | append: faq_content.see | strip | markdownify }}
				{% endif %}
				{% capture answer_date %}
					Antwort vom {% include date.html date=faq_content.date style='month_year' %}
				{% endcapture %}
				{{ answer_date | strip | markdownify }}
			</div>
		</div>
	</div>
{% endfor %}

</div>
