{% extends "website/index.twig.php" %}

{% block title %} Cadastrar {% endblock %}

{% block content %}
    <div class="d-flex justify-content-md-center">
        {% if errors|length > 0 %}
        <div class="alert alert-dismissible alert-danger col-sm-12 col-md-5">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <h4 class="alert-heading">Error!</h4>
            <ul>
                {% for error in errors %}
                <li>{{ error }}</li>
                {% endfor %}
            </ul>
        </div>
        {% endif %}
    </div>

    <div class="row justify-content-md-center">
        <form class="col-sm-12 col-md-5" action="{{ URL_BASE }}/register" method="POST" name="formRegister" id="formRegister">
            <div class="form-group">
                <fieldset>
                    <label class="form-label" for="name"><span>*</span> Nome</label>
                    <input class="form-control" id="name" name="name" type="text" placeholder="Digite o seu nome completo..." required />
                </fieldset>
            </div>

            <div class="form-group">
                <fieldset>
                    <label class="form-label" for="email"><span>*</span> E-mail</label>
                    <input class="form-control" id="email" name="email" type="text" placeholder="Digite o seu e-mail..." required />
                </fieldset>
            </div>

            <div class="form-group">
                <fieldset>
                    <label class="form-label mt-4" for="password"><span>*</span> Senha</label>
                    <input class="form-control" id="password" name="password" type="password" placeholder="Digit sua senha..." required />
                </fieldset>
            </div>

            <div class="form-group">
                <fieldset>
                    <label class="form-label mt-4" for="confirm_password"><span>*</span> Confirmação de Senha</label>
                    <input class="form-control" id="confirm_password" name="confirm_password" type="password" placeholder="Digit sua senha..." required />
                </fieldset>
            </div>

            <div class="d-grid gap-2 mt-4">
                <button class="btn btn-md btn-primary fw-bold" type="submit">CADASTRAR</button>
            </div>
        </form>
    </div>
{% endblock %}