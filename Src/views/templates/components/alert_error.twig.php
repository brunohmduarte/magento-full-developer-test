{% if errors|length > 0 %}
    <div class="d-flex justify-content-md-center">
        <div class="alert alert-dismissible alert-danger col-sm-12 col-md-5">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <h4 class="alert-heading">Error</h4>
            <ul>
                {% for error in errors %}
                <li>{{ error }}</li>
                {% endfor %}
            </ul>
        </div>
    </div>
{% endif %}