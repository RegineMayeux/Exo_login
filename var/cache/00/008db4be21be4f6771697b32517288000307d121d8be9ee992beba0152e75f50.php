<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* login.html.twig */
class __TwigTemplate_3703f4e70aa97203f29590970cde1030d467cb9a0350c63b447d09b244f4de5b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\" integrity=\"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk\" crossorigin=\"anonymous\">

    <title>Hello, world!</title>
  </head>
  <body>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm\">
            <h1>Exo Login</h1

                <form method=\"post\">
                    <div class=\"form-group\">
                        <label for=\"exampleInputlogin\">Identifiant</label>
                        <input name=\"login\" type=\"text\" class=\"form-control ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "subject", [], "any", true, true, false, 23)) {
            echo "is-invalid";
        }
        echo "\" id=\"exampleInputlogin\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["formData"] ?? null), "login", [], "any", false, false, false, 23), "html", null, true);
        echo "\">
                        ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "login", [], "any", true, true, false, 24)) {
            // line 25
            echo "                        <div class=\"invalid-feedback\">
                            ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["messages"] ?? null), "login", [], "any", false, false, false, 26), "html", null, true);
            echo "
                        </div>
                        ";
        }
        // line 29
        echo "                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputPassword1\">Mot de passe</label>
                        <input name =\"password\" type=\"password\" class=\"form-control ";
        // line 32
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", true, true, false, 32)) {
            echo "is-invalid";
        }
        echo "\" id=\"exampleInputPassword1\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["formData"] ?? null), "password", [], "any", false, false, false, 32), "html", null, true);
        echo "\">
                        ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", true, true, false, 33)) {
            // line 34
            echo "                        <div class=\"invalid-feedback\">
                            ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["messages"] ?? null), "password", [], "any", false, false, false, 35), "html", null, true);
            echo "
                        </div>
                        ";
        }
        // line 37
        echo "                    
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary\">Valider</button>
                </form>

            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\" integrity=\"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI\" crossorigin=\"anonymous\"></script>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 37,  98 => 35,  95 => 34,  93 => 33,  85 => 32,  80 => 29,  74 => 26,  71 => 25,  69 => 24,  61 => 23,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login.html.twig", "/media/popschool/TOSHIBA EXT/Pop School/home/Cours/Daishi/exercices/Exo_login/templates/login.html.twig");
    }
}
