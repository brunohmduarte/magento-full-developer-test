{% extends "templates/base_admin.twig.php" %}

{% block title %}Postagens{% endblock %}

{% block content %}
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Inserir uma Nova Postagem no Blog</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <button type="button" class="btn btn-warning me-3" onclick="history.go(-1)">VOLTAR</button>
            <a href="{{ URL_BASE }}/admin/posts/new" class="btn btn-success">NOVO</a>
        </div>
    </div>

    {% include "templates/components/alert_error.twig.php" %}

    {% include "templates/components/alert_success.twig.php" %}

    <form class="col-md-8" action="{{ URL_BASE }}/admin/posts/new" method="post" name="formPostCreate" id="formPostCreate">
        <fieldset>
            <div class="form-group">
                <label for="author" class="form-label mt-4">Autor</label>
                <select class="form-select" id="author" name="author">
                    <option value="">Selecione</option>
                    <option value="1">Marcos Antônio</option>
                    <option value="2">Felipe da Silva</option>
                    <option value="3">Marcia dos Santos</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title" class="form-label mt-4">Título</label>
                <input type="text" class="form-control" id="title" name="title" value="" />
            </div>
            <div class="form-group">
                <label for="subtitle" class="form-label mt-4">Subtítulo</label>
                <textarea class="form-control" name="subtitle" id="subtitle" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="text" class="form-label mt-4">Texto</label>
                <textarea class="form-control" name="text" id="text" rows="5"></textarea>
                <small id="emailHelp" class="form-text text-muted">Limite de <span>5000</span> caracteres.</small>
            </div>
            <button type="submit" class="btn btn-primary my-3">SALVAR</button>
        </fieldset>
    </form>
{% endblock %}
