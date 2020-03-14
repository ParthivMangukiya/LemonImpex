<?php

/* event_tile.twig */
class __TwigTemplate_0f0c9f84fe90c912736fa567564838794f367ba74a8e47b8a1169c250241f4c9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"col-lg-4 col-md-6 event_container\">
    <div class=\"l_news_item event_sub_container\">
        <div class=\"l_news_img\"><a href=\"#\"><img class=\"img-fluid\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["img_src"] ?? null), "html", null, true);
        echo "\" alt=\"\"></a></div>
        <div class=\"l_news_content event_content_container\">
            <a href=\"#\"><h4>";
        // line 5
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h4></a>
            <p>";
        // line 6
        echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
        echo "</p>
            <a class=\"more_btn\" href=\"#\">Learn More</a>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "event_tile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  32 => 5,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "event_tile.twig", "/Users/apple/Sites/fancy/templates/event_tile.twig");
    }
}
