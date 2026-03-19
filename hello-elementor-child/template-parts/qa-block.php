<?php
/**
 * Template Part: Q&A Block
 *
 * A styled list of questions and answers.
 * GREEN colour — helpful guidance, FAQs, positive actions.
 * Use for FAQ sections within a page.
 *
 * Usage:
 *
 * get_template_part( 'template-parts/qa-block', null, array(
 *     'items' => array(
 *         array(
 *             'q' => 'How long is a Provisional Registration valid?',
 *             'a' => 'A Provisional Registration is valid for one year.',
 *         ),
 *         array(
 *             'q' => 'Can I practice acupuncture as a Provisional Registrant?',
 *             'a' => 'A Provisional Registrant is able to practice acupuncture, but must do so with a supervisor.',
 *         ),
 *     ),
 * ));
 *
 * The 'a' (answer) value can contain basic HTML like <strong>, <a>, <ul>, <p>.
 */

$items = $args['items'] ?? array();

if ( empty( $items ) ) return;
?>

<div class="qa-list">
    <?php foreach ( $items as $item ) :
        if ( empty( $item['q'] ) ) continue;
    ?>
        <div class="qa-item">
            <div class="qa-question">
                <?php echo esc_html( $item['q'] ); ?>
            </div>
            <div class="qa-answer">
                <?php
                // wp_kses allows safe HTML in answers (links, lists, bold etc)
                echo wp_kses( $item['a'], array(
                    'a'      => array( 'href' => array(), 'target' => array(), 'rel' => array() ),
                    'strong' => array(),
                    'em'     => array(),
                    'p'      => array(),
                    'ul'     => array(),
                    'ol'     => array(),
                    'li'     => array(),
                    'br'     => array(),
                ));
                ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>
