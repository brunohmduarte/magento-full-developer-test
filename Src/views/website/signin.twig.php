{% extends "website/index.twig.php" %}

{% block title %} Entrar {% endblock %}

{% block content %}
    {% include "templates/components/alert_error.twig.php" %}

    <div class="row justify-content-md-center">
        <form class="col-sm-12 col-md-5 " action="{{ URL_BASE }}/admin/signin" method="POST" name="formSignin" id="formSignin">
            <div class="form-group">
                <fieldset>
                    <label class="form-label" for="email">E-mail</label>
                    <input class="form-control" id="email" name="email" type="text" placeholder="Digite o seu e-mail..." required />
                </fieldset>
            </div>

            <div class="form-group">
                <fieldset>
                    <label class="form-label mt-4" for="password">Senha</label>
                    <input class="form-control" id="password" name="password" type="password" placeholder="Digit sua senha..." required />
                </fieldset>
            </div>

            <div class="d-grid gap-2 mt-4">
                <button class="btn btn-md btn-primary fw-bold" type="submit">ENTRAR</button>
            </div>
        </form>
    </div>
{% endblock %}