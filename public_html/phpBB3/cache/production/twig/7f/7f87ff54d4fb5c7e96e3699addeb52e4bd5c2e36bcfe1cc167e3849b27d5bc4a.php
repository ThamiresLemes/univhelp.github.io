<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* icon_picker.html */
class __TwigTemplate_2af9f23d9fad782fa66e827ef67d9810f70baf00e59d82c68ece5517d32f3a85 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div id=\"icon-picker\" class=\"icon-picker-container panel\" style=\"display: none\">
\t<div id=\"icons-tab\" class=\"icons-bottom-tabs\">
\t\t<ul>
\t\t\t<li><a href=\"#tab-icons-font\">";
        // line 4
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_FONT");
        echo "</a></li>
\t\t\t<li><a href=\"#tab-icons-font-settings\">";
        // line 5
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SETTINGS");
        echo "</a></li>
\t\t\t";
        // line 6
        if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "icon", []))) {
            echo "<li><a href=\"#tab-icons-image\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_IMAGE");
            echo "</a></li>";
        }
        // line 7
        echo "\t\t</ul>
\t\t<div id=\"tab-icons-font\" class=\"tab-content\">
\t\t\t<div class=\"icon-filter\">
\t\t\t\t<input name=\"icons_search\" id=\"icons-search\" type=\"search\" class=\"inputbox search\" value=\"\" placeholder=\"Search…\">
\t\t\t</div>
\t\t\t<div class=\"icons-container\">
\t\t\t\t<div id=\"icons-font-list\" class=\"icons\">

\t\t\t\t\t<div class=\"icon-list\">

\t\t\t\t\t\t<p id=\"cat-web-application\" class=\"filter-icon\">";
        // line 17
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_WEB_APPLICATION");
        echo "</p>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"adjust|contrast\">
\t\t\t\t\t\t\t<a href=\"#fa-adjust\"><i class=\"fa fa-adjust\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"asl|american|sign|language|interpreting\">
\t\t\t\t\t\t\t<a href=\"#fa-american-sign-language-interpreting\"><i class=\"fa fa-american-sign-language-interpreting\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"anchor|link\">
\t\t\t\t\t\t\t<a href=\"#fa-anchor\"><i class=\"fa fa-anchor\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"archive|box|storage\">
\t\t\t\t\t\t\t<a href=\"#fa-archive\"><i class=\"fa fa-archive\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"area-chart\">
\t\t\t\t\t\t\t<a href=\"#fa-area-chart\"><i class=\"fa fa-area-chart\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"arrows|move|reorder|resize\">
\t\t\t\t\t\t\t<a href=\"#fa-arrows\"><i class=\"fa fa-arrows\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"arrows-h|resize\">
\t\t\t\t\t\t\t<a href=\"#fa-arrows-h\"><i class=\"fa fa-arrows-h\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"arrows-v|resize\">
\t\t\t\t\t\t\t<a href=\"#fa-arrows-v\"><i class=\"fa fa-arrows-v\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-american-sign-language-interpreting\"><i class=\"fa fa-asl-interpreting\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"assistive|listening|systems\">
\t\t\t\t\t\t\t<a href=\"#fa-assistive-listening-systems\"><i class=\"fa fa-assistive-listening-systems\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"asterisk|details\">
\t\t\t\t\t\t\t<a href=\"#fa-asterisk\"><i class=\"fa fa-asterisk\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"at\">
\t\t\t\t\t\t\t<a href=\"#fa-at\"><i class=\"fa fa-at\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"audio|description\">
\t\t\t\t\t\t\t<a href=\"#fa-audio-description\"><i class=\"fa fa-audio-description\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"car|automobile|vehicle\">
\t\t\t\t\t\t\t<a href=\"#fa-car\"><i class=\"fa fa-automobile\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"balance-scale\">
\t\t\t\t\t\t\t<a href=\"#fa-balance-scale\"><i class=\"fa fa-balance-scale\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"ban|block|abort\">
\t\t\t\t\t\t\t<a href=\"#fa-ban\"><i class=\"fa fa-ban\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-university\"><i class=\"fa fa-bank\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"bar-chart|bar-chart-o|graph\">
\t\t\t\t\t\t\t<a href=\"#fa-bar-chart\"><i class=\"fa fa-bar-chart\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-bar-chart\"><i class=\"fa fa-bar-chart-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\">
\t\t\t\t\t\t\t<a href=\"#fa-barcode\"><i class=\"fa fa-barcode\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"bars|navicon|reorder|menu|drag|reorder|settings|list|ul|ol|checklist|todo|list\">
\t\t\t\t\t\t\t<a href=\"#fa-bars\"><i class=\"fa fa-bars\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"battery-empty|battery-0\">
\t\t\t\t\t\t\t<a href=\"#fa-battery-empty\"><i class=\"fa fa-battery-empty\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"battery-full|battery-4\">
\t\t\t\t\t\t\t<a href=\"#fa-battery-full\"><i class=\"fa fa-battery-full\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"battery-half|battery-2\">
\t\t\t\t\t\t\t<a href=\"#fa-battery-half\"><i class=\"fa fa-battery-half\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"battery-quarter|battery-1\">
\t\t\t\t\t\t\t<a href=\"#fa-battery-quarter\"><i class=\"fa fa-battery-quarter\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"battery-three-quarters|battery-3\">
\t\t\t\t\t\t\t<a href=\"#fa-battery-three-quarters\"><i class=\"fa fa-battery-three-quarters\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"bed|hotel|travel\">
\t\t\t\t\t\t\t<a href=\"#fa-bed\"><i class=\"fa fa-bed\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"beer|alcohol|stein|drink|mug|bar|liquor\">
\t\t\t\t\t\t\t<a href=\"#fa-beer\"><i class=\"fa fa-beer\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"bell|alert|reminder|notification\">
\t\t\t\t\t\t\t<a href=\"#fa-bell\"><i class=\"fa fa-bell\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"bell-o|alert|reminder|notification\">
\t\t\t\t\t\t\t<a href=\"#fa-bell-o\"><i class=\"fa fa-bell-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"bell-slash\">
\t\t\t\t\t\t\t<a href=\"#fa-bell-slash\"><i class=\"fa fa-bell-slash\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"bell-slash-o\">
\t\t\t\t\t\t\t<a href=\"#fa-bell-slash-o\"><i class=\"fa fa-bell-slash-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-bicycle\"><i class=\"fa fa-bicycle\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"binoculars\">
\t\t\t\t\t\t\t<a href=\"#fa-binoculars\"><i class=\"fa fa-binoculars\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"birthday-cake\">
\t\t\t\t\t\t\t<a href=\"#fa-birthday-cake\"><i class=\"fa fa-birthday-cake\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"blind\">
\t\t\t\t\t\t\t<a href=\"#fa-blind\"><i class=\"fa fa-blind\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-bolt\"><i class=\"fa fa-bolt\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"bomb\">
\t\t\t\t\t\t\t<a href=\"#fa-bomb\"><i class=\"fa fa-bomb\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"book|read|documentation\">
\t\t\t\t\t\t\t<a href=\"#fa-book\"><i class=\"fa fa-book\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"bookmark|save\">
\t\t\t\t\t\t\t<a href=\"#fa-bookmark\"><i class=\"fa fa-bookmark\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"bookmark-o|save\">
\t\t\t\t\t\t\t<a href=\"#fa-bookmark-o\"><i class=\"fa fa-bookmark-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"braille|blind\">
\t\t\t\t\t\t\t<a href=\"#fa-braille\"><i class=\"fa fa-braille\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"briefcase|work|business|office|luggage|bag\">
\t\t\t\t\t\t\t<a href=\"#fa-briefcase\"><i class=\"fa fa-briefcase\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"bug|report\">
\t\t\t\t\t\t\t<a href=\"#fa-bug\"><i class=\"fa fa-bug\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"building\">
\t\t\t\t\t\t\t<a href=\"#fa-building\"><i class=\"fa fa-building\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"building-o|work|business|apartment|office\">
\t\t\t\t\t\t\t<a href=\"#fa-building-o\"><i class=\"fa fa-building-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"bullhorn|announcement|share|broadcast|louder\">
\t\t\t\t\t\t\t<a href=\"#fa-bullhorn\"><i class=\"fa fa-bullhorn\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"bullseye|target\">
\t\t\t\t\t\t\t<a href=\"#fa-bullseye\"><i class=\"fa fa-bullseye\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-bus\"><i class=\"fa fa-bus\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-taxi\"><i class=\"fa fa-cab\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"calculator\">
\t\t\t\t\t\t\t<a href=\"#fa-calculator\"><i class=\"fa fa-calculator\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"calendar|date|time|when\">
\t\t\t\t\t\t\t<a href=\"#fa-calendar\"><i class=\"fa fa-calendar\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"calendar-check-o\">
\t\t\t\t\t\t\t<a href=\"#fa-calendar-check-o\"><i class=\"fa fa-calendar-check-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"calendar-minus-o\">
\t\t\t\t\t\t\t<a href=\"#fa-calendar-minus-o\"><i class=\"fa fa-calendar-minus-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"calendar-o|date|time|when\">
\t\t\t\t\t\t\t<a href=\"#fa-calendar-o\"><i class=\"fa fa-calendar-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"calendar-plus-o\">
\t\t\t\t\t\t\t<a href=\"#fa-calendar-plus-o\"><i class=\"fa fa-calendar-plus-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"calendar-times-o\">
\t\t\t\t\t\t\t<a href=\"#fa-calendar-times-o\"><i class=\"fa fa-calendar-times-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"camera|photo|picture|record\">
\t\t\t\t\t\t\t<a href=\"#fa-camera\"><i class=\"fa fa-camera\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"camera-retro|photo|picture|record\">
\t\t\t\t\t\t\t<a href=\"#fa-camera-retro\"><i class=\"fa fa-camera-retro\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-car\"><i class=\"fa fa-car\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-caret-square-o-down\"><i class=\"fa fa-caret-square-o-down\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-caret-square-o-left\"><i class=\"fa fa-caret-square-o-left\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-caret-square-o-right\"><i class=\"fa fa-caret-square-o-right\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-caret-square-o-up\"><i class=\"fa fa-caret-square-o-up\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"cart-arrow-down|shopping\">
\t\t\t\t\t\t\t<a href=\"#fa-cart-arrow-down\"><i class=\"fa fa-cart-arrow-down\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"cart-plus|add|shopping\">
\t\t\t\t\t\t\t<a href=\"#fa-cart-plus\"><i class=\"fa fa-cart-plus\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"cc\">
\t\t\t\t\t\t\t<a href=\"#fa-cc\"><i class=\"fa fa-cc\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"certificate|badge|star\">
\t\t\t\t\t\t\t<a href=\"#fa-certificate\"><i class=\"fa fa-certificate\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"check|checkmark|done|todo|agree|accept|confirm\">
\t\t\t\t\t\t\t<a href=\"#fa-check\"><i class=\"fa fa-check\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"check-circle|todo|done|agree|accept|confirm\">
\t\t\t\t\t\t\t<a href=\"#fa-check-circle\"><i class=\"fa fa-check-circle\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"check-circle-o|todo|done|agree|accept|confirm\">
\t\t\t\t\t\t\t<a href=\"#fa-check-circle-o\"><i class=\"fa fa-check-circle-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-check-square\"><i class=\"fa fa-check-square\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-check-square-o\"><i class=\"fa fa-check-square-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"child\">
\t\t\t\t\t\t\t<a href=\"#fa-child\"><i class=\"fa fa-child\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-circle\"><i class=\"fa fa-circle\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-circle-o\"><i class=\"fa fa-circle-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-circle-o-notch\"><i class=\"fa fa-circle-o-notch\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"circle-thin|genderless\">
\t\t\t\t\t\t\t<a href=\"#fa-circle-thin\"><i class=\"fa fa-circle-thin\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"clock-o|watch|timer|late|timestamp\">
\t\t\t\t\t\t\t<a href=\"#fa-clock-o\"><i class=\"fa fa-clock-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"clone|copy\">
\t\t\t\t\t\t\t<a href=\"#fa-clone\"><i class=\"fa fa-clone\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"times|remove|close|close|exit|x\">
\t\t\t\t\t\t\t<a href=\"#fa-times\"><i class=\"fa fa-close\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"cloud|save\">
\t\t\t\t\t\t\t<a href=\"#fa-cloud\"><i class=\"fa fa-cloud\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"cloud-download|import\">
\t\t\t\t\t\t\t<a href=\"#fa-cloud-download\"><i class=\"fa fa-cloud-download\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"cloud-upload|import\">
\t\t\t\t\t\t\t<a href=\"#fa-cloud-upload\"><i class=\"fa fa-cloud-upload\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"code|html|brackets\">
\t\t\t\t\t\t\t<a href=\"#fa-code\"><i class=\"fa fa-code\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"code-fork|git|fork|vcs|svn|github|rebase|version|merge\">
\t\t\t\t\t\t\t<a href=\"#fa-code-fork\"><i class=\"fa fa-code-fork\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"coffee|morning|mug|breakfast|tea|drink|cafe\">
\t\t\t\t\t\t\t<a href=\"#fa-coffee\"><i class=\"fa fa-coffee\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-cog\"><i class=\"fa fa-cog\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"cogs|gears|settings\">
\t\t\t\t\t\t\t<a href=\"#fa-cogs\"><i class=\"fa fa-cogs\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"comment|speech|notification|note\">
\t\t\t\t\t\t\t<a href=\"#fa-comment\"><i class=\"fa fa-comment\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"comment-o|notification|note\">
\t\t\t\t\t\t\t<a href=\"#fa-comment-o\"><i class=\"fa fa-comment-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"commenting\">
\t\t\t\t\t\t\t<a href=\"#fa-commenting\"><i class=\"fa fa-commenting\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"commenting-o\">
\t\t\t\t\t\t\t<a href=\"#fa-commenting-o\"><i class=\"fa fa-commenting-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"comments|conversation|notification|notes\">
\t\t\t\t\t\t\t<a href=\"#fa-comments\"><i class=\"fa fa-comments\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"comments-o|conversation|notification|notes\">
\t\t\t\t\t\t\t<a href=\"#fa-comments-o\"><i class=\"fa fa-comments-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"compass|safari|directory|menu|location\">
\t\t\t\t\t\t\t<a href=\"#fa-compass\"><i class=\"fa fa-compass\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"copyright\">
\t\t\t\t\t\t\t<a href=\"#fa-copyright\"><i class=\"fa fa-copyright\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"creative-commons\">
\t\t\t\t\t\t\t<a href=\"#fa-creative-commons\"><i class=\"fa fa-creative-commons\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-credit-card\"><i class=\"fa fa-credit-card\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"crop\">
\t\t\t\t\t\t\t<a href=\"#fa-crop\"><i class=\"fa fa-crop\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"crosshairs|picker\">
\t\t\t\t\t\t\t<a href=\"#fa-crosshairs\"><i class=\"fa fa-crosshairs\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"cube\">
\t\t\t\t\t\t\t<a href=\"#fa-cube\"><i class=\"fa fa-cube\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"cubes\">
\t\t\t\t\t\t\t<a href=\"#fa-cubes\"><i class=\"fa fa-cubes\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"cutlery|food|restaurant|spoon|knife|dinner|eat\">
\t\t\t\t\t\t\t<a href=\"#fa-cutlery\"><i class=\"fa fa-cutlery\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-tachometer\"><i class=\"fa fa-dashboard\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"database\">
\t\t\t\t\t\t\t<a href=\"#fa-database\"><i class=\"fa fa-database\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"deaf|hearing\">
\t\t\t\t\t\t\t<a href=\"#fa-deaf\"><i class=\"fa fa-deaf\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-deaf\"><i class=\"fa fa-deafness\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"desktop|monitor|screen|desktop|computer|demo|device\">
\t\t\t\t\t\t\t<a href=\"#fa-desktop\"><i class=\"fa fa-desktop\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"diamond|gem|gemstone\">
\t\t\t\t\t\t\t<a href=\"#fa-diamond\"><i class=\"fa fa-diamond\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"dot-circle-o|target|bullseye|notification\">
\t\t\t\t\t\t\t<a href=\"#fa-dot-circle-o\"><i class=\"fa fa-dot-circle-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"download|import\">
\t\t\t\t\t\t\t<a href=\"#fa-download\"><i class=\"fa fa-download\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-pencil-square-o\"><i class=\"fa fa-edit\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"ellipsis-h|dots\">
\t\t\t\t\t\t\t<a href=\"#fa-ellipsis-h\"><i class=\"fa fa-ellipsis-h\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"ellipsis-v|dots\">
\t\t\t\t\t\t\t<a href=\"#fa-ellipsis-v\"><i class=\"fa fa-ellipsis-v\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"envelope\">
\t\t\t\t\t\t\t<a href=\"#fa-envelope\"><i class=\"fa fa-envelope\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"envelope-o|email|support|e-mail|letter|mail|notification\">
\t\t\t\t\t\t\t<a href=\"#fa-envelope-o\"><i class=\"fa fa-envelope-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"envelope-square\">
\t\t\t\t\t\t\t<a href=\"#fa-envelope-square\"><i class=\"fa fa-envelope-square\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"eraser\">
\t\t\t\t\t\t\t<a href=\"#fa-eraser\"><i class=\"fa fa-eraser\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"exchange\">
\t\t\t\t\t\t\t<a href=\"#fa-exchange\"><i class=\"fa fa-exchange\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"exclamation|warning|error|problem|notification|notify|alert\">
\t\t\t\t\t\t\t<a href=\"#fa-exclamation\"><i class=\"fa fa-exclamation\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"exclamation-circle|warning|error|problem|notification|alert\">
\t\t\t\t\t\t\t<a href=\"#fa-exclamation-circle\"><i class=\"fa fa-exclamation-circle\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-exclamation-triangle\"><i class=\"fa fa-exclamation-triangle\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"external-link|open|new\">
\t\t\t\t\t\t\t<a href=\"#fa-external-link\"><i class=\"fa fa-external-link\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"external-link-square|open|new\">
\t\t\t\t\t\t\t<a href=\"#fa-external-link-square\"><i class=\"fa fa-external-link-square\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"eye|show|visible|views\">
\t\t\t\t\t\t\t<a href=\"#fa-eye\"><i class=\"fa fa-eye\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"eye-slash|toggle|show|hide|visible|visiblity|views\">
\t\t\t\t\t\t\t<a href=\"#fa-eye-slash\"><i class=\"fa fa-eye-slash\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"eyedropper\">
\t\t\t\t\t\t\t<a href=\"#fa-eyedropper\"><i class=\"fa fa-eyedropper\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"fax\">
\t\t\t\t\t\t\t<a href=\"#fa-fax\"><i class=\"fa fa-fax\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"female|woman|user|person|profile\">
\t\t\t\t\t\t\t<a href=\"#fa-female\"><i class=\"fa fa-female\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"fighter-jet|fly|plane|airplane|quick|fast|travel\">
\t\t\t\t\t\t\t<a href=\"#fa-fighter-jet\"><i class=\"fa fa-fighter-jet\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-file-archive-o\"><i class=\"fa fa-file-archive-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-file-audio-o\"><i class=\"fa fa-file-audio-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"file-code-o\">
\t\t\t\t\t\t\t<a href=\"#fa-file-code-o\"><i class=\"fa fa-file-code-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-file-excel-o\"><i class=\"fa fa-file-excel-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"file-image-o|file-photo-o|file-picture-o\">
\t\t\t\t\t\t\t<a href=\"#fa-file-image-o\"><i class=\"fa fa-file-image-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-file-video-o\"><i class=\"fa fa-file-movie-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"file-pdf-o\">
\t\t\t\t\t\t\t<a href=\"#fa-file-pdf-o\"><i class=\"fa fa-file-pdf-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-file-image-o\"><i class=\"fa fa-file-photo-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-file-image-o\"><i class=\"fa fa-file-picture-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-file-powerpoint-o\"><i class=\"fa fa-file-powerpoint-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-file-audio-o\"><i class=\"fa fa-file-sound-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-file-video-o\"><i class=\"fa fa-file-video-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"file-word-o\">
\t\t\t\t\t\t\t<a href=\"#fa-file-word-o\"><i class=\"fa fa-file-word-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-file-archive-o\"><i class=\"fa fa-file-zip-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"film|movie\">
\t\t\t\t\t\t\t<a href=\"#fa-film\"><i class=\"fa fa-film\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"filter|funnel|options\">
\t\t\t\t\t\t\t<a href=\"#fa-filter\"><i class=\"fa fa-filter\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"fire|flame|hot|popular\">
\t\t\t\t\t\t\t<a href=\"#fa-fire\"><i class=\"fa fa-fire\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"fire-extinguisher\">
\t\t\t\t\t\t\t<a href=\"#fa-fire-extinguisher\"><i class=\"fa fa-fire-extinguisher\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"flag|report|notification|notify\">
\t\t\t\t\t\t\t<a href=\"#fa-flag\"><i class=\"fa fa-flag\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"flag-checkered|report|notification|notify\">
\t\t\t\t\t\t\t<a href=\"#fa-flag-checkered\"><i class=\"fa fa-flag-checkered\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"flag-o|report|notification\">
\t\t\t\t\t\t\t<a href=\"#fa-flag-o\"><i class=\"fa fa-flag-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"bolt|flash|lightning|weather\">
\t\t\t\t\t\t\t<a href=\"#fa-bolt\"><i class=\"fa fa-flash\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"flask|science|beaker|experimental|labs\">
\t\t\t\t\t\t\t<a href=\"#fa-flask\"><i class=\"fa fa-flask\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"folder\">
\t\t\t\t\t\t\t<a href=\"#fa-folder\"><i class=\"fa fa-folder\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"folder-o\">
\t\t\t\t\t\t\t<a href=\"#fa-folder-o\"><i class=\"fa fa-folder-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"folder-open\">
\t\t\t\t\t\t\t<a href=\"#fa-folder-open\"><i class=\"fa fa-folder-open\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"folder-open-o\">
\t\t\t\t\t\t\t<a href=\"#fa-folder-open-o\"><i class=\"fa fa-folder-open-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"frown-o|emoticon|sad|disapprove|rating\">
\t\t\t\t\t\t\t<a href=\"#fa-frown-o\"><i class=\"fa fa-frown-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"futbol-o|soccer-ball-o\">
\t\t\t\t\t\t\t<a href=\"#fa-futbol-o\"><i class=\"fa fa-futbol-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"gamepad|controller\">
\t\t\t\t\t\t\t<a href=\"#fa-gamepad\"><i class=\"fa fa-gamepad\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"gavel|legal\">
\t\t\t\t\t\t\t<a href=\"#fa-gavel\"><i class=\"fa fa-gavel\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-cog\"><i class=\"fa fa-gear\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-cogs\"><i class=\"fa fa-gears\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-circle-thin\"><i class=\"fa fa-genderless\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"gift|present\">
\t\t\t\t\t\t\t<a href=\"#fa-gift\"><i class=\"fa fa-gift\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"glass|martini|drink|bar|alcohol|liquor\">
\t\t\t\t\t\t\t<a href=\"#fa-glass\"><i class=\"fa fa-glass\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"globe|world|planet|map|place|travel|earth|global|translate|all|language|localize|location|coordinates|country\">
\t\t\t\t\t\t\t<a href=\"#fa-globe\"><i class=\"fa fa-globe\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"graduation-cap|mortar-board\">
\t\t\t\t\t\t\t<a href=\"#fa-graduation-cap\"><i class=\"fa fa-graduation-cap\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-users\"><i class=\"fa fa-group\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"hand-lizard-o\">
\t\t\t\t\t\t\t<a href=\"#fa-hand-lizard-o\"><i class=\"fa fa-hand-lizard-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"hand-paper-o\">
\t\t\t\t\t\t\t<a href=\"#fa-hand-paper-o\"><i class=\"fa fa-hand-paper-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"hand-peace-o\">
\t\t\t\t\t\t\t<a href=\"#fa-hand-peace-o\"><i class=\"fa fa-hand-peace-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"hand-pointer-o\">
\t\t\t\t\t\t\t<a href=\"#fa-hand-pointer-o\"><i class=\"fa fa-hand-pointer-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"hand-rock-o\">
\t\t\t\t\t\t\t<a href=\"#fa-hand-rock-o\"><i class=\"fa fa-hand-rock-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"hand-scissors-o\">
\t\t\t\t\t\t\t<a href=\"#fa-hand-scissors-o\"><i class=\"fa fa-hand-scissors-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"hand-spock-o\">
\t\t\t\t\t\t\t<a href=\"#fa-hand-spock-o\"><i class=\"fa fa-hand-spock-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"hdd-o|harddrive|hard drive|storage|save\">
\t\t\t\t\t\t\t<a href=\"#fa-hdd-o\"><i class=\"fa fa-hdd-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"headphones|sound|listen|music\">
\t\t\t\t\t\t\t<a href=\"#fa-headphones\"><i class=\"fa fa-headphones\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"heart|love|like|favorite\">
\t\t\t\t\t\t\t<a href=\"#fa-heart\"><i class=\"fa fa-heart\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-heart-o\"><i class=\"fa fa-heart-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-heartbeat\"><i class=\"fa fa-heartbeat\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"history\">
\t\t\t\t\t\t\t<a href=\"#fa-history\"><i class=\"fa fa-history\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"home|main|house\">
\t\t\t\t\t\t\t<a href=\"#fa-home\"><i class=\"fa fa-home\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-bed\"><i class=\"fa fa-hotel\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"hourglass\">
\t\t\t\t\t\t\t<a href=\"#fa-hourglass\"><i class=\"fa fa-hourglass\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"hourglass-end|hourglass-3\">
\t\t\t\t\t\t\t<a href=\"#fa-hourglass-end\"><i class=\"fa fa-hourglass-end\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"hourglass-half|hourglass-2\">
\t\t\t\t\t\t\t<a href=\"#fa-hourglass-half\"><i class=\"fa fa-hourglass-half\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"hourglass-o\">
\t\t\t\t\t\t\t<a href=\"#fa-hourglass-o\"><i class=\"fa fa-hourglass-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"hourglass-start|hourglass-1\">
\t\t\t\t\t\t\t<a href=\"#fa-hourglass-start\"><i class=\"fa fa-hourglass-start\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"i-cursor\">
\t\t\t\t\t\t\t<a href=\"#fa-i-cursor\"><i class=\"fa fa-i-cursor\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"picture-o|photo|image\">
\t\t\t\t\t\t\t<a href=\"#fa-picture-o\"><i class=\"fa fa-image\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"inbox\">
\t\t\t\t\t\t\t<a href=\"#fa-inbox\"><i class=\"fa fa-inbox\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"industry\">
\t\t\t\t\t\t\t<a href=\"#fa-industry\"><i class=\"fa fa-industry\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"info|help|information|more|details\">
\t\t\t\t\t\t\t<a href=\"#fa-info\"><i class=\"fa fa-info\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"info-circle|help|information|more|details\">
\t\t\t\t\t\t\t<a href=\"#fa-info-circle\"><i class=\"fa fa-info-circle\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-university\"><i class=\"fa fa-institution\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"key|unlock|password\">
\t\t\t\t\t\t\t<a href=\"#fa-key\"><i class=\"fa fa-key\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"keyboard-o|type|input\">
\t\t\t\t\t\t\t<a href=\"#fa-keyboard-o\"><i class=\"fa fa-keyboard-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"language\">
\t\t\t\t\t\t\t<a href=\"#fa-language\"><i class=\"fa fa-language\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"laptop|demo|computer|device\">
\t\t\t\t\t\t\t<a href=\"#fa-laptop\"><i class=\"fa fa-laptop\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"leaf|eco|nature\">
\t\t\t\t\t\t\t<a href=\"#fa-leaf\"><i class=\"fa fa-leaf\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-gavel\"><i class=\"fa fa-legal\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"lemon-o\">
\t\t\t\t\t\t\t<a href=\"#fa-lemon-o\"><i class=\"fa fa-lemon-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"level-down\">
\t\t\t\t\t\t\t<a href=\"#fa-level-down\"><i class=\"fa fa-level-down\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"level-up\">
\t\t\t\t\t\t\t<a href=\"#fa-level-up\"><i class=\"fa fa-level-up\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-life-ring\"><i class=\"fa fa-life-bouy\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-life-ring\"><i class=\"fa fa-life-buoy\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"life-ring|life-bouy|life-buoy|life-saver|support\">
\t\t\t\t\t\t\t<a href=\"#fa-life-ring\"><i class=\"fa fa-life-ring\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-life-ring\"><i class=\"fa fa-life-saver\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"lightbulb-o|idea|inspiration\">
\t\t\t\t\t\t\t<a href=\"#fa-lightbulb-o\"><i class=\"fa fa-lightbulb-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"line-chart\">
\t\t\t\t\t\t\t<a href=\"#fa-line-chart\"><i class=\"fa fa-line-chart\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"location-arrow|map|coordinates|location|address|place|where\">
\t\t\t\t\t\t\t<a href=\"#fa-location-arrow\"><i class=\"fa fa-location-arrow\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"lock|protect|admin\">
\t\t\t\t\t\t\t<a href=\"#fa-lock\"><i class=\"fa fa-lock\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"low-vision\">
\t\t\t\t\t\t\t<a href=\"#fa-low-vision\"><i class=\"fa fa-low-vision\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"magic|wizard|automatic|autocomplete\">
\t\t\t\t\t\t\t<a href=\"#fa-magic\"><i class=\"fa fa-magic\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"magnet\">
\t\t\t\t\t\t\t<a href=\"#fa-magnet\"><i class=\"fa fa-magnet\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"share|mail-forward\">
\t\t\t\t\t\t\t<a href=\"#fa-share\"><i class=\"fa fa-mail-forward\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"reply|mail-reply\">
\t\t\t\t\t\t\t<a href=\"#fa-reply\"><i class=\"fa fa-mail-reply\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"reply-all|mail-reply-all\">
\t\t\t\t\t\t\t<a href=\"#fa-reply-all\"><i class=\"fa fa-mail-reply-all\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"male|man|user|person|profile\">
\t\t\t\t\t\t\t<a href=\"#fa-male\"><i class=\"fa fa-male\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"map\">
\t\t\t\t\t\t\t<a href=\"#fa-map\"><i class=\"fa fa-map\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"map-marker|map|pin|location|coordinates|localize|address|travel|where|place\">
\t\t\t\t\t\t\t<a href=\"#fa-map-marker\"><i class=\"fa fa-map-marker\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"map-o\">
\t\t\t\t\t\t\t<a href=\"#fa-map-o\"><i class=\"fa fa-map-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"map-pin\">
\t\t\t\t\t\t\t<a href=\"#fa-map-pin\"><i class=\"fa fa-map-pin\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"map-signs\">
\t\t\t\t\t\t\t<a href=\"#fa-map-signs\"><i class=\"fa fa-map-signs\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"meh-o|emoticon|rating|neutral\">
\t\t\t\t\t\t\t<a href=\"#fa-meh-o\"><i class=\"fa fa-meh-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"microphone|record|voice|sound\">
\t\t\t\t\t\t\t<a href=\"#fa-microphone\"><i class=\"fa fa-microphone\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"microphone-slash|record|voice|sound|mute\">
\t\t\t\t\t\t\t<a href=\"#fa-microphone-slash\"><i class=\"fa fa-microphone-slash\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"minus|hide|minify|delete|remove|trash|hide|collapse\">
\t\t\t\t\t\t\t<a href=\"#fa-minus\"><i class=\"fa fa-minus\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"minus-circle|delete|remove|trash|hide\">
\t\t\t\t\t\t\t<a href=\"#fa-minus-circle\"><i class=\"fa fa-minus-circle\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-minus-square\"><i class=\"fa fa-minus-square\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-minus-square-o\"><i class=\"fa fa-minus-square-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"mobile|mobile-phone|cell phone|cellphone|text|call|iphone|number\">
\t\t\t\t\t\t\t<a href=\"#fa-mobile\"><i class=\"fa fa-mobile\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-mobile\"><i class=\"fa fa-mobile-phone\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"money|cash|money|buy|checkout|purchase|payment\">
\t\t\t\t\t\t\t<a href=\"#fa-money\"><i class=\"fa fa-money\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"moon-o|night|darker|contrast\">
\t\t\t\t\t\t\t<a href=\"#fa-moon-o\"><i class=\"fa fa-moon-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-graduation-cap\"><i class=\"fa fa-mortar-board\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-motorcycle\"><i class=\"fa fa-motorcycle\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"mouse-pointer\">
\t\t\t\t\t\t\t<a href=\"#fa-mouse-pointer\"><i class=\"fa fa-mouse-pointer\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"music|note|sound\">
\t\t\t\t\t\t\t<a href=\"#fa-music\"><i class=\"fa fa-music\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-bars\"><i class=\"fa fa-navicon\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"newspaper-o\">
\t\t\t\t\t\t\t<a href=\"#fa-newspaper-o\"><i class=\"fa fa-newspaper-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"object-group\">
\t\t\t\t\t\t\t<a href=\"#fa-object-group\"><i class=\"fa fa-object-group\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"object-ungroup\">
\t\t\t\t\t\t\t<a href=\"#fa-object-ungroup\"><i class=\"fa fa-object-ungroup\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"paint-brush\">
\t\t\t\t\t\t\t<a href=\"#fa-paint-brush\"><i class=\"fa fa-paint-brush\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"paper-plane|send\">
\t\t\t\t\t\t\t<a href=\"#fa-paper-plane\"><i class=\"fa fa-paper-plane\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"paper-plane-o|send-o\">
\t\t\t\t\t\t\t<a href=\"#fa-paper-plane-o\"><i class=\"fa fa-paper-plane-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"paw\">
\t\t\t\t\t\t\t<a href=\"#fa-paw\"><i class=\"fa fa-paw\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"pencil|write|edit|update\">
\t\t\t\t\t\t\t<a href=\"#fa-pencil\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"pencil-square|write|edit|update\">
\t\t\t\t\t\t\t<a href=\"#fa-pencil-square\"><i class=\"fa fa-pencil-square\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"pencil-square-o|edit|write|edit|update\">
\t\t\t\t\t\t\t<a href=\"#fa-pencil-square-o\"><i class=\"fa fa-pencil-square-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"phone|call|voice|number|support\">
\t\t\t\t\t\t\t<a href=\"#fa-phone\"><i class=\"fa fa-phone\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"phone-square|call|voice|number|support\">
\t\t\t\t\t\t\t<a href=\"#fa-phone-square\"><i class=\"fa fa-phone-square\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-picture-o\"><i class=\"fa fa-photo\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-picture-o\"><i class=\"fa fa-picture-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-pie-chart\"><i class=\"fa fa-pie-chart\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-plane\"><i class=\"fa fa-plane\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"plug\">
\t\t\t\t\t\t\t<a href=\"#fa-plug\"><i class=\"fa fa-plug\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"plus|add|new|create|expand\">
\t\t\t\t\t\t\t<a href=\"#fa-plus\"><i class=\"fa fa-plus\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"plus-circle|add|new|create|expand\">
\t\t\t\t\t\t\t<a href=\"#fa-plus-circle\"><i class=\"fa fa-plus-circle\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-plus-square\"><i class=\"fa fa-plus-square\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"plus-square-o|add|new|create|expand\">
\t\t\t\t\t\t\t<a href=\"#fa-plus-square-o\"><i class=\"fa fa-plus-square-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"power-off|on\">
\t\t\t\t\t\t\t<a href=\"#fa-power-off\"><i class=\"fa fa-power-off\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"print\">
\t\t\t\t\t\t\t<a href=\"#fa-print\"><i class=\"fa fa-print\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"puzzle-piece|addon|add-on|section\">
\t\t\t\t\t\t\t<a href=\"#fa-puzzle-piece\"><i class=\"fa fa-puzzle-piece\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"qrcode|scan\">
\t\t\t\t\t\t\t<a href=\"#fa-qrcode\"><i class=\"fa fa-qrcode\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"question|help|information|unknown|support\">
\t\t\t\t\t\t\t<a href=\"#fa-question\"><i class=\"fa fa-question\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"question-circle|help|information|unknown|support\">
\t\t\t\t\t\t\t<a href=\"#fa-question-circle\"><i class=\"fa fa-question-circle\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"question-circle-o|help|information|unknown|support\">
\t\t\t\t\t\t\t<a href=\"#fa-question-circle-o\"><i class=\"fa fa-question-circle-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"quote-left\">
\t\t\t\t\t\t\t<a href=\"#fa-quote-left\"><i class=\"fa fa-quote-left\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"quote-right\">
\t\t\t\t\t\t\t<a href=\"#fa-quote-right\"><i class=\"fa fa-quote-right\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"random|sort\">
\t\t\t\t\t\t\t<a href=\"#fa-random\"><i class=\"fa fa-random\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"recycle\">
\t\t\t\t\t\t\t<a href=\"#fa-recycle\"><i class=\"fa fa-recycle\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"refresh|reload\">
\t\t\t\t\t\t\t<a href=\"#fa-refresh\"><i class=\"fa fa-refresh\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"registered\">
\t\t\t\t\t\t\t<a href=\"#fa-registered\"><i class=\"fa fa-registered\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-times\"><i class=\"fa fa-remove\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-bars\"><i class=\"fa fa-reorder\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-reply\"><i class=\"fa fa-reply\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-reply-all\"><i class=\"fa fa-reply-all\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"retweet|refresh|reload|share\">
\t\t\t\t\t\t\t<a href=\"#fa-retweet\"><i class=\"fa fa-retweet\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"road|street\">
\t\t\t\t\t\t\t<a href=\"#fa-road\"><i class=\"fa fa-road\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"rocket|app\">
\t\t\t\t\t\t\t<a href=\"#fa-rocket\"><i class=\"fa fa-rocket\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"rss|feed|blog\">
\t\t\t\t\t\t\t<a href=\"#fa-rss\"><i class=\"fa fa-rss\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"rss-square|feed|blog\">
\t\t\t\t\t\t\t<a href=\"#fa-rss-square\"><i class=\"fa fa-rss-square\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"search|magnify|zoom|enlarge|bigger\">
\t\t\t\t\t\t\t<a href=\"#fa-search\"><i class=\"fa fa-search\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"search-minus|magnify|minify|zoom|smaller\">
\t\t\t\t\t\t\t<a href=\"#fa-search-minus\"><i class=\"fa fa-search-minus\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"search-plus|magnify|zoom|enlarge|bigger\">
\t\t\t\t\t\t\t<a href=\"#fa-search-plus\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-paper-plane\"><i class=\"fa fa-send\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-paper-plane-o\"><i class=\"fa fa-send-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"server\">
\t\t\t\t\t\t\t<a href=\"#fa-server\"><i class=\"fa fa-server\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-share\"><i class=\"fa fa-share\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-share-alt\"><i class=\"fa fa-share-alt\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-share-alt-square\"><i class=\"fa fa-share-alt-square\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"share-square|social|send\">
\t\t\t\t\t\t\t<a href=\"#fa-share-square\"><i class=\"fa fa-share-square\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"share-square-o|social|send\">
\t\t\t\t\t\t\t<a href=\"#fa-share-square-o\"><i class=\"fa fa-share-square-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"shield|award|achievement|winner\">
\t\t\t\t\t\t\t<a href=\"#fa-shield\"><i class=\"fa fa-shield\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"ship|boat|sea\">
\t\t\t\t\t\t\t<a href=\"#fa-ship\"><i class=\"fa fa-ship\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"shopping-cart|checkout|buy|purchase|payment\">
\t\t\t\t\t\t\t<a href=\"#fa-shopping-cart\"><i class=\"fa fa-shopping-cart\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"sign-in|enter|join|sign up|sign in|signin|signup|arrow\">
\t\t\t\t\t\t\t<a href=\"#fa-sign-in\"><i class=\"fa fa-sign-in\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"sign-language\">
\t\t\t\t\t\t\t<a href=\"#fa-sign-language\"><i class=\"fa fa-sign-language\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"sign-out|log out|logout|leave|exit|arrow\">
\t\t\t\t\t\t\t<a href=\"#fa-sign-out\"><i class=\"fa fa-sign-out\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"signal\">
\t\t\t\t\t\t\t<a href=\"#fa-signal\"><i class=\"fa fa-signal\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"sitemap|directory|hierarchy|organization\">
\t\t\t\t\t\t\t<a href=\"#fa-sitemap\"><i class=\"fa fa-sitemap\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"sliders\">
\t\t\t\t\t\t\t<a href=\"#fa-sliders\"><i class=\"fa fa-sliders\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"smile-o|emoticon|happy|approve|satisfied|rating\">
\t\t\t\t\t\t\t<a href=\"#fa-smile-o\"><i class=\"fa fa-smile-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-futbol-o\"><i class=\"fa fa-soccer-ball-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"sort|unsorted|order\">
\t\t\t\t\t\t\t<a href=\"#fa-sort\"><i class=\"fa fa-sort\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"sort-alpha-asc\">
\t\t\t\t\t\t\t<a href=\"#fa-sort-alpha-asc\"><i class=\"fa fa-sort-alpha-asc\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"sort-alpha-desc\">
\t\t\t\t\t\t\t<a href=\"#fa-sort-alpha-desc\"><i class=\"fa fa-sort-alpha-desc\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"sort-amount-asc\">
\t\t\t\t\t\t\t<a href=\"#fa-sort-amount-asc\"><i class=\"fa fa-sort-amount-asc\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"sort-amount-desc\">
\t\t\t\t\t\t\t<a href=\"#fa-sort-amount-desc\"><i class=\"fa fa-sort-amount-desc\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"sort-asc|sort-up\">
\t\t\t\t\t\t\t<a href=\"#fa-sort-asc\"><i class=\"fa fa-sort-asc\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"sort-desc|sort-down|dropdown|more|menu\">
\t\t\t\t\t\t\t<a href=\"#fa-sort-desc\"><i class=\"fa fa-sort-desc\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-sort-desc\"><i class=\"fa fa-sort-down\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"sort-numeric-asc|numbers\">
\t\t\t\t\t\t\t<a href=\"#fa-sort-numeric-asc\"><i class=\"fa fa-sort-numeric-asc\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"sort-numeric-desc|numbers\">
\t\t\t\t\t\t\t<a href=\"#fa-sort-numeric-desc\"><i class=\"fa fa-sort-numeric-desc\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-sort-asc\"><i class=\"fa fa-sort-up\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"space-shuttle\">
\t\t\t\t\t\t\t<a href=\"#fa-space-shuttle\"><i class=\"fa fa-space-shuttle\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"spinner|loading|progress\">
\t\t\t\t\t\t\t<a href=\"#fa-spinner\"><i class=\"fa fa-spinner\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"spoon\">
\t\t\t\t\t\t\t<a href=\"#fa-spoon\"><i class=\"fa fa-spoon\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"square|block|box\">
\t\t\t\t\t\t\t<a href=\"#fa-square\"><i class=\"fa fa-square\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"square-o|block|square|box\">
\t\t\t\t\t\t\t<a href=\"#fa-square-o\"><i class=\"fa fa-square-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"star|award|achievement|night|rating|score\">
\t\t\t\t\t\t\t<a href=\"#fa-star\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"star-half|award|achievement|rating|score\">
\t\t\t\t\t\t\t<a href=\"#fa-star-half\"><i class=\"fa fa-star-half\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-star-half-o\"><i class=\"fa fa-star-half-empty\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-star-half-o\"><i class=\"fa fa-star-half-full\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"star-half-o|star-half-empty|star-half-full|award|achievement|rating|score\">
\t\t\t\t\t\t\t<a href=\"#fa-star-half-o\"><i class=\"fa fa-star-half-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"star-o|award|achievement|night|rating|score\">
\t\t\t\t\t\t\t<a href=\"#fa-star-o\"><i class=\"fa fa-star-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"sticky-note\">
\t\t\t\t\t\t\t<a href=\"#fa-sticky-note\"><i class=\"fa fa-sticky-note\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"sticky-note-o\">
\t\t\t\t\t\t\t<a href=\"#fa-sticky-note-o\"><i class=\"fa fa-sticky-note-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"street-view|map\">
\t\t\t\t\t\t\t<a href=\"#fa-street-view\"><i class=\"fa fa-street-view\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"suitcase|trip|luggage|travel|move|baggage\">
\t\t\t\t\t\t\t<a href=\"#fa-suitcase\"><i class=\"fa fa-suitcase\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"sun-o|weather|contrast|lighter|brighten|day\">
\t\t\t\t\t\t\t<a href=\"#fa-sun-o\"><i class=\"fa fa-sun-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-life-ring\"><i class=\"fa fa-support\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"tablet|ipad|device\">
\t\t\t\t\t\t\t<a href=\"#fa-tablet\"><i class=\"fa fa-tablet\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"tachometer|dashboard\">
\t\t\t\t\t\t\t<a href=\"#fa-tachometer\"><i class=\"fa fa-tachometer\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"tag|label\">
\t\t\t\t\t\t\t<a href=\"#fa-tag\"><i class=\"fa fa-tag\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"tags|labels\">
\t\t\t\t\t\t\t<a href=\"#fa-tags\"><i class=\"fa fa-tags\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"tasks|progress|loading|downloading|downloads|settings\">
\t\t\t\t\t\t\t<a href=\"#fa-tasks\"><i class=\"fa fa-tasks\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-taxi\"><i class=\"fa fa-taxi\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"television|tv\">
\t\t\t\t\t\t\t<a href=\"#fa-television\"><i class=\"fa fa-television\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"terminal|command|prompt|code\">
\t\t\t\t\t\t\t<a href=\"#fa-terminal\"><i class=\"fa fa-terminal\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"thumb-tack|marker|pin|location|coordinates\">
\t\t\t\t\t\t\t<a href=\"#fa-thumb-tack\"><i class=\"fa fa-thumb-tack\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"thumbs-down|dislike|disapprove|disagree\">
\t\t\t\t\t\t\t<a href=\"#fa-thumbs-down\"><i class=\"fa fa-thumbs-down\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"thumbs-o-down|dislike|disapprove|disagree\">
\t\t\t\t\t\t\t<a href=\"#fa-thumbs-o-down\"><i class=\"fa fa-thumbs-o-down\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"thumbs-o-up|like|approve|favorite|agree\">
\t\t\t\t\t\t\t<a href=\"#fa-thumbs-o-up\"><i class=\"fa fa-thumbs-o-up\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"thumbs-up|like|favorite|approve|agree\">
\t\t\t\t\t\t\t<a href=\"#fa-thumbs-up\"><i class=\"fa fa-thumbs-up\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"ticket|movie|pass|support\">
\t\t\t\t\t\t\t<a href=\"#fa-ticket\"><i class=\"fa fa-ticket\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-times\"><i class=\"fa fa-times\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"times-circle|close|exit|x\">
\t\t\t\t\t\t\t<a href=\"#fa-times-circle\"><i class=\"fa fa-times-circle\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"times-circle-o|close|exit|x\">
\t\t\t\t\t\t\t<a href=\"#fa-times-circle-o\"><i class=\"fa fa-times-circle-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"tint|raindrop\">
\t\t\t\t\t\t\t<a href=\"#fa-tint\"><i class=\"fa fa-tint\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"caret-square-o-down|toggle-down|more|dropdown|menu\">
\t\t\t\t\t\t\t<a href=\"#fa-caret-square-o-down\"><i class=\"fa fa-toggle-down\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-caret-square-o-left\"><i class=\"fa fa-toggle-left\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"toggle-off\">
\t\t\t\t\t\t\t<a href=\"#fa-toggle-off\"><i class=\"fa fa-toggle-off\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"toggle-on\">
\t\t\t\t\t\t\t<a href=\"#fa-toggle-on\"><i class=\"fa fa-toggle-on\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-caret-square-o-right\"><i class=\"fa fa-toggle-right\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"caret-square-o-up|toggle-up\">
\t\t\t\t\t\t\t<a href=\"#fa-caret-square-o-up\"><i class=\"fa fa-toggle-up\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"trademark\">
\t\t\t\t\t\t\t<a href=\"#fa-trademark\"><i class=\"fa fa-trademark\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"trash\">
\t\t\t\t\t\t\t<a href=\"#fa-trash\"><i class=\"fa fa-trash\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"trash-o|garbage|delete|remove|trash|hide\">
\t\t\t\t\t\t\t<a href=\"#fa-trash-o\"><i class=\"fa fa-trash-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"tree\">
\t\t\t\t\t\t\t<a href=\"#fa-tree\"><i class=\"fa fa-tree\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"trophy|award|achievement|winner|game\">
\t\t\t\t\t\t\t<a href=\"#fa-trophy\"><i class=\"fa fa-trophy\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"truck|shipping\">
\t\t\t\t\t\t\t<a href=\"#fa-truck\"><i class=\"fa fa-truck\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"tty\">
\t\t\t\t\t\t\t<a href=\"#fa-tty\"><i class=\"fa fa-tty\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"umbrella\">
\t\t\t\t\t\t\t<a href=\"#fa-umbrella\"><i class=\"fa fa-umbrella\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"universal|access\">
\t\t\t\t\t\t\t<a href=\"#fa-universal-access\"><i class=\"fa fa-universal-access\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"university|institution|bank\">
\t\t\t\t\t\t\t<a href=\"#fa-university\"><i class=\"fa fa-university\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"unlock|protect|admin|password\">
\t\t\t\t\t\t\t<a href=\"#fa-unlock\"><i class=\"fa fa-unlock\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"unlock-alt|protect|admin|password\">
\t\t\t\t\t\t\t<a href=\"#fa-unlock-alt\"><i class=\"fa fa-unlock-alt\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-sort\"><i class=\"fa fa-unsorted\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"upload|import\">
\t\t\t\t\t\t\t<a href=\"#fa-upload\"><i class=\"fa fa-upload\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"user|person|man|head|profile\">
\t\t\t\t\t\t\t<a href=\"#fa-user\"><i class=\"fa fa-user\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"user-plus\">
\t\t\t\t\t\t\t<a href=\"#fa-user-plus\"><i class=\"fa fa-user-plus\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"user-secret|whisper|spy|incognito\">
\t\t\t\t\t\t\t<a href=\"#fa-user-secret\"><i class=\"fa fa-user-secret\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"user-times\">
\t\t\t\t\t\t\t<a href=\"#fa-user-times\"><i class=\"fa fa-user-times\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"users|group|people|profiles|persons\">
\t\t\t\t\t\t\t<a href=\"#fa-users\"><i class=\"fa fa-users\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"video-camera|film|movie|record\">
\t\t\t\t\t\t\t<a href=\"#fa-video-camera\"><i class=\"fa fa-video-camera\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"volume-control-phone\">
\t\t\t\t\t\t\t<a href=\"#fa-volume-control-phone\"><i class=\"fa fa-volume-control-phone\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"volume-down|lower|quieter|sound|music\">
\t\t\t\t\t\t\t<a href=\"#fa-volume-down\"><i class=\"fa fa-volume-down\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"volume-off|mute|sound|music\">
\t\t\t\t\t\t\t<a href=\"#fa-volume-off\"><i class=\"fa fa-volume-off\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"volume-up|higher|louder|sound|music\">
\t\t\t\t\t\t\t<a href=\"#fa-volume-up\"><i class=\"fa fa-volume-up\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"exclamation-triangle|warning|warning|error|problem|notification|alert\">
\t\t\t\t\t\t\t<a href=\"#fa-exclamation-triangle\"><i class=\"fa fa-warning\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"wheelchair|handicap|person|accessibility|accessibile\">
\t\t\t\t\t\t\t<a href=\"#fa-wheelchair\"><i class=\"fa fa-wheelchair\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"wifi\">
\t\t\t\t\t\t\t<a href=\"#fa-wifi\"><i class=\"fa fa-wifi\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"wrench|settings|fix|update\">
\t\t\t\t\t\t\t<a href=\"#fa-wrench\"><i class=\"fa fa-wrench\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"icon-list\">

\t\t\t\t\t\t<p id=\"cat-accessibility\" class=\"filter-icon\">";
        // line 1419
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_ACCESSIBILITY");
        echo "</p>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-american-sign-language-interpreting\"><i class=\"fa fa-american-sign-language-interpreting\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-assistive-listening-systems\"><i class=\"fa fa-assistive-listening-systems\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-audio-description\"><i class=\"fa fa-audio-description\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-blind\"><i class=\"fa fa-blind\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-braille\"><i class=\"fa fa-braille\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-cc\"><i class=\"fa fa-cc\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-deaf\"><i class=\"fa fa-deaf\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-low-vision\"><i class=\"fa fa-low-vision\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-question-circle-o\"><i class=\"fa fa-question-circle-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-sign-language\"><i class=\"fa fa-sign-language\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-tty\"><i class=\"fa fa-tty\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-universal-access\"><i class=\"fa fa-universal-access\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-volume-control-phone\"><i class=\"fa fa-volume-control-phone\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-wheelchair\"><i class=\"fa fa-wheelchair\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-wheelchair-alt\"><i class=\"fa fa-wheelchair-alt\"></i></a></div>

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"icon-list\">

\t\t\t\t\t\t<p id=\"cat-hands\" class=\"filter-icon\">";
        // line 1455
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_HANDS");
        echo "</p>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-hand-rock-o\"><i class=\"fa fa-hand-rock-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-hand-lizard-o\"><i class=\"fa fa-hand-lizard-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-hand-o-down\"><i class=\"fa fa-hand-o-down\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-hand-o-left\"><i class=\"fa fa-hand-o-left\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-hand-o-right\"><i class=\"fa fa-hand-o-right\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-hand-o-up\"><i class=\"fa fa-hand-o-up\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-hand-paper-o\"><i class=\"fa fa-hand-paper-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-hand-peace-o\"><i class=\"fa fa-hand-peace-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-hand-pointer-o\"><i class=\"fa fa-hand-pointer-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-hand-rock-o\"><i class=\"fa fa-hand-rock-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-hand-scissors-o\"><i class=\"fa fa-hand-scissors-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-hand-spock-o\"><i class=\"fa fa-hand-spock-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-hand-paper-o\"><i class=\"fa fa-hand-paper-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-thumbs-down\"><i class=\"fa fa-thumbs-down\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-thumbs-o-down\"><i class=\"fa fa-thumbs-o-down\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-thumbs-o-up\"><i class=\"fa fa-thumbs-o-up\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-thumbs-up\"><i class=\"fa fa-thumbs-up\"></i></a></div>

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"icon-list\">

\t\t\t\t\t\t<p id=\"cat-transportation\" class=\"filter-icon\">";
        // line 1495
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_TRANSPORTATION");
        echo "</p>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"ambulance|support|help\">
\t\t\t\t\t\t\t<a href=\"#fa-ambulance\"><i class=\"fa fa-ambulance\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-car\"><i class=\"fa fa-automobile\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"bicycle|vehicle|bike\">
\t\t\t\t\t\t\t<a href=\"#fa-bicycle\"><i class=\"fa fa-bicycle\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"bus|vehicle\">
\t\t\t\t\t\t\t<a href=\"#fa-bus\"><i class=\"fa fa-bus\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-taxi\"><i class=\"fa fa-cab\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"car|automobile|vehicle\">
\t\t\t\t\t\t\t<a href=\"#fa-car\"><i class=\"fa fa-car\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-fighter-jet\"><i class=\"fa fa-fighter-jet\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"motorcycle|vehicle|bike\">
\t\t\t\t\t\t\t<a href=\"#fa-motorcycle\"><i class=\"fa fa-motorcycle\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"plane|travel|trip|location|destination|airplane|fly|mode\">
\t\t\t\t\t\t\t<a href=\"#fa-plane\"><i class=\"fa fa-plane\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-rocket\"><i class=\"fa fa-rocket\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-ship\"><i class=\"fa fa-ship\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-space-shuttle\"><i class=\"fa fa-space-shuttle\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"subway\">
\t\t\t\t\t\t\t<a href=\"#fa-subway\"><i class=\"fa fa-subway\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"taxi|cab|vehicle\">
\t\t\t\t\t\t\t<a href=\"#fa-taxi\"><i class=\"fa fa-taxi\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"train\">
\t\t\t\t\t\t\t<a href=\"#fa-train\"><i class=\"fa fa-train\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-truck\"><i class=\"fa fa-truck\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-wheelchair\"><i class=\"fa fa-wheelchair\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"wheelchair-alt\">
\t\t\t\t\t\t\t<a href=\"#fa-wheelchair-alt\"><i class=\"fa fa-wheelchair-alt\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"icon-list\">

\t\t\t\t\t\t<p id=\"cat-gender\" class=\"filter-icon\">";
        // line 1558
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_GENDER");
        echo "</p>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"genderless\">
\t\t\t\t\t\t\t<a href=\"#fa-genderless\"><i class=\"fa fa-genderless\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"mars|male\">
\t\t\t\t\t\t\t<a href=\"#fa-mars\"><i class=\"fa fa-mars\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"mars-double\">
\t\t\t\t\t\t\t<a href=\"#fa-mars-double\"><i class=\"fa fa-mars-double\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"mars-stroke\">
\t\t\t\t\t\t\t<a href=\"#fa-mars-stroke\"><i class=\"fa fa-mars-stroke\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"mars-stroke-h\">
\t\t\t\t\t\t\t<a href=\"#fa-mars-stroke-h\"><i class=\"fa fa-mars-stroke-h\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"mars-stroke-v\">
\t\t\t\t\t\t\t<a href=\"#fa-mars-stroke-v\"><i class=\"fa fa-mars-stroke-v\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"mercury|transgender\">
\t\t\t\t\t\t\t<a href=\"#fa-mercury\"><i class=\"fa fa-mercury\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"neuter\">
\t\t\t\t\t\t\t<a href=\"#fa-neuter\"><i class=\"fa fa-neuter\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"transgender\">
\t\t\t\t\t\t\t<a href=\"#fa-transgender\"><i class=\"fa fa-transgender\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"transgender-alt\">
\t\t\t\t\t\t\t<a href=\"#fa-transgender-alt\"><i class=\"fa fa-transgender-alt\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"venus|female\">
\t\t\t\t\t\t\t<a href=\"#fa-venus\"><i class=\"fa fa-venus\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"venus-double\">
\t\t\t\t\t\t\t<a href=\"#fa-venus-double\"><i class=\"fa fa-venus-double\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"venus-mars\">
\t\t\t\t\t\t\t<a href=\"#fa-venus-mars\"><i class=\"fa fa-venus-mars\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"icon-list\">

\t\t\t\t\t\t<p id=\"cat-file-type\" class=\"filter-icon\">";
        // line 1617
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_FILE_TYPE");
        echo "</p>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"file|new|page|pdf|document\">
\t\t\t\t\t\t\t<a href=\"#fa-file\"><i class=\"fa fa-file\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"file-archive-o|file-zip-o\">
\t\t\t\t\t\t\t<a href=\"#fa-file-archive-o\"><i class=\"fa fa-file-archive-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"file-audio-o|file-sound-o\">
\t\t\t\t\t\t\t<a href=\"#fa-file-audio-o\"><i class=\"fa fa-file-audio-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-file-code-o\"><i class=\"fa fa-file-code-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"file-excel-o\">
\t\t\t\t\t\t\t<a href=\"#fa-file-excel-o\"><i class=\"fa fa-file-excel-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-file-image-o\"><i class=\"fa fa-file-image-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"file-video-o|file-movie-o\">
\t\t\t\t\t\t\t<a href=\"#fa-file-video-o\"><i class=\"fa fa-file-movie-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"file-o|new|page|pdf|document\">
\t\t\t\t\t\t\t<a href=\"#fa-file-o\"><i class=\"fa fa-file-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-file-pdf-o\"><i class=\"fa fa-file-pdf-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-file-image-o\"><i class=\"fa fa-file-photo-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-file-image-o\"><i class=\"fa fa-file-picture-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"file-powerpoint-o\">
\t\t\t\t\t\t\t<a href=\"#fa-file-powerpoint-o\"><i class=\"fa fa-file-powerpoint-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-file-audio-o\"><i class=\"fa fa-file-sound-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"file-text|new|page|pdf|document\">
\t\t\t\t\t\t\t<a href=\"#fa-file-text\"><i class=\"fa fa-file-text\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"file-text-o|new|page|pdf|document\">
\t\t\t\t\t\t\t<a href=\"#fa-file-text-o\"><i class=\"fa fa-file-text-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-file-video-o\"><i class=\"fa fa-file-video-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-file-word-o\"><i class=\"fa fa-file-word-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-file-archive-o\"><i class=\"fa fa-file-zip-o\"></i></a></div>

\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"icon-list\">

\t\t\t\t\t\t<p id=\"cat-spinner\" class=\"filter-icon\">";
        // line 1678
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_SPINNER");
        echo "</p>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"circle-o-notch\">
\t\t\t\t\t\t\t<a href=\"#fa-circle-o-notch\"><i class=\"fa fa-circle-o-notch\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"cog|gear|settings\">
\t\t\t\t\t\t\t<a href=\"#fa-cog\"><i class=\"fa fa-cog\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-cog\"><i class=\"fa fa-gear\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-refresh\"><i class=\"fa fa-refresh\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-spinner\"><i class=\"fa fa-spinner\"></i></a></div>

\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"icon-list\">

\t\t\t\t\t\t<p id=\"cat-form-control\" class=\"filter-icon\">";
        // line 1699
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_FORM_CONTROL");
        echo "</p>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"check-square|checkmark|done|todo|agree|accept|confirm\">
\t\t\t\t\t\t\t<a href=\"#fa-check-square\"><i class=\"fa fa-check-square\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"check-square-o|todo|done|agree|accept|confirm\">
\t\t\t\t\t\t\t<a href=\"#fa-check-square-o\"><i class=\"fa fa-check-square-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"circle|dot|notification\">
\t\t\t\t\t\t\t<a href=\"#fa-circle\"><i class=\"fa fa-circle\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"circle-o\">
\t\t\t\t\t\t\t<a href=\"#fa-circle-o\"><i class=\"fa fa-circle-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-dot-circle-o\"><i class=\"fa fa-dot-circle-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"minus-square|hide|minify|delete|remove|trash|hide|collapse\">
\t\t\t\t\t\t\t<a href=\"#fa-minus-square\"><i class=\"fa fa-minus-square\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"minus-square-o|hide|minify|delete|remove|trash|hide|collapse\">
\t\t\t\t\t\t\t<a href=\"#fa-minus-square-o\"><i class=\"fa fa-minus-square-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"plus-square|add|new|create|expand\">
\t\t\t\t\t\t\t<a href=\"#fa-plus-square\"><i class=\"fa fa-plus-square\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-plus-square-o\"><i class=\"fa fa-plus-square-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-square\"><i class=\"fa fa-square\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-square-o\"><i class=\"fa fa-square-o\"></i></a></div>

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"icon-list\">

\t\t\t\t\t\t<p id=\"cat-payment\" class=\"filter-icon\">";
        // line 1741
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_PAYMENT");
        echo "</p>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-cc-amex\"><i class=\"fa fa-cc-amex\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"cc-diners-club\">
\t\t\t\t\t\t\t<a href=\"#fa-cc-diners-club\"><i class=\"fa fa-cc-diners-club\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"cc-discover\">
\t\t\t\t\t\t\t<a href=\"#fa-cc-discover\"><i class=\"fa fa-cc-discover\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"cc-jcb\">
\t\t\t\t\t\t\t<a href=\"#fa-cc-jcb\"><i class=\"fa fa-cc-jcb\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-cc-mastercard\"><i class=\"fa fa-cc-mastercard\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-cc-paypal\"><i class=\"fa fa-cc-paypal\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"pied-piper\">
\t\t\t\t\t\t\t<a href=\"#fa-pied-piper\"><i class=\"fa fa-pied-piper\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"pied-piper-alt\">
\t\t\t\t\t\t\t<a href=\"#fa-pied-piper-alt\"><i class=\"fa fa-pied-piper-alt\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"pied-piper-pp\">
\t\t\t\t\t\t\t<a href=\"#fa-pied-piper-pp\"><i class=\"fa fa-pied-piper-pp\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-cc-stripe\"><i class=\"fa fa-cc-stripe\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"cc-visa\">
\t\t\t\t\t\t\t<a href=\"#fa-cc-visa\"><i class=\"fa fa-cc-visa\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"credit-card|money|buy|debit|checkout|purchase|payment\">
\t\t\t\t\t\t\t<a href=\"#fa-credit-card\"><i class=\"fa fa-credit-card\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-google-wallet\"><i class=\"fa fa-google-wallet\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"paypal\">
\t\t\t\t\t\t\t<a href=\"#fa-paypal\"><i class=\"fa fa-paypal\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"icon-list\">

\t\t\t\t\t\t<p id=\"cat-chart\" class=\"filter-icon\">";
        // line 1793
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_CHART");
        echo "</p>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"area-chart\">
\t\t\t\t\t\t\t<a href=\"#fa-area-chart\"><i class=\"fa fa-area-chart\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-bar-chart\"><i class=\"fa fa-bar-chart\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-bar-chart\"><i class=\"fa fa-bar-chart-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-line-chart\"><i class=\"fa fa-line-chart\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"pie-chart\">
\t\t\t\t\t\t\t<a href=\"#fa-pie-chart\"><i class=\"fa fa-pie-chart\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"icon-list\">

\t\t\t\t\t\t<p id=\"cat-currency\" class=\"filter-icon\">";
        // line 1813
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_CURRENCY");
        echo "</p>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-btc\"><i class=\"fa fa-bitcoin\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-btc\"><i class=\"fa fa-btc\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-jpy\"><i class=\"fa fa-cny\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-usd\"><i class=\"fa fa-dollar\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"eur|euro\">
\t\t\t\t\t\t\t<a href=\"#fa-eur\"><i class=\"fa fa-eur\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-eur\"><i class=\"fa fa-euro\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"gbp\">
\t\t\t\t\t\t\t<a href=\"#fa-gbp\"><i class=\"fa fa-gbp\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"ils|shekel|sheqel\">
\t\t\t\t\t\t\t<a href=\"#fa-ils\"><i class=\"fa fa-ils\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"inr|rupee\">
\t\t\t\t\t\t\t<a href=\"#fa-inr\"><i class=\"fa fa-inr\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"jpy|cny|rmb|yen\">
\t\t\t\t\t\t\t<a href=\"#fa-jpy\"><i class=\"fa fa-jpy\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"krw|won\">
\t\t\t\t\t\t\t<a href=\"#fa-krw\"><i class=\"fa fa-krw\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-money\"><i class=\"fa fa-money\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-jpy\"><i class=\"fa fa-rmb\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-rub\"><i class=\"fa fa-rouble\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"rub|ruble|rouble\">
\t\t\t\t\t\t\t<a href=\"#fa-rub\"><i class=\"fa fa-rub\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-rub\"><i class=\"fa fa-ruble\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-inr\"><i class=\"fa fa-rupee\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-ils\"><i class=\"fa fa-shekel\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-ils\"><i class=\"fa fa-sheqel\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"try|turkish-lira\">
\t\t\t\t\t\t\t<a href=\"#fa-try\"><i class=\"fa fa-try\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-try\"><i class=\"fa fa-turkish-lira\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"usd|dollar\">
\t\t\t\t\t\t\t<a href=\"#fa-usd\"><i class=\"fa fa-usd\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-krw\"><i class=\"fa fa-won\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-jpy\"><i class=\"fa fa-yen\"></i></a></div>

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"icon-list\">

\t\t\t\t\t\t<p id=\"cat-text-editor\" class=\"filter-icon\">";
        // line 1885
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_TEXT_EDITOR");
        echo "</p>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"align-center|middle|text\">
\t\t\t\t\t\t\t<a href=\"#fa-align-center\"><i class=\"fa fa-align-center\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"align-justify|text\">
\t\t\t\t\t\t\t<a href=\"#fa-align-justify\"><i class=\"fa fa-align-justify\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"align-left|text\">
\t\t\t\t\t\t\t<a href=\"#fa-align-left\"><i class=\"fa fa-align-left\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"align-right|text\">
\t\t\t\t\t\t\t<a href=\"#fa-align-right\"><i class=\"fa fa-align-right\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"bold\">
\t\t\t\t\t\t\t<a href=\"#fa-bold\"><i class=\"fa fa-bold\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-link\"><i class=\"fa fa-chain\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"chain-broken|unlink|remove\">
\t\t\t\t\t\t\t<a href=\"#fa-chain-broken\"><i class=\"fa fa-chain-broken\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"clipboard|paste|copy\">
\t\t\t\t\t\t\t<a href=\"#fa-clipboard\"><i class=\"fa fa-clipboard\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"columns|split|panes\">
\t\t\t\t\t\t\t<a href=\"#fa-columns\"><i class=\"fa fa-columns\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-files-o\"><i class=\"fa fa-copy\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-scissors\"><i class=\"fa fa-cut\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-outdent\"><i class=\"fa fa-dedent\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-eraser\"><i class=\"fa fa-eraser\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-file\"><i class=\"fa fa-file\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-file-o\"><i class=\"fa fa-file-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-file-text\"><i class=\"fa fa-file-text\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-file-text-o\"><i class=\"fa fa-file-text-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"files-o|copy|duplicate\">
\t\t\t\t\t\t\t<a href=\"#fa-files-o\"><i class=\"fa fa-files-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-floppy-o\"><i class=\"fa fa-floppy-o\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"font|text\">
\t\t\t\t\t\t\t<a href=\"#fa-font\"><i class=\"fa fa-font\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"header\">
\t\t\t\t\t\t\t<a href=\"#fa-header\"><i class=\"fa fa-header\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"indent\">
\t\t\t\t\t\t\t<a href=\"#fa-indent\"><i class=\"fa fa-indent\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"italic|italics\">
\t\t\t\t\t\t\t<a href=\"#fa-italic\"><i class=\"fa fa-italic\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"link|chain|chain\">
\t\t\t\t\t\t\t<a href=\"#fa-link\"><i class=\"fa fa-link\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"list|ul|ol|checklist|finished|completed|done|todo\">
\t\t\t\t\t\t\t<a href=\"#fa-list\"><i class=\"fa fa-list\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"list-alt|ul|ol|checklist|finished|completed|done|todo\">
\t\t\t\t\t\t\t<a href=\"#fa-list-alt\"><i class=\"fa fa-list-alt\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"list-ol|ul|ol|checklist|list|todo|list|numbers\">
\t\t\t\t\t\t\t<a href=\"#fa-list-ol\"><i class=\"fa fa-list-ol\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"list-ul|ul|ol|checklist|todo|list\">
\t\t\t\t\t\t\t<a href=\"#fa-list-ul\"><i class=\"fa fa-list-ul\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"outdent|dedent\">
\t\t\t\t\t\t\t<a href=\"#fa-outdent\"><i class=\"fa fa-outdent\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"paperclip|attachment\">
\t\t\t\t\t\t\t<a href=\"#fa-paperclip\"><i class=\"fa fa-paperclip\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"paragraph\">
\t\t\t\t\t\t\t<a href=\"#fa-paragraph\"><i class=\"fa fa-paragraph\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-clipboard\"><i class=\"fa fa-paste\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"repeat|rotate-right|redo|forward\">
\t\t\t\t\t\t\t<a href=\"#fa-repeat\"><i class=\"fa fa-repeat\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"undo|rotate-left|back\">
\t\t\t\t\t\t\t<a href=\"#fa-undo\"><i class=\"fa fa-rotate-left\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-repeat\"><i class=\"fa fa-rotate-right\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"floppy-o|save\">
\t\t\t\t\t\t\t<a href=\"#fa-floppy-o\"><i class=\"fa fa-save\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"scissors|cut\">
\t\t\t\t\t\t\t<a href=\"#fa-scissors\"><i class=\"fa fa-scissors\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"strikethrough\">
\t\t\t\t\t\t\t<a href=\"#fa-strikethrough\"><i class=\"fa fa-strikethrough\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"subscript\">
\t\t\t\t\t\t\t<a href=\"#fa-subscript\"><i class=\"fa fa-subscript\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"superscript|exponential\">
\t\t\t\t\t\t\t<a href=\"#fa-superscript\"><i class=\"fa fa-superscript\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"table|data|excel|spreadsheet\">
\t\t\t\t\t\t\t<a href=\"#fa-table\"><i class=\"fa fa-table\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"text-height\">
\t\t\t\t\t\t\t<a href=\"#fa-text-height\"><i class=\"fa fa-text-height\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"text-width\">
\t\t\t\t\t\t\t<a href=\"#fa-text-width\"><i class=\"fa fa-text-width\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"th|blocks|squares|boxes\">
\t\t\t\t\t\t\t<a href=\"#fa-th\"><i class=\"fa fa-th\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"th-large|blocks|squares|boxes\">
\t\t\t\t\t\t\t<a href=\"#fa-th-large\"><i class=\"fa fa-th-large\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"th-list|ul|ol|checklist|finished|completed|done|todo\">
\t\t\t\t\t\t\t<a href=\"#fa-th-list\"><i class=\"fa fa-th-list\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"underline\">
\t\t\t\t\t\t\t<a href=\"#fa-underline\"><i class=\"fa fa-underline\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-undo\"><i class=\"fa fa-undo\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-chain-broken\"><i class=\"fa fa-unlink\"></i></a></div>

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"icon-list\">

\t\t\t\t\t\t<p id=\"cat-directional\" class=\"filter-icon\">";
        // line 2059
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_DIRECTIONAL");
        echo "</p>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"angle-double-down\">
\t\t\t\t\t\t\t<a href=\"#fa-angle-double-down\"><i class=\"fa fa-angle-double-down\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"angle-double-left|laquo|quote|previous|back\">
\t\t\t\t\t\t\t<a href=\"#fa-angle-double-left\"><i class=\"fa fa-angle-double-left\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"angle-double-right|raquo|quote|next|forward\">
\t\t\t\t\t\t\t<a href=\"#fa-angle-double-right\"><i class=\"fa fa-angle-double-right\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"angle-double-up\">
\t\t\t\t\t\t\t<a href=\"#fa-angle-double-up\"><i class=\"fa fa-angle-double-up\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"angle-down\">
\t\t\t\t\t\t\t<a href=\"#fa-angle-down\"><i class=\"fa fa-angle-down\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"angle-left|previous|back\">
\t\t\t\t\t\t\t<a href=\"#fa-angle-left\"><i class=\"fa fa-angle-left\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"angle-right|next|forward\">
\t\t\t\t\t\t\t<a href=\"#fa-angle-right\"><i class=\"fa fa-angle-right\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"angle-up\">
\t\t\t\t\t\t\t<a href=\"#fa-angle-up\"><i class=\"fa fa-angle-up\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"arrow-circle-down|download\">
\t\t\t\t\t\t\t<a href=\"#fa-arrow-circle-down\"><i class=\"fa fa-arrow-circle-down\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"arrow-circle-left|previous|back\">
\t\t\t\t\t\t\t<a href=\"#fa-arrow-circle-left\"><i class=\"fa fa-arrow-circle-left\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"arrow-circle-o-down|download\">
\t\t\t\t\t\t\t<a href=\"#fa-arrow-circle-o-down\"><i class=\"fa fa-arrow-circle-o-down\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"arrow-circle-o-left|previous|back\">
\t\t\t\t\t\t\t<a href=\"#fa-arrow-circle-o-left\"><i class=\"fa fa-arrow-circle-o-left\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"arrow-circle-o-right|next|forward\">
\t\t\t\t\t\t\t<a href=\"#fa-arrow-circle-o-right\"><i class=\"fa fa-arrow-circle-o-right\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"arrow-circle-o-up\">
\t\t\t\t\t\t\t<a href=\"#fa-arrow-circle-o-up\"><i class=\"fa fa-arrow-circle-o-up\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"arrow-circle-right|next|forward\">
\t\t\t\t\t\t\t<a href=\"#fa-arrow-circle-right\"><i class=\"fa fa-arrow-circle-right\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"arrow-circle-up\">
\t\t\t\t\t\t\t<a href=\"#fa-arrow-circle-up\"><i class=\"fa fa-arrow-circle-up\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"arrow-down|download\">
\t\t\t\t\t\t\t<a href=\"#fa-arrow-down\"><i class=\"fa fa-arrow-down\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"arrow-left|previous|back\">
\t\t\t\t\t\t\t<a href=\"#fa-arrow-left\"><i class=\"fa fa-arrow-left\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"arrow-right|next|forward\">
\t\t\t\t\t\t\t<a href=\"#fa-arrow-right\"><i class=\"fa fa-arrow-right\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"arrow-up\">
\t\t\t\t\t\t\t<a href=\"#fa-arrow-up\"><i class=\"fa fa-arrow-up\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"arrows|move|reorder|resize\">
\t\t\t\t\t\t\t<a href=\"#fa-arrows\"><i class=\"fa fa-arrows\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"arrows-alt|expand|enlarge|bigger|move|reorder|resize\">
\t\t\t\t\t\t\t<a href=\"#fa-arrows-alt\"><i class=\"fa fa-arrows-alt\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-arrows-h\"><i class=\"fa fa-arrows-h\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"arrows-v|resize\">
\t\t\t\t\t\t\t<a href=\"#fa-arrows-v\"><i class=\"fa fa-arrows-v\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"caret-down|more|dropdown|menu\">
\t\t\t\t\t\t\t<a href=\"#fa-caret-down\"><i class=\"fa fa-caret-down\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"caret-left|previous|back\">
\t\t\t\t\t\t\t<a href=\"#fa-caret-left\"><i class=\"fa fa-caret-left\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"caret-right|next|forward\">
\t\t\t\t\t\t\t<a href=\"#fa-caret-right\"><i class=\"fa fa-caret-right\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-caret-square-o-down\"><i class=\"fa fa-caret-square-o-down\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"caret-square-o-left|toggle-left|previous|back\">
\t\t\t\t\t\t\t<a href=\"#fa-caret-square-o-left\"><i class=\"fa fa-caret-square-o-left\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"caret-square-o-right|toggle-right|next|forward\">
\t\t\t\t\t\t\t<a href=\"#fa-caret-square-o-right\"><i class=\"fa fa-caret-square-o-right\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-caret-square-o-up\"><i class=\"fa fa-caret-square-o-up\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"caret-up\">
\t\t\t\t\t\t\t<a href=\"#fa-caret-up\"><i class=\"fa fa-caret-up\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"chevron-circle-down|more|dropdown|menu\">
\t\t\t\t\t\t\t<a href=\"#fa-chevron-circle-down\"><i class=\"fa fa-chevron-circle-down\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"chevron-circle-left|previous|back\">
\t\t\t\t\t\t\t<a href=\"#fa-chevron-circle-left\"><i class=\"fa fa-chevron-circle-left\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"chevron-circle-right|next|forward\">
\t\t\t\t\t\t\t<a href=\"#fa-chevron-circle-right\"><i class=\"fa fa-chevron-circle-right\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"chevron-circle-up\">
\t\t\t\t\t\t\t<a href=\"#fa-chevron-circle-up\"><i class=\"fa fa-chevron-circle-up\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"chevron-down\">
\t\t\t\t\t\t\t<a href=\"#fa-chevron-down\"><i class=\"fa fa-chevron-down\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"chevron-left|bracket|previous|back\">
\t\t\t\t\t\t\t<a href=\"#fa-chevron-left\"><i class=\"fa fa-chevron-left\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"chevron-right|bracket|next|forward\">
\t\t\t\t\t\t\t<a href=\"#fa-chevron-right\"><i class=\"fa fa-chevron-right\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"chevron-up\">
\t\t\t\t\t\t\t<a href=\"#fa-chevron-up\"><i class=\"fa fa-chevron-up\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"hand-o-down|point\">
\t\t\t\t\t\t\t<a href=\"#fa-hand-o-down\"><i class=\"fa fa-hand-o-down\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"hand-o-left|point|left|previous|back\">
\t\t\t\t\t\t\t<a href=\"#fa-hand-o-left\"><i class=\"fa fa-hand-o-left\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"hand-o-right|point|right|next|forward\">
\t\t\t\t\t\t\t<a href=\"#fa-hand-o-right\"><i class=\"fa fa-hand-o-right\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"hand-o-up|point\">
\t\t\t\t\t\t\t<a href=\"#fa-hand-o-up\"><i class=\"fa fa-hand-o-up\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"long-arrow-down\">
\t\t\t\t\t\t\t<a href=\"#fa-long-arrow-down\"><i class=\"fa fa-long-arrow-down\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"long-arrow-left|previous|back\">
\t\t\t\t\t\t\t<a href=\"#fa-long-arrow-left\"><i class=\"fa fa-long-arrow-left\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"long-arrow-right\">
\t\t\t\t\t\t\t<a href=\"#fa-long-arrow-right\"><i class=\"fa fa-long-arrow-right\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"long-arrow-up\">
\t\t\t\t\t\t\t<a href=\"#fa-long-arrow-up\"><i class=\"fa fa-long-arrow-up\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-caret-square-o-down\"><i class=\"fa fa-toggle-down\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-caret-square-o-left\"><i class=\"fa fa-toggle-left\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-caret-square-o-right\"><i class=\"fa fa-toggle-right\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-caret-square-o-up\"><i class=\"fa fa-toggle-up\"></i></a></div>

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"icon-list\">

\t\t\t\t\t\t<p id=\"cat-video-player\" class=\"filter-icon\">";
        // line 2259
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_VIDEO_PLAYER");
        echo "</p>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-arrows-alt\"><i class=\"fa fa-arrows-alt\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"backward|rewind|previous\">
\t\t\t\t\t\t\t<a href=\"#fa-backward\"><i class=\"fa fa-backward\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"compress|combine|merge|smaller\">
\t\t\t\t\t\t\t<a href=\"#fa-compress\"><i class=\"fa fa-compress\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"eject\">
\t\t\t\t\t\t\t<a href=\"#fa-eject\"><i class=\"fa fa-eject\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"expand|enlarge|bigger|resize\">
\t\t\t\t\t\t\t<a href=\"#fa-expand\"><i class=\"fa fa-expand\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"fast-backward|rewind|previous|beginning|start|first\">
\t\t\t\t\t\t\t<a href=\"#fa-fast-backward\"><i class=\"fa fa-fast-backward\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"fast-forward|next|end|last\">
\t\t\t\t\t\t\t<a href=\"#fa-fast-forward\"><i class=\"fa fa-fast-forward\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"forward|forward|next\">
\t\t\t\t\t\t\t<a href=\"#fa-forward\"><i class=\"fa fa-forward\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"pause|wait\">
\t\t\t\t\t\t\t<a href=\"#fa-pause\"><i class=\"fa fa-pause\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"play|start|playing|music|sound\">
\t\t\t\t\t\t\t<a href=\"#fa-play\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"play-circle|start|playing\">
\t\t\t\t\t\t\t<a href=\"#fa-play-circle\"><i class=\"fa fa-play-circle\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"play-circle-o\">
\t\t\t\t\t\t\t<a href=\"#fa-play-circle-o\"><i class=\"fa fa-play-circle-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"step-backward|rewind|previous|beginning|start|first\">
\t\t\t\t\t\t\t<a href=\"#fa-step-backward\"><i class=\"fa fa-step-backward\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"step-forward|next|end|last\">
\t\t\t\t\t\t\t<a href=\"#fa-step-forward\"><i class=\"fa fa-step-forward\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"stop|block|box|square\">
\t\t\t\t\t\t\t<a href=\"#fa-stop\"><i class=\"fa fa-stop\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-youtube-play\"><i class=\"fa fa-youtube-play\"></i></a></div>

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"icon-list\">

\t\t\t\t\t\t<p id=\"cat-brand\" class=\"filter-icon\">";
        // line 2325
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_BRAND");
        echo "</p>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"500px\">
\t\t\t\t\t\t\t<a href=\"#fa-500px\"><i class=\"fa fa-500px\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"adn\">
\t\t\t\t\t\t\t<a href=\"#fa-adn\"><i class=\"fa fa-adn\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"amazon\">
\t\t\t\t\t\t\t<a href=\"#fa-amazon\"><i class=\"fa fa-amazon\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"android\">
\t\t\t\t\t\t\t<a href=\"#fa-android\"><i class=\"fa fa-android\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"angellist\">
\t\t\t\t\t\t\t<a href=\"#fa-angellist\"><i class=\"fa fa-angellist\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"apple|osx\">
\t\t\t\t\t\t\t<a href=\"#fa-apple\"><i class=\"fa fa-apple\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"behance\">
\t\t\t\t\t\t\t<a href=\"#fa-behance\"><i class=\"fa fa-behance\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"behance-square\">
\t\t\t\t\t\t\t<a href=\"#fa-behance-square\"><i class=\"fa fa-behance-square\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"bitbucket|git\">
\t\t\t\t\t\t\t<a href=\"#fa-bitbucket\"><i class=\"fa fa-bitbucket\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"bitbucket-square|git\">
\t\t\t\t\t\t\t<a href=\"#fa-bitbucket-square\"><i class=\"fa fa-bitbucket-square\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-btc\"><i class=\"fa fa-bitcoin\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"black-tie\">
\t\t\t\t\t\t\t<a href=\"#fa-black-tie\"><i class=\"fa fa-black-tie\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"btc|bitcoin\">
\t\t\t\t\t\t\t<a href=\"#fa-btc\"><i class=\"fa fa-btc\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"buysellads\">
\t\t\t\t\t\t\t<a href=\"#fa-buysellads\"><i class=\"fa fa-buysellads\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"cc-amex\">
\t\t\t\t\t\t\t<a href=\"#fa-cc-amex\"><i class=\"fa fa-cc-amex\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-cc-discover\"><i class=\"fa fa-cc-discover\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"cc-mastercard\">
\t\t\t\t\t\t\t<a href=\"#fa-cc-mastercard\"><i class=\"fa fa-cc-mastercard\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"cc-paypal\">
\t\t\t\t\t\t\t<a href=\"#fa-cc-paypal\"><i class=\"fa fa-cc-paypal\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"cc-stripe\">
\t\t\t\t\t\t\t<a href=\"#fa-cc-stripe\"><i class=\"fa fa-cc-stripe\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-cc-visa\"><i class=\"fa fa-cc-visa\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"chrome\">
\t\t\t\t\t\t\t<a href=\"#fa-chrome\"><i class=\"fa fa-chrome\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"codepen\">
\t\t\t\t\t\t\t<a href=\"#fa-codepen\"><i class=\"fa fa-codepen\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"connectdevelop\">
\t\t\t\t\t\t\t<a href=\"#fa-connectdevelop\"><i class=\"fa fa-connectdevelop\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"contao\">
\t\t\t\t\t\t\t<a href=\"#fa-contao\"><i class=\"fa fa-contao\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"css3|code\">
\t\t\t\t\t\t\t<a href=\"#fa-css3\"><i class=\"fa fa-css3\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"dashcube\">
\t\t\t\t\t\t\t<a href=\"#fa-dashcube\"><i class=\"fa fa-dashcube\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"delicious\">
\t\t\t\t\t\t\t<a href=\"#fa-delicious\"><i class=\"fa fa-delicious\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"deviantart\">
\t\t\t\t\t\t\t<a href=\"#fa-deviantart\"><i class=\"fa fa-deviantart\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"digg\">
\t\t\t\t\t\t\t<a href=\"#fa-digg\"><i class=\"fa fa-digg\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"dribbble\">
\t\t\t\t\t\t\t<a href=\"#fa-dribbble\"><i class=\"fa fa-dribbble\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"dropbox\">
\t\t\t\t\t\t\t<a href=\"#fa-dropbox\"><i class=\"fa fa-dropbox\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"drupal\">
\t\t\t\t\t\t\t<a href=\"#fa-drupal\"><i class=\"fa fa-drupal\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"empire|ge\">
\t\t\t\t\t\t\t<a href=\"#fa-empire\"><i class=\"fa fa-empire\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"envira\">
\t\t\t\t\t\t\t<a href=\"#fa-envira\"><i class=\"fa fa-envira\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"expeditedssl\">
\t\t\t\t\t\t\t<a href=\"#fa-expeditedssl\"><i class=\"fa fa-expeditedssl\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"facebook|facebook-f|social network\">
\t\t\t\t\t\t\t<a href=\"#fa-facebook\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-facebook\"><i class=\"fa fa-facebook-f\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"facebook-official\">
\t\t\t\t\t\t\t<a href=\"#fa-facebook-official\"><i class=\"fa fa-facebook-official\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"facebook-square|social network\">
\t\t\t\t\t\t\t<a href=\"#fa-facebook-square\"><i class=\"fa fa-facebook-square\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"firefox\">
\t\t\t\t\t\t\t<a href=\"#fa-firefox\"><i class=\"fa fa-firefox\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"first-order\">
\t\t\t\t\t\t\t<a href=\"#fa-first-order\"><i class=\"fa fa-first-order\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"flickr\">
\t\t\t\t\t\t\t<a href=\"#fa-flickr\"><i class=\"fa fa-flickr\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"font|awesome\">
\t\t\t\t\t\t\t<a href=\"#fa-font-awesome\"><i class=\"fa fa-font-awesome\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"fonticons\">
\t\t\t\t\t\t\t<a href=\"#fa-fonticons\"><i class=\"fa fa-fonticons\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"forumbee\">
\t\t\t\t\t\t\t<a href=\"#fa-forumbee\"><i class=\"fa fa-forumbee\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"foursquare\">
\t\t\t\t\t\t\t<a href=\"#fa-foursquare\"><i class=\"fa fa-foursquare\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-empire\"><i class=\"fa fa-ge\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"get-pocket\">
\t\t\t\t\t\t\t<a href=\"#fa-get-pocket\"><i class=\"fa fa-get-pocket\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"gg\">
\t\t\t\t\t\t\t<a href=\"#fa-gg\"><i class=\"fa fa-gg\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"gg-circle\">
\t\t\t\t\t\t\t<a href=\"#fa-gg-circle\"><i class=\"fa fa-gg-circle\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"git\">
\t\t\t\t\t\t\t<a href=\"#fa-git\"><i class=\"fa fa-git\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"git-square\">
\t\t\t\t\t\t\t<a href=\"#fa-git-square\"><i class=\"fa fa-git-square\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"github|octocat\">
\t\t\t\t\t\t\t<a href=\"#fa-github\"><i class=\"fa fa-github\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"github-alt|octocat\">
\t\t\t\t\t\t\t<a href=\"#fa-github-alt\"><i class=\"fa fa-github-alt\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"github-square|octocat\">
\t\t\t\t\t\t\t<a href=\"#fa-github-square\"><i class=\"fa fa-github-square\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"gitlab\">
\t\t\t\t\t\t\t<a href=\"#fa-gitlab\"><i class=\"fa fa-gitlab\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"glide\">
\t\t\t\t\t\t\t<a href=\"#fa-glide\"><i class=\"fa fa-glide\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"glide-g\">
\t\t\t\t\t\t\t<a href=\"#fa-glide-g\"><i class=\"fa fa-glide-g\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-gratipay\"><i class=\"fa fa-gittip\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"google\">
\t\t\t\t\t\t\t<a href=\"#fa-google\"><i class=\"fa fa-google\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"google-plus|social network\">
\t\t\t\t\t\t\t<a href=\"#fa-google-plus\"><i class=\"fa fa-google-plus\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"google-plus-official|social network\">
\t\t\t\t\t\t\t<a href=\"#fa-google-plus-official\"><i class=\"fa fa-google-plus-official\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"google-plus-square|social network\">
\t\t\t\t\t\t\t<a href=\"#fa-google-plus-square\"><i class=\"fa fa-google-plus-square\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"google-wallet\">
\t\t\t\t\t\t\t<a href=\"#fa-google-wallet\"><i class=\"fa fa-google-wallet\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"gratipay|gittip|heart|like|favorite|love\">
\t\t\t\t\t\t\t<a href=\"#fa-gratipay\"><i class=\"fa fa-gratipay\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"hacker-news\">
\t\t\t\t\t\t\t<a href=\"#fa-hacker-news\"><i class=\"fa fa-hacker-news\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"houzz\">
\t\t\t\t\t\t\t<a href=\"#fa-houzz\"><i class=\"fa fa-houzz\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"html5\">
\t\t\t\t\t\t\t<a href=\"#fa-html5\"><i class=\"fa fa-html5\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"instagram\">
\t\t\t\t\t\t\t<a href=\"#fa-instagram\"><i class=\"fa fa-instagram\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"instagram\">
\t\t\t\t\t\t\t<a href=\"#fa-instagram\"><i class=\"fa fa-instagram\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"internet-explorer\">
\t\t\t\t\t\t\t<a href=\"#fa-internet-explorer\"><i class=\"fa fa-internet-explorer\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"ioxhost\">
\t\t\t\t\t\t\t<a href=\"#fa-ioxhost\"><i class=\"fa fa-ioxhost\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"joomla\">
\t\t\t\t\t\t\t<a href=\"#fa-joomla\"><i class=\"fa fa-joomla\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"jsfiddle\">
\t\t\t\t\t\t\t<a href=\"#fa-jsfiddle\"><i class=\"fa fa-jsfiddle\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"lastfm\">
\t\t\t\t\t\t\t<a href=\"#fa-lastfm\"><i class=\"fa fa-lastfm\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"lastfm-square\">
\t\t\t\t\t\t\t<a href=\"#fa-lastfm-square\"><i class=\"fa fa-lastfm-square\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"leanpub\">
\t\t\t\t\t\t\t<a href=\"#fa-leanpub\"><i class=\"fa fa-leanpub\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"linkedin\">
\t\t\t\t\t\t\t<a href=\"#fa-linkedin\"><i class=\"fa fa-linkedin\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"linkedin-square\">
\t\t\t\t\t\t\t<a href=\"#fa-linkedin-square\"><i class=\"fa fa-linkedin-square\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"linux|tux\">
\t\t\t\t\t\t\t<a href=\"#fa-linux\"><i class=\"fa fa-linux\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"maxcdn\">
\t\t\t\t\t\t\t<a href=\"#fa-maxcdn\"><i class=\"fa fa-maxcdn\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"meanpath\">
\t\t\t\t\t\t\t<a href=\"#fa-meanpath\"><i class=\"fa fa-meanpath\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"medium\">
\t\t\t\t\t\t\t<a href=\"#fa-medium\"><i class=\"fa fa-medium\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"odnoklassniki\">
\t\t\t\t\t\t\t<a href=\"#fa-odnoklassniki\"><i class=\"fa fa-odnoklassniki\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"odnoklassniki-square\">
\t\t\t\t\t\t\t<a href=\"#fa-odnoklassniki-square\"><i class=\"fa fa-odnoklassniki-square\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"opencart\">
\t\t\t\t\t\t\t<a href=\"#fa-opencart\"><i class=\"fa fa-opencart\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"openid\">
\t\t\t\t\t\t\t<a href=\"#fa-openid\"><i class=\"fa fa-openid\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"opera\">
\t\t\t\t\t\t\t<a href=\"#fa-opera\"><i class=\"fa fa-opera\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"optin-monster\">
\t\t\t\t\t\t\t<a href=\"#fa-optin-monster\"><i class=\"fa fa-optin-monster\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"pagelines|leaf|leaves|tree|plant|eco|nature\">
\t\t\t\t\t\t\t<a href=\"#fa-pagelines\"><i class=\"fa fa-pagelines\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-paypal\"><i class=\"fa fa-paypal\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"pied-piper\">
\t\t\t\t\t\t\t<a href=\"#fa-pied-piper\"><i class=\"fa fa-pied-piper\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"pied-piper-alt\">
\t\t\t\t\t\t\t<a href=\"#fa-pied-piper-alt\"><i class=\"fa fa-pied-piper-alt\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"pinterest\">
\t\t\t\t\t\t\t<a href=\"#fa-pinterest\"><i class=\"fa fa-pinterest\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"pinterest-p\">
\t\t\t\t\t\t\t<a href=\"#fa-pinterest-p\"><i class=\"fa fa-pinterest-p\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"pinterest-square\">
\t\t\t\t\t\t\t<a href=\"#fa-pinterest-square\"><i class=\"fa fa-pinterest-square\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"qq\">
\t\t\t\t\t\t\t<a href=\"#fa-qq\"><i class=\"fa fa-qq\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-rebel\"><i class=\"fa fa-ra\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"rebel|ra\">
\t\t\t\t\t\t\t<a href=\"#fa-rebel\"><i class=\"fa fa-rebel\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"reddit\">
\t\t\t\t\t\t\t<a href=\"#fa-reddit\"><i class=\"fa fa-reddit\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"reddit-square\">
\t\t\t\t\t\t\t<a href=\"#fa-reddit-square\"><i class=\"fa fa-reddit-square\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"renren\">
\t\t\t\t\t\t\t<a href=\"#fa-renren\"><i class=\"fa fa-renren\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"safari\">
\t\t\t\t\t\t\t<a href=\"#fa-safari\"><i class=\"fa fa-safari\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"sellsy\">
\t\t\t\t\t\t\t<a href=\"#fa-sellsy\"><i class=\"fa fa-sellsy\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"share-alt\">
\t\t\t\t\t\t\t<a href=\"#fa-share-alt\"><i class=\"fa fa-share-alt\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"share-alt-square\">
\t\t\t\t\t\t\t<a href=\"#fa-share-alt-square\"><i class=\"fa fa-share-alt-square\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"shirtsinbulk\">
\t\t\t\t\t\t\t<a href=\"#fa-shirtsinbulk\"><i class=\"fa fa-shirtsinbulk\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"simplybuilt\">
\t\t\t\t\t\t\t<a href=\"#fa-simplybuilt\"><i class=\"fa fa-simplybuilt\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"skyatlas\">
\t\t\t\t\t\t\t<a href=\"#fa-skyatlas\"><i class=\"fa fa-skyatlas\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"skype\">
\t\t\t\t\t\t\t<a href=\"#fa-skype\"><i class=\"fa fa-skype\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"slack\">
\t\t\t\t\t\t\t<a href=\"#fa-slack\"><i class=\"fa fa-slack\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"slideshare\">
\t\t\t\t\t\t\t<a href=\"#fa-slideshare\"><i class=\"fa fa-slideshare\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"snapchat\">
\t\t\t\t\t\t\t<a href=\"#fa-snapchat\"><i class=\"fa fa-snapchat\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"snapchat-ghost\">
\t\t\t\t\t\t\t<a href=\"#fa-snapchat-ghost\"><i class=\"fa fa-snapchat-ghost\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"snapchat-square\">
\t\t\t\t\t\t\t<a href=\"#fa-snapchat-square\"><i class=\"fa fa-snapchat-square\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"soundcloud\">
\t\t\t\t\t\t\t<a href=\"#fa-soundcloud\"><i class=\"fa fa-soundcloud\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"spotify\">
\t\t\t\t\t\t\t<a href=\"#fa-spotify\"><i class=\"fa fa-spotify\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"stack-exchange\">
\t\t\t\t\t\t\t<a href=\"#fa-stack-exchange\"><i class=\"fa fa-stack-exchange\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"stack-overflow\">
\t\t\t\t\t\t\t<a href=\"#fa-stack-overflow\"><i class=\"fa fa-stack-overflow\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"steam\">
\t\t\t\t\t\t\t<a href=\"#fa-steam\"><i class=\"fa fa-steam\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"steam-square\">
\t\t\t\t\t\t\t<a href=\"#fa-steam-square\"><i class=\"fa fa-steam-square\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"stumbleupon\">
\t\t\t\t\t\t\t<a href=\"#fa-stumbleupon\"><i class=\"fa fa-stumbleupon\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"stumbleupon-circle\">
\t\t\t\t\t\t\t<a href=\"#fa-stumbleupon-circle\"><i class=\"fa fa-stumbleupon-circle\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"tencent-weibo\">
\t\t\t\t\t\t\t<a href=\"#fa-tencent-weibo\"><i class=\"fa fa-tencent-weibo\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"themeisle\">
\t\t\t\t\t\t\t<a href=\"#fa-themeisle\"><i class=\"fa fa-themeisle\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"trello\">
\t\t\t\t\t\t\t<a href=\"#fa-trello\"><i class=\"fa fa-trello\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"tripadvisor\">
\t\t\t\t\t\t\t<a href=\"#fa-tripadvisor\"><i class=\"fa fa-tripadvisor\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"tumblr\">
\t\t\t\t\t\t\t<a href=\"#fa-tumblr\"><i class=\"fa fa-tumblr\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"tumblr-square\">
\t\t\t\t\t\t\t<a href=\"#fa-tumblr-square\"><i class=\"fa fa-tumblr-square\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"twitch\">
\t\t\t\t\t\t\t<a href=\"#fa-twitch\"><i class=\"fa fa-twitch\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"twitter|tweet|social network\">
\t\t\t\t\t\t\t<a href=\"#fa-twitter\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"twitter-square|tweet|social network\">
\t\t\t\t\t\t\t<a href=\"#fa-twitter-square\"><i class=\"fa fa-twitter-square\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"viacoin\">
\t\t\t\t\t\t\t<a href=\"#fa-viacoin\"><i class=\"fa fa-viacoin\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"viadeo\">
\t\t\t\t\t\t\t<a href=\"#fa-viadeo\"><i class=\"fa fa-viadeo\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"viadeo-square\">
\t\t\t\t\t\t\t<a href=\"#fa-viadeo-square\"><i class=\"fa fa-viadeo-square\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"vimeo\">
\t\t\t\t\t\t\t<a href=\"#fa-vimeo\"><i class=\"fa fa-vimeo\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"vimeo-square\">
\t\t\t\t\t\t\t<a href=\"#fa-vimeo-square\"><i class=\"fa fa-vimeo-square\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"vine\">
\t\t\t\t\t\t\t<a href=\"#fa-vine\"><i class=\"fa fa-vine\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"vk\">
\t\t\t\t\t\t\t<a href=\"#fa-vk\"><i class=\"fa fa-vk\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-weixin\"><i class=\"fa fa-wechat\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"weibo\">
\t\t\t\t\t\t\t<a href=\"#fa-weibo\"><i class=\"fa fa-weibo\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"weixin|wechat\">
\t\t\t\t\t\t\t<a href=\"#fa-weixin\"><i class=\"fa fa-weixin\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"whatsapp\">
\t\t\t\t\t\t\t<a href=\"#fa-whatsapp\"><i class=\"fa fa-whatsapp\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"wikipedia-w\">
\t\t\t\t\t\t\t<a href=\"#fa-wikipedia-w\"><i class=\"fa fa-wikipedia-w\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"windows\">
\t\t\t\t\t\t\t<a href=\"#fa-windows\"><i class=\"fa fa-windows\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"wordpress\">
\t\t\t\t\t\t\t<a href=\"#fa-wordpress\"><i class=\"fa fa-wordpress\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"wpbeginner\">
\t\t\t\t\t\t\t<a href=\"#fa-wpbeginner\"><i class=\"fa fa-wpbeginner\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"wpforms\">
\t\t\t\t\t\t\t<a href=\"#fa-wpforms\"><i class=\"fa fa-wpforms\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"xing\">
\t\t\t\t\t\t\t<a href=\"#fa-xing\"><i class=\"fa fa-xing\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"xing-square\">
\t\t\t\t\t\t\t<a href=\"#fa-xing-square\"><i class=\"fa fa-xing-square\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"y-combinator\">
\t\t\t\t\t\t\t<a href=\"#fa-y-combinator\"><i class=\"fa fa-y-combinator\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"yahoo\">
\t\t\t\t\t\t\t<a href=\"#fa-yahoo\"><i class=\"fa fa-yahoo\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"yelp\">
\t\t\t\t\t\t\t<a href=\"#fa-yelp\"><i class=\"fa fa-yelp\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"yoast\">
\t\t\t\t\t\t\t<a href=\"#fa-yoast\"><i class=\"fa fa-yoast\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"youtube|video|film\">
\t\t\t\t\t\t\t<a href=\"#fa-youtube\"><i class=\"fa fa-youtube\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"youtube-play|start|playing\">
\t\t\t\t\t\t\t<a href=\"#fa-youtube-play\"><i class=\"fa fa-youtube-play\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"youtube-square|video|film\">
\t\t\t\t\t\t\t<a href=\"#fa-youtube-square\"><i class=\"fa fa-youtube-square\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"icon-list\">

\t\t\t\t\t\t<p id=\"cat-medical\" class=\"filter-icon\">";
        // line 2941
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_MEDICAL");
        echo "</p>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-ambulance\"><i class=\"fa fa-ambulance\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"h-square|hospital|hotel\">
\t\t\t\t\t\t\t<a href=\"#fa-h-square\"><i class=\"fa fa-h-square\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-heart\"><i class=\"fa fa-heart\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"heart-o|love|like|favorite\">
\t\t\t\t\t\t\t<a href=\"#fa-heart-o\"><i class=\"fa fa-heart-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"heartbeat|ekg\">
\t\t\t\t\t\t\t<a href=\"#fa-heartbeat\"><i class=\"fa fa-heartbeat\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"hospital-o|building\">
\t\t\t\t\t\t\t<a href=\"#fa-hospital-o\"><i class=\"fa fa-hospital-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"medkit|first aid|firstaid|help|support\">
\t\t\t\t\t\t\t<a href=\"#fa-medkit\"><i class=\"fa fa-medkit\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-plus-square\"><i class=\"fa fa-plus-square\"></i></a></div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"stethoscope\">
\t\t\t\t\t\t\t<a href=\"#fa-stethoscope\"><i class=\"fa fa-stethoscope\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\" data-filter=\"user-md|doctor|profile|medical|nurse\">
\t\t\t\t\t\t\t<a href=\"#fa-user-md\"><i class=\"fa fa-user-md\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-icon\"><a href=\"#fa-wheelchair\"><i class=\"fa fa-wheelchair\"></i></a></div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"clear\"></div>
\t\t\t<div id=\"icons-font-cat-list\" class=\"cats-container\">
\t\t\t\t<a href=\"#cat-web-application\">";
        // line 2984
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_WEB_APPLICATION");
        echo "</a>
\t\t\t\t<a href=\"#cat-accessibility\">";
        // line 2985
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_ACCESSIBILITY");
        echo "</a>
\t\t\t\t<a href=\"#cat-hands\">";
        // line 2986
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_HANDS");
        echo "</a>
\t\t\t\t<a href=\"#cat-transportation\">";
        // line 2987
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_TRANSPORTATION");
        echo "</a>
\t\t\t\t<a href=\"#cat-gender\">";
        // line 2988
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_GENDER");
        echo "</a>
\t\t\t\t<a href=\"#cat-file-type\">";
        // line 2989
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_FILE_TYPE");
        echo "</a>
\t\t\t\t<a href=\"#cat-spinner\">";
        // line 2990
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_SPINNER");
        echo "</a>
\t\t\t\t<a href=\"#cat-form-control\">";
        // line 2991
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_FORM_CONTROL");
        echo "</a>
\t\t\t\t<a href=\"#cat-payment\">";
        // line 2992
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_PAYMENT");
        echo "</a>
\t\t\t\t<a href=\"#cat-chart\">";
        // line 2993
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_CHART");
        echo "</a>
\t\t\t\t<a href=\"#cat-currency\">";
        // line 2994
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_CURRENCY");
        echo "</a>
\t\t\t\t<a href=\"#cat-text-editor\">";
        // line 2995
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_TEXT_EDITOR");
        echo "</a>
\t\t\t\t<a href=\"#cat-directional\">";
        // line 2996
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_DIRECTIONAL");
        echo "</a>
\t\t\t\t<a href=\"#cat-video-player\">";
        // line 2997
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_VIDEO_PLAYER");
        echo "</a>
\t\t\t\t<a href=\"#cat-brand\">";
        // line 2998
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_BRAND");
        echo "</a>
\t\t\t\t<a href=\"#cat-medical\">";
        // line 2999
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_MEDICAL");
        echo "</a>
\t\t\t</div>
\t\t\t<div class=\"clear\"></div>
\t\t\t<div class=\"preview-container\">
\t\t\t\t<div id=\"icon-picker-preview\" class=\"preview\">
\t\t\t\t\t<i class=\"\"></i>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"icon-picker-actions\" class=\"actions-container\">
\t\t\t\t<a href=\"#\" id=\"icon-picker-insert\" class=\"action-btn small\">";
        // line 3008
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_INSERT_UPDATE");
        echo "</a>
\t\t\t\t<a href=\"#\" id=\"icon-picker-none\" class=\"small\">";
        // line 3009
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_ICON");
        echo "</a>
\t\t\t</div>
\t\t\t<div class=\"clear\"></div>
\t\t</div>
\t\t<div id=\"tab-icons-font-settings\" class=\"tab-content\">
\t\t\t<form id=\"icon-customization\">
\t\t\t\t<fieldset class=\"small\">
\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt>";
        // line 3017
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_SIZE");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</dt>
\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t<select id=\"icons-size\" class=\"icons-customize\" name=\"size\">
\t\t\t\t\t\t\t\t<option value=\"\" selected=\"selected\">";
        // line 3020
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_SIZE_DEFAULT");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"fa-lg\">";
        // line 3021
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_SIZE_LARGER");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"fa-2x\">2x</option>
\t\t\t\t\t\t\t\t<option value=\"fa-3x\">3x</option>
\t\t\t\t\t\t\t\t<option value=\"fa-4x\">4x</option>
\t\t\t\t\t\t\t\t<option value=\"fa-5x\">5x</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</dd>
\t\t\t\t\t</dl>
\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt>";
        // line 3030
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_COLOR");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</dt>
\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<span class=\"icons-color-container\" title=\"";
        // line 3034
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_COLOR_DEFAULT");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<span class=\"color\">&nbsp;</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"color\" class=\"icons-customize\" value=\"\" />
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<span class=\"icons-color-container\">
\t\t\t\t\t\t\t\t\t\t<span class=\"color bg-blue\">&nbsp;</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"color\" class=\"icons-customize\" value=\"fa-blue\" />
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<span class=\"icons-color-container\">
\t\t\t\t\t\t\t\t\t\t<span class=\"color bg-red\">&nbsp;</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"color\" class=\"icons-customize\" value=\"fa-red\" />
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<span class=\"icons-color-container\">
\t\t\t\t\t\t\t\t\t\t<span class=\"color bg-green\">&nbsp;</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"color\" class=\"icons-customize\" value=\"fa-green\" />
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<span class=\"icons-color-container\">
\t\t\t\t\t\t\t\t\t\t<span class=\"color bg-gray\">&nbsp;</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"color\" class=\"icons-customize\" value=\"fa-gray\" />
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<span class=\"icons-color-container\">
\t\t\t\t\t\t\t\t\t\t<span class=\"color bg-orange\">&nbsp;</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"color\" class=\"icons-customize\" value=\"fa-orange\" />
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<span class=\"icons-color-container\">
\t\t\t\t\t\t\t\t\t\t<span class=\"color bg-purple\">&nbsp;</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"color\" class=\"icons-customize\" value=\"fa-purple\" />
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</dd>
\t\t\t\t\t</dl>
\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt>";
        // line 3079
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_FLOAT");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</dt>
\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t<label><input type=\"radio\" name=\"float\" class=\"icons-customize\" value=\"\" checked=\"checked\" /> ";
        // line 3081
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NONE");
        echo "</label>
\t\t\t\t\t\t</dd>
\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t<label><input type=\"radio\" name=\"float\" class=\"icons-customize\" value=\"pull-left\" /> ";
        // line 3084
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_FLOAT_LEFT");
        echo "</label>
\t\t\t\t\t\t</dd>
\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t<label><input type=\"radio\" name=\"float\" class=\"icons-customize\" value=\"pull-right\" /> ";
        // line 3087
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_FLOAT_RIGHT");
        echo "</label>
\t\t\t\t\t\t</dd>
\t\t\t\t\t</dl>
\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt>";
        // line 3091
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_MISC");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</dt>
\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"fw\" class=\"icons-customize\" value=\"fa-fw\" /> ";
        // line 3093
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_MISC_FIXED_WIDTH");
        echo "</label>
\t\t\t\t\t\t</dd>
\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"bordered\" class=\"icons-customize\" value=\"fa-border\" /> ";
        // line 3096
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_MISC_BORDERED");
        echo "</label>
\t\t\t\t\t\t</dd>
\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"spinning\" class=\"icons-customize\" value=\"fa-spin\" title=\"";
        // line 3099
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_SPINNING_EXPLAIN");
        echo "\" /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_MISC_SPINNING");
        echo "</label>
\t\t\t\t\t\t</dd>
\t\t\t\t\t</dl>
\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt>";
        // line 3103
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_ROTATION");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</dt>
\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t<label><input type=\"radio\" name=\"rotation\" class=\"icons-customize\" value=\"\" checked=\"checked\" /> ";
        // line 3105
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NONE");
        echo "</label>
\t\t\t\t\t\t</dd>
\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t<label><input type=\"radio\" name=\"rotation\" class=\"icons-customize\" value=\"fa-rotate-90\" /> ";
        // line 3108
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_ROTATION_90_DEG");
        echo "</label>
\t\t\t\t\t\t</dd>
\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t<label><input type=\"radio\" name=\"rotation\" class=\"icons-customize\" value=\"fa-rotate-180\" /> ";
        // line 3111
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_ROTATION_180_DEG");
        echo "</label>
\t\t\t\t\t\t</dd>
\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t<label><input type=\"radio\" name=\"rotation\" class=\"icons-customize\" value=\"fa-rotate-270\" /> ";
        // line 3114
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_ROTATION_270_DEG");
        echo "</label>
\t\t\t\t\t\t</dd>
\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t<label><input type=\"radio\" name=\"rotation\" class=\"icons-customize\" value=\"fa-flip-horizontal\" /> ";
        // line 3117
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_FLIP_HORIZONTAL");
        echo "</label>
\t\t\t\t\t\t</dd>
\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t<label><input type=\"radio\" name=\"rotation\" class=\"icons-customize\" value=\"fa-flip-vertical\" /> ";
        // line 3120
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_FLIP_VERTICAL");
        echo "</label>
\t\t\t\t\t\t</dd>
\t\t\t\t\t</dl>
\t\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t\t";
        // line 3126
        if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "icon", []))) {
            // line 3127
            echo "\t\t<div id=\"tab-icons-image\" class=\"tab-content\">
\t\t\t";
            // line 3128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "icon", []));
            foreach ($context['_seq'] as $context["_key"] => $context["icon"]) {
                // line 3129
                echo "\t\t\t<a href=\"#\"><img src=\"\" alt=\"\" /></a>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 3131
            echo "\t\t</div>
\t\t";
        }
        // line 3133
        echo "\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "icon_picker.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3359 => 3133,  3355 => 3131,  3348 => 3129,  3344 => 3128,  3341 => 3127,  3339 => 3126,  3330 => 3120,  3324 => 3117,  3318 => 3114,  3312 => 3111,  3306 => 3108,  3300 => 3105,  3294 => 3103,  3285 => 3099,  3279 => 3096,  3273 => 3093,  3267 => 3091,  3260 => 3087,  3254 => 3084,  3248 => 3081,  3242 => 3079,  3194 => 3034,  3186 => 3030,  3174 => 3021,  3170 => 3020,  3163 => 3017,  3152 => 3009,  3148 => 3008,  3136 => 2999,  3132 => 2998,  3128 => 2997,  3124 => 2996,  3120 => 2995,  3116 => 2994,  3112 => 2993,  3108 => 2992,  3104 => 2991,  3100 => 2990,  3096 => 2989,  3092 => 2988,  3088 => 2987,  3084 => 2986,  3080 => 2985,  3076 => 2984,  3030 => 2941,  2411 => 2325,  2342 => 2259,  2139 => 2059,  1962 => 1885,  1887 => 1813,  1864 => 1793,  1809 => 1741,  1764 => 1699,  1740 => 1678,  1676 => 1617,  1614 => 1558,  1548 => 1495,  1505 => 1455,  1466 => 1419,  61 => 17,  49 => 7,  43 => 6,  39 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "icon_picker.html", "");
    }
}
