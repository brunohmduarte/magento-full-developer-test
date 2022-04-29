{% extends "templates/base_admin.twig.php" %}

{% block title %} Postagens {% endblock %}

{% block content %}
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Postagens do Blog</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <button type="button" class="btn btn-warning me-3" onclick="history.go(-1)">VOLTAR</button>
            <a href="{{ URL_BASE }}/admin/posts/new" class="btn btn-success">NOVO</a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th class="text-center col-1">#</th>
                    <th class="text-left col-2">Título</th>
                    <th class="text-left col-2">Subtítulo</th>
                    <th class="text-center col-1">Autor</th>
                    <th class="text-center col-1">Data</th>
                    <th class="text-center col-1">Opções</th>
                </tr>
            </thead>
            <tbody>
                {% for post in posts %}
                <tr>
                    <td class="text-center">{{ post.post_id }}</td>
                    <td class="text-left">{{ post.title }}</td>
                    <td class="text-left">{{ post.subtitle }}</td>
                    <td class="text-center">{{ post.author }}</td>
                    <td class="text-center">{{ post.updated_at | date('d/m/Y H:i:s') }}</td>
                    <td class="text-center">
                        <a href="{{ URL_BASE }}/admin/posts/edit/{{ post.post_id }}">Editar</a> |
                        <a href="{{ URL_BASE }}/admin/posts/del/{{ post.post_id }}">Deletar</a>
                    </td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}
