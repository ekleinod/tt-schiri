---
title: Suche
date: 27.05.2017
hide-nav: true
---

<form action="/suche.html" method="get">
  <label for="search-box">Search</label>
  <input type="text" id="search-box" name="query">
  <input type="submit" value="search">
</form>

<ul id="search-results"></ul>

<script>
  window.store = {
	{% for post in site.pages %}
	  "{{ post.url | slugify }}": {
		"title": "{{ post.title | xml_escape }}",
		"author": "{{ post.author | xml_escape }}",
		"category": "{{ post.category | xml_escape }}",
		"content": {{ post.content | strip_html | strip_newlines | jsonify }},
		"url": "{{ post.url | xml_escape }}"
	  }
	  {% unless forloop.last %},{% endunless %}
	{% endfor %}
  };
</script>
