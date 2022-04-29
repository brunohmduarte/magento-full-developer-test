{% if errors|length > 0 %}
    <div class="d-flex justify-content-md-center">
        <div class="alert alert-dismissible alert-success col-sm-12 col-md-5">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <ul>
                {% for error in errors %}
                <li>{{ error }}</li>
                {% endfor %}
            </ul>
        </div>
    </div>
{% endif %}