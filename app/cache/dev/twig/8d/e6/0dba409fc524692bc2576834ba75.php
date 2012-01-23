<?php

/* BloggerBlogBundle:Page:contact.html.twig */
class __TwigTemplate_8de60dba409fc524692bc2576834ba75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Contact";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <header>
        <h1>Contact symblog</h1>
    </header>

\t";
        // line 11
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array("blogger-notice", ), "method")) {
            // line 12
            echo "\t    <div class=\"blogger-notice\">
\t        ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array("blogger-notice", ), "method"), "html", null, true);
            echo "
\t    </div>
\t";
        }
        // line 16
        echo "
\t<p>Want to contact symblog?</p>

    <form action=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_contact"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " class=\"blogger\">
        ";
        // line 20
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "

        ";
        // line 22
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "name"));
        echo "
        ";
        // line 23
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "email"));
        echo "
        ";
        // line 24
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "subject"));
        echo "
        ";
        // line 25
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "body"));
        echo "

        ";
        // line 27
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "

        <input type=\"submit\" value=\"Submit\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
