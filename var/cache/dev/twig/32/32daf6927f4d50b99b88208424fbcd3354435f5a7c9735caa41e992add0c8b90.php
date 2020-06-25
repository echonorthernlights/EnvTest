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

/* home/home_index.html.twig */
class __TwigTemplate_4d4b4c62b6d76d20d533a04296cf8e5b7da2a0673883cdedc34e00010234229c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home_index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/home_index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "            FirstName :  <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["homeEntity"]) || array_key_exists("homeEntity", $context) ? $context["homeEntity"] : (function () { throw new RuntimeError('Variable "homeEntity" does not exist.', 4, $this->source); })()), "getFirstName", [], "method", false, false, false, 4), "html", null, true);
        echo "</h2>
            LastName :  <h2>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["homeEntity"]) || array_key_exists("homeEntity", $context) ? $context["homeEntity"] : (function () { throw new RuntimeError('Variable "homeEntity" does not exist.', 5, $this->source); })()), "getLastName", [], "method", false, false, false, 5), "html", null, true);
        echo "</h2>
            Age :  <h2>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["homeEntity"]) || array_key_exists("homeEntity", $context) ? $context["homeEntity"] : (function () { throw new RuntimeError('Variable "homeEntity" does not exist.', 6, $this->source); })()), "getAge", [], "method", false, false, false, 6), "html", null, true);
        echo "</h2>
            Vocation : <h2>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["homeEntity"]) || array_key_exists("homeEntity", $context) ? $context["homeEntity"] : (function () { throw new RuntimeError('Variable "homeEntity" does not exist.', 7, $this->source); })()), "getVocation", [], "method", false, false, false, 7), "html", null, true);
        echo "</h2>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/home_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 7,  68 => 6,  64 => 5,  59 => 4,  52 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
        {% extends 'base.html.twig' %}
        {% block body %}
            FirstName :  <h2>{{ homeEntity.getFirstName() }}</h2>
            LastName :  <h2>{{ homeEntity.getLastName() }}</h2>
            Age :  <h2>{{ homeEntity.getAge() }}</h2>
            Vocation : <h2>{{ homeEntity.getVocation() }}</h2>
        {% endblock %}
      
", "home/home_index.html.twig", "C:\\Users\\anas.elhassani\\Desktop\\EnvTest\\templates\\home\\home_index.html.twig");
    }
}
