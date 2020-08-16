<?php
defined('ABSPATH') or die;

class NpGetBlogPostsAction extends NpAction {

    /**
     * Process action entrypoint
     *
     * @return array
     */
    public static function process() {
        $source = _arr($_REQUEST, 'category', array());

        if (preg_match('/^tags:/', $source)) {
            $tags = str_replace('tags:', '', $source);
            $blog = array(
                'tags' => $tags,
                'id' => null,
                'posts' => array(),
            );
            $blog['posts'] = NpAdminActions::getBlogPosts($source);
        } else {
            $blog = array(
                'category' => $source,
                'id' => -1,
                'posts' => array(),
            );
            if ($source) {
                $cat_id = get_cat_ID($source);
                if ($cat_id > 0) {
                    $posts = NpAdminActions::getBlogPosts($source);
                    $blog['id'] = $cat_id;
                    $blog['posts'] = $posts;
                }
            }
        }
        return array(
            'result' => 'done',
            'blog' => $blog,
        );
    }
}
NpAction::add('np_get_blog_posts', 'NpGetBlogPostsAction');