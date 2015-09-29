<?php

/* bundlePPEMission2BootstrapBundle:Default:accueil.html.twig */
class __TwigTemplate_d139758177a9359ae7867d3c5f11e3ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

<<<<<<< HEAD
        $this->parent = $this->env->loadTemplate("bundlePPEMission2BootstrapBundle:Default:base.html.twig");

        $this->blocks = array(
            'corps' => array($this, 'block_corps'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bundlePPEMission2BootstrapBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_corps($context, array $blocks = array())
    {
        // line 3
        echo "<h1> Accueil </h1>
=======
        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1> slt </h1>
>>>>>>> 7539ca88f2b8bc04c6e2d2a3b48e5517deca7a56
";
    }

    public function getTemplateName()
    {
        return "bundlePPEMission2BootstrapBundle:Default:accueil.html.twig";
    }

<<<<<<< HEAD
    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
=======
    public function getDebugInfo()
    {
        return array (  19 => 1,);
>>>>>>> 7539ca88f2b8bc04c6e2d2a3b48e5517deca7a56
    }
}
