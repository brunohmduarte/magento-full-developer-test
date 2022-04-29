<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {% block head %}
    <title>Bis2Bis ::{% block title %}{% endblock %}</title>
    <link rel="stylesheet" href="{{URL_BASE}}/public/css/vendor/bootstrap/bootstrap.min.css">
    {% endblock %}
</head>
<body>
    <header>{% block header %}{% endblock %}</header>

    <main class="py-5 px-3">
        <div class="container-fluid">
            {% block content %}{% endblock %}
        </div>
    </main>

    <footer class="container-fluid">
        <div class="text-center">
            {% block footer %}
                <p>Copyright © 2022 - Todos os direitos reservados.</p>
            {% endblock %}
        </div>
    </footer>
</body>
</html>