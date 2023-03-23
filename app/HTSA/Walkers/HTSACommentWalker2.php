<?php
/**
 * HTSACommentWalker2 class file.
 *
 * This is file contains HTSACommentWalker2 class for creating comment walker.
 *
 * @package    HighwayTrafficSecurityAgency
 * @author     Chijindu Nzeako <chijindunzeako517@gmail.com>
 * @license    https://www.gnu.org/licenses/agpl-3.0.txt GNU/AGPLv3
 * @link       https://github.com/codestartechnologies/highway-traffic-security-agency
 * @since      1.0.0
 */

namespace HTSA\WTS_Theme\App\HTSA\Walkers;

use Walker_Comment;

/**
 * Prevent direct access to this file.
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Class HTSACommentWalker2
 *
 * This file contains HTSACommentWalker2 class for creating comment walker.
 *
 * @package HighwayTrafficSecurityAgency
 * @author  Chijindu Nzeako <chijindunzeako517@gmail.com>
 */
final class HTSACommentWalker2 extends Walker_Comment
{
    /**
     * Starts the list before the elements are added.
     *
     * @since 2.7.0
     *
     * @see Walker::start_lvl()
     * @global int $comment_depth
     *
     * @param string $output Used to append additional content (passed by reference).
     * @param int    $depth  Optional. Depth of the current comment. Default 0.
     * @param array  $args   Optional. Uses 'style' argument for type of HTML list. Default empty array.
     */
    public function start_lvl( &$output, $depth = 0, $args = array() ) {
        $GLOBALS['comment_depth'] = $depth + 1;

        /* switch ( $args['style'] ) {
            case 'div':
                break;
            case 'ol':
                $output .= '<ol class="children">' . "\n";
                break;
            case 'ul':
            default:
                $output .= '<ul class="children">' . "\n";
                break;
        } */

        $output .= '<div class="comments m-0">' . "\n";
    }

    /**
     * Ends the list of items after the elements are added.
     *
     * @since 2.7.0
     *
     * @see Walker::end_lvl()
     * @global int $comment_depth
     *
     * @param string $output Used to append additional content (passed by reference).
     * @param int    $depth  Optional. Depth of the current comment. Default 0.
     * @param array  $args   Optional. Will only append content if style argument value is 'ol' or 'ul'.
     *                       Default empty array.
     */
    public function end_lvl( &$output, $depth = 0, $args = array() ) {
        $GLOBALS['comment_depth'] = $depth + 1;

        /* switch ( $args['style'] ) {
            case 'div':
                break;
            case 'ol':
                $output .= "</ol><!-- .children -->\n";
                break;
            case 'ul':
            default:
                $output .= "</ul><!-- .children -->\n";
                break;
        } */

        $output .= "</div><!-- .children -->\n";
    }

    /**
     * Ends the element output, if needed.
     *
     * @since 2.7.0
     * @since 5.9.0 Renamed `$comment` to `$data_object` to match parent class for PHP 8 named parameter support.
     *
     * @see Walker::end_el()
     * @see wp_list_comments()
     *
     * @param string     $output      Used to append additional content. Passed by reference.
     * @param WP_Comment $data_object Comment data object.
     * @param int        $depth       Optional. Depth of the current comment. Default 0.
     * @param array      $args        Optional. An array of arguments. Default empty array.
     */
    public function end_el( &$output, $data_object, $depth = 0, $args = array() ) {
        if ( ! empty( $args['end-callback'] ) ) {
            ob_start();
            call_user_func(
                $args['end-callback'],
                $data_object, // The current comment object.
                $args,
                $depth
            );
            $output .= ob_get_clean();
            return;
        }
        /* if ( 'div' === $args['style'] ) {
            $output .= "</div><!-- #comment-## -->\n";
        } else {
            $output .= "</li><!-- #comment-## -->\n";
        } */

        $output .= "</div><!-- #comment-## -->\n";
    }

    /**
     * Outputs a comment in the HTML5 format.
     *
     * @since 3.6.0
     *
     * @see wp_list_comments()
     *
     * @param WP_Comment $comment Comment to display.
     * @param int        $depth   Depth of the current comment.
     * @param array      $args    An array of arguments.
     */
    protected function html5_comment( $comment, $depth, $args ) {
        // $tag = ( 'div' === $args['style'] ) ? 'div' : 'li';
        $tag = 'div';

        $commenter          = wp_get_current_commenter();
        $show_pending_links = ! empty( $commenter['comment_author'] );

        if ( $commenter['comment_author_email'] ) {
            $moderation_note = __( 'Your comment is awaiting moderation.' );
        } else {
            $moderation_note = __( 'Your comment is awaiting moderation. This is a preview; your comment will be visible after it has been approved.' );
        }
        ?>
        <!-- <<?php #echo $tag; ?> id="comment-<?php #comment_ID(); ?>" <?php #comment_class( $this->has_children ? 'parent' : '', $comment ); ?>> -->
        <<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class( array( 'comment', $this->has_children ? 'parent' : '' ), $comment ); ?>>
            <!-- <article id="div-comment-<?php #comment_ID(); ?>" class="comment-body"> -->
            <div class="content ms-0">
                <!-- <footer class="comment-meta"> -->
                    <!-- <div class="comment-author vcard"> -->
                        <?php
                        if ( 0 != $args['avatar_size'] ) {
                            // echo get_avatar( $comment, $args['avatar_size'] );
                        }
                        ?>
                        <?php
                        $comment_author = get_comment_author_link( $comment );

                        if ( '0' == $comment->comment_approved && ! $show_pending_links ) {
                            $comment_author = get_comment_author( $comment );
                        }

                        /* printf(
                            // translators: %s: Comment author link.
                            __( '%s <span class="says">says:</span>' ),
                            sprintf( '<b class="fn">%s</b>', $comment_author )
                        ); */
                        ?>
                        <a class="author text-capitalize"> <?php echo $comment_author; ?> </a>
                    <!-- </div> --><!-- .comment-author -->

                    <!-- <div class="comment-metadata"> -->
                    <div class="metadata">
                        <span class="date"> <?php echo get_comment_date( 'M Y', $comment ); ?> </span>
                        <?php
                        /* printf(
                            '<a href="%s"><time datetime="%s">%s</time></a>',
                            esc_url( get_comment_link( $comment, $args ) ),
                            get_comment_time( 'c' ),
                            sprintf(
                                // translators: 1: Comment date, 2: Comment time.
                                __( '%1$s at %2$s' ),
                                get_comment_date( '', $comment ),
                                get_comment_time()
                            )
                        ); */

                        edit_comment_link( __( 'Edit' ), ' <span class="edit-link">', '</span>' );
                        ?>
                    </div><!-- .comment-metadata -->

                    <?php if ( '0' == $comment->comment_approved ) : ?>
                    <em class="comment-awaiting-moderation"><?php echo $moderation_note; ?></em>
                    <?php endif; ?>
                <!-- </footer> --><!-- .comment-meta -->

                <!-- <div class="comment-content"> -->
                <div class="text">
                    <?php comment_text(); ?>
                </div><!-- .comment-content -->

                <?php
                if ( '1' == $comment->comment_approved || $show_pending_links ) {
                    comment_reply_link(
                        array_merge(
                            $args,
                            array(
                                'add_below' => 'div-comment',
                                'depth'     => $depth,
                                'max_depth' => $args['max_depth'],
                                // 'before'    => '<div class="reply">',
                                // 'after'     => '</div>',
                                'before'    => '<div class="actions">',
                                'after'     => '</div>',
                            )
                        )
                    );
                }
                ?>
            </div>
            <!-- </article> --><!-- .comment-body -->
        <?php
    }
}