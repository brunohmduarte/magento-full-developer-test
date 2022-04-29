{% extends "templates/base.twig.php" %}

{% block title %} Error {% endblock %}

{% block header %}
    {% include "templates/header.twig.php" %}
{% endblock %}

{% block content %}
    <div class="row">
        <div class="col-sm-12">
            <h1>Error {{ code }}</h1>
            <h4>{{ title }}</h4>
            <p>{{ description }}</p>
            <a href="{{ URL_BASE }}">VOLTAR</a>
        </div>
    </div>
{% endblock %}
