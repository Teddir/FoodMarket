{% extends 'base.html'%} {%load static%}

{% block styling %}
<link rel="stylesheet" href="{% static 'css/login.css' %}" />
{% endblock %}

{% block content %}

<div class="container">
    <div class="login" style="margin-left : 800px;">
        <div class="logo">
            <img class="logoimg"
                src="https://media.discordapp.net/attachments/651415548965421086/768396585121611776/IMG-8527.PNG?width=369&height=369">
            <h3 style="font-family: roboto; font-weight: 1000; width: fit-content; margin: auto; margin-top: 20px; font-size: 25px;">LOGIN</h3>
        </div>
        <div class="input" style="border-radius: 25px">
            <form>
                <div class="isian">
                    <input class="baris1" type="text" placeholder="Username or Email" style="border-radius: 25px">
                    <input class="baris1" type="password" placeholder="Password" style="border-radius: 25px">
                </div>
                <div class="signup">
                    <button class="bt_signup"> Login </button>
                </div>
                <div class="register">
                    <p> Don't have an account? </p>
                    <a href="{% url 'register:index' %}">
                        <p style="margin-left: 5px; color: rgb(35, 120, 233);"> Register</p>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

{% endblock %}