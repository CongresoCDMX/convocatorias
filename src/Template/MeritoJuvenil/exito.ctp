<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="Styles/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="Styles/bootstrap-4.1.0.min.js" type="text/javascript"></script>
        <link href="Styles/bootstrap-4.1.0.min.css" rel="stylesheet" type="text/css"/>
        <link href="Styles/MainStyle.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <?php
        session_start();
        ?>
        <div class="container register">
            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active text-align form-new" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Imprima el formulario</h3>
                            <div class="row register-form">
                                <div class="col-md-12">
                                <td class="actions">
				    <?= $this->Html->link(__('Imprimir'), ['action' => 'view', $meritoJuvenil->id]) ?>
				</td>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show text-align form-new" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h3  class="register-heading">Login Form 2</h3>
                            <div class="row register-form">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
<style>
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
    margin-right: 6%;
    background-color: white;
    color: blue;
    margin-top: 4%;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.text-align{
    margin-top: -3%;
    margin-bottom: -9%;

    padding: 10%;
    margin-left: 30%;
}
.form-new{
    margin-right: 22%;
    margin-left: 20%;
}
.register-heading{
    margin-left: 21%;
    margin-bottom: 10%;
    color: #e9ecef;
}
.register-heading h1{
    margin-left: 21%;
    margin-bottom: 10%;
    color: #e9ecef;
}
.btnLoginSubmit{
    border: none;
    padding: 2%;
    width: 25%;
    cursor: pointer;
    background: #29abe2;
    color: #fff;
}
.btnForgetPwd{
    cursor: pointer;
    margin-right: 5%;
    color: #f8f9fa;
}
.register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 3%;
    padding: 3%;
    border-radius: 2.5rem;
}
.nav-tabs .nav-link{
    border: 1px solid transparent;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
    color: white;
}
</style>
</html>
