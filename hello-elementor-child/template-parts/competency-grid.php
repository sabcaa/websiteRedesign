<?php
/**
 * Template Part: Competency Grid
 *
 * Displays the 8 Alberta Acupuncture Competencies as a styled card grid.
 * Competency data is hardcoded as it is defined by legislation and unlikely to change.
 * If competencies are updated, edit this file directly.
 *
 * Usage:
 *
 * get_template_part( 'template-parts/competency-grid' );
 *
 * No arguments required.
 */

$competencies = array(
    array(
        'number' => 1,
        'title'  => 'Interpersonal Skills',
        'topics' => array(
            'Patient communication',
            'Therapeutic relationships',
            'Professional boundaries',
            'Communication in acupuncture',
        ),
    ),
    array(
        'number' => 2,
        'title'  => 'Professionalism',
        'topics' => array(
            'Informed consent',
            'Patient privacy and confidentiality',
            'Understanding acupuncture legislation and regulation',
        ),
    ),
    array(
        'number' => 3,
        'title'  => 'Practice Management',
        'topics' => array(
            'Clinical record keeping for acupuncturists',
            'Proper charting',
            'Practice management',
        ),
    ),
    array(
        'number' => 4,
        'title'  => 'Acupuncture Foundations',
        'topics' => array(
            'Five elements',
            'Chinese medical classics',
            'TCM constitution',
            'Qi gong',
            'Gua sha',
            'Advanced channel theory',
        ),
    ),
    array(
        'number' => 5,
        'title'  => 'Fundamentals of Biomedicine',
        'topics' => array(
            'Red flags in acupuncture practice',
            'Acupuncture anatomy',
            'Commonly prescribed and over-the-counter medications',
            'Fundamentals of biomedicine related to a specific category of dysfunctions/diseases',
        ),
    ),
    array(
        'number' => 6,
        'title'  => 'Acupuncture Diagnostics and Treatment',
        'topics' => array(
            'Specialized acupuncture style (e.g. Master Tung, Japanese acupuncture, Five Element)',
            'Acupuncture treatment for a specific category of dysfunctions/diseases',
            'Pulse diagnosis',
            'Tongue diagnosis',
        ),
    ),
    array(
        'number' => 7,
        'title'  => 'Acupuncture Techniques',
        'topics' => array(
            'Moxibustion techniques',
            'Cupping techniques',
            'Tui na techniques',
            'Electro-acupuncture techniques',
            'Blood-letting techniques',
        ),
    ),
    array(
        'number' => 8,
        'title'  => 'Safety',
        'topics' => array(
            'Adverse event management',
            'Infection prevention and control',
            'Safety in acupuncture practice',
        ),
    ),
);
?>

<div class="competency-grid">
    <?php foreach ( $competencies as $competency ) : ?>
        <div class="competency-card">
            <div class="competency-number" aria-hidden="true">
                <?php echo esc_html( $competency['number'] ); ?>
            </div>
            <div class="competency-body">
                <h4 class="competency-title">
                    <?php echo esc_html( $competency['title'] ); ?>
                </h4>
                <ul class="competency-topics">
                    <?php foreach ( $competency['topics'] as $topic ) : ?>
                        <li><?php echo esc_html( $topic ); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    <?php endforeach; ?>
</div>
