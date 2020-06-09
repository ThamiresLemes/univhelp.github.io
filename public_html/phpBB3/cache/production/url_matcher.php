<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class phpbb_url_matcher extends Symfony\Component\Routing\Matcher\UrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);

        if (0 === strpos($pathinfo, '/feed')) {
            // phpbb_feed_forums
            if ('/feed/forums' === $pathinfo) {
                return array (  '_controller' => 'phpbb.feed.controller:forums',  '_route' => 'phpbb_feed_forums',);
            }

            // phpbb_feed_news
            if ('/feed/news' === $pathinfo) {
                return array (  '_controller' => 'phpbb.feed.controller:news',  '_route' => 'phpbb_feed_news',);
            }

            if (0 === strpos($pathinfo, '/feed/topics')) {
                // phpbb_feed_topics
                if ('/feed/topics' === $pathinfo) {
                    return array (  '_controller' => 'phpbb.feed.controller:topics',  '_route' => 'phpbb_feed_topics',);
                }

                if (0 === strpos($pathinfo, '/feed/topics_')) {
                    // phpbb_feed_topics_active
                    if ('/feed/topics_active' === $pathinfo) {
                        return array (  '_controller' => 'phpbb.feed.controller:topics_active',  '_route' => 'phpbb_feed_topics_active',);
                    }

                    // phpbb_feed_topics_new
                    if ('/feed/topics_new' === $pathinfo) {
                        return array (  '_controller' => 'phpbb.feed.controller:topics_new',  '_route' => 'phpbb_feed_topics_new',);
                    }

                }

            }

            // phpbb_feed_forum
            if (0 === strpos($pathinfo, '/feed/forum') && preg_match('#^/feed/forum/(?P<forum_id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbb_feed_forum')), array (  '_controller' => 'phpbb.feed.controller:forum',));
            }

            // phpbb_feed_topic
            if (0 === strpos($pathinfo, '/feed/topic') && preg_match('#^/feed/topic/(?P<topic_id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbb_feed_topic')), array (  '_controller' => 'phpbb.feed.controller:topic',));
            }

            // phpbb_feed_overall
            if (preg_match('#^/feed/(?P<mode>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbb_feed_overall')), array (  '_controller' => 'phpbb.feed.controller:overall',));
            }

            // phpbb_feed_index
            if ('/feed' === $pathinfo) {
                return array (  '_controller' => 'phpbb.feed.controller:overall',  '_route' => 'phpbb_feed_index',);
            }

        }

        if (0 === strpos($pathinfo, '/help')) {
            // phpbb_help_bbcode_controller
            if ('/help/bbcode' === $pathinfo) {
                return array (  '_controller' => 'phpbb.help.controller.bbcode:handle',  '_route' => 'phpbb_help_bbcode_controller',);
            }

            // phpbb_help_faq_controller
            if ('/help/faq' === $pathinfo) {
                return array (  '_controller' => 'phpbb.help.controller.faq:handle',  '_route' => 'phpbb_help_faq_controller',);
            }

        }

        if (0 === strpos($pathinfo, '/p')) {
            // phpbb_report_pm_controller
            if (0 === strpos($pathinfo, '/pm') && preg_match('#^/pm/(?P<id>\\d+)/report$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_phpbb_report_pm_controller;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbb_report_pm_controller')), array (  '_controller' => 'phpbb.report.controller:handle',  'mode' => 'pm',));
            }
            not_phpbb_report_pm_controller:

            // phpbb_report_post_controller
            if (0 === strpos($pathinfo, '/post') && preg_match('#^/post/(?P<id>\\d+)/report$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_phpbb_report_post_controller;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbb_report_post_controller')), array (  '_controller' => 'phpbb.report.controller:handle',  'mode' => 'post',));
            }
            not_phpbb_report_post_controller:

        }

        // blitze_sitemaker_blocks_admin
        if (0 === strpos($pathinfo, '/blocks') && preg_match('#^/blocks/(?P<action>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blitze_sitemaker_blocks_admin')), array (  '_controller' => 'blitze.sitemaker.blocks.admin.controller:handle',  '_format' => 'json',));
        }

        // blitze_sitemaker_menus_admin
        if (0 === strpos($pathinfo, '/menu/admin') && preg_match('#^/menu/admin(?:/(?P<action>[^/]++))?$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blitze_sitemaker_menus_admin')), array (  '_controller' => 'blitze.sitemaker.menus.admin.controller:handle',  'action' => '',  '_format' => 'json',));
        }

        // blitze_sitemaker_forum
        if ('/forum' === $pathinfo) {
            return array (  '_controller' => 'blitze.sitemaker.forum.controller:handle',  '_route' => 'blitze_sitemaker_forum',);
        }

        // blitze_sitemaker_image_upload
        if ('/sitemaker/upload' === $pathinfo) {
            return array (  '_controller' => 'blitze.sitemaker.upload.controller:handle',  '_route' => 'blitze_sitemaker_image_upload',);
        }

        if (0 === strpos($pathinfo, '/mchat')) {
            // dmzx_mchat_page_custom_controller
            if ('/mchat' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_dmzx_mchat_page_custom_controller;
                }

                return array (  '_controller' => 'dmzx.mchat.core:page_custom',  '_route' => 'dmzx_mchat_page_custom_controller',);
            }
            not_dmzx_mchat_page_custom_controller:

            // dmzx_mchat_page_archive_controller
            if ('/mchat/archive' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_dmzx_mchat_page_archive_controller;
                }

                return array (  '_controller' => 'dmzx.mchat.core:page_archive',  '_route' => 'dmzx_mchat_page_archive_controller',);
            }
            not_dmzx_mchat_page_archive_controller:

            // dmzx_mchat_page_rules_controller
            if ('/mchat/rules' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_dmzx_mchat_page_rules_controller;
                }

                return array (  '_controller' => 'dmzx.mchat.core:page_rules',  '_route' => 'dmzx_mchat_page_rules_controller',);
            }
            not_dmzx_mchat_page_rules_controller:

            // dmzx_mchat_page_whois_controller
            if (0 === strpos($pathinfo, '/mchat/whois') && preg_match('#^/mchat/whois/(?P<ip>[^/]++)$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_dmzx_mchat_page_whois_controller;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dmzx_mchat_page_whois_controller')), array (  '_controller' => 'dmzx.mchat.core:page_whois',));
            }
            not_dmzx_mchat_page_whois_controller:

            if (0 === strpos($pathinfo, '/mchat/action')) {
                // dmzx_mchat_action_add_controller
                if ('/mchat/action/add' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_dmzx_mchat_action_add_controller;
                    }

                    return array (  '_controller' => 'dmzx.mchat.core:action_add',  '_route' => 'dmzx_mchat_action_add_controller',);
                }
                not_dmzx_mchat_action_add_controller:

                // dmzx_mchat_action_edit_controller
                if ('/mchat/action/edit' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_dmzx_mchat_action_edit_controller;
                    }

                    return array (  '_controller' => 'dmzx.mchat.core:action_edit',  '_route' => 'dmzx_mchat_action_edit_controller',);
                }
                not_dmzx_mchat_action_edit_controller:

                // dmzx_mchat_action_del_controller
                if ('/mchat/action/del' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_dmzx_mchat_action_del_controller;
                    }

                    return array (  '_controller' => 'dmzx.mchat.core:action_del',  '_route' => 'dmzx_mchat_action_del_controller',);
                }
                not_dmzx_mchat_action_del_controller:

                // dmzx_mchat_action_refresh_controller
                if ('/mchat/action/refresh' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_dmzx_mchat_action_refresh_controller;
                    }

                    return array (  '_controller' => 'dmzx.mchat.core:action_refresh',  '_route' => 'dmzx_mchat_action_refresh_controller',);
                }
                not_dmzx_mchat_action_refresh_controller:

                // dmzx_mchat_action_whois_controller
                if ('/mchat/action/whois' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_dmzx_mchat_action_whois_controller;
                    }

                    return array (  '_controller' => 'dmzx.mchat.core:action_whois',  '_route' => 'dmzx_mchat_action_whois_controller',);
                }
                not_dmzx_mchat_action_whois_controller:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
