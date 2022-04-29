{% extends "templates/base.twig.php" %}

{% block title %} Home {% endblock %}

{% block header %}
    {% include 'templates/header.twig.php' %}
{% endblock %}

{% block content %}
    <div class="row">
        {% for post in posts %}
        <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ post.title }}</h4>
                    <h6 class="card-subtitle mb-2 text-muted">{{ post.subtitle }}</h6>
                    <p class="card-text">{{ post.text }}</p>
                    <a href="#" class="card-link">+ Ler Mais</a>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>
{% endblock %}