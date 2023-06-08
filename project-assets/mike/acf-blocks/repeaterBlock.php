<?php


if (have_rows('missioon_repeater')):
    while (have_rows('missioon_repeater')): the_row();
        $mission_name = get_sub_field('missiooni_nimi');
        $mission_cost = get_sub_field('missiooni_maksumus');
        $mission_start_date = get_sub_field('missiooni_alguskuupäev');
        $mission_duration = get_sub_field('missiooni_kestus');
        $mission_description = get_sub_field('missiooni_kirjeldus');
        $mission_images = get_sub_field('pildid_missioonist');
        

        if ($mission_name && $mission_cost && $mission_start_date && $mission_duration && $mission_description) {

            echo '<h2>' . the_field($mission_name) . '</h2>';
            echo '<p>Maksumus: ' . the_field($mission_cost) . '</p>';
            echo '<p>Alguskuupäev: ' . the_field($mission_start_date) . '</p>';
            echo '<p>Kestus: ' . the_field($mission_duration) . '</p>';
            echo '<p>Kirjeldus: ' . the_field($mission_description) . '</p>';
            
            if ($mission_images):
                echo '<h3>Pildid missioonist</h3>';
                echo '<div class="mission-images">';
                foreach ($mission_images as $image):
                    echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
                endforeach;
                echo '</div>';
            endif;
        } else {
            echo '<p style="color:white;">Missiooni andmed on puudulikud.</p>';
        }
    endwhile;
else:
    echo '<p style="color:white;">Missiooni andmeid ei leitud.</p>';
endif;
?>