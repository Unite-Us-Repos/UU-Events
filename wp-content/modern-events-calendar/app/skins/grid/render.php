<?php
/** no direct access **/
defined('MECEXEC') or die();

/** @var MEC_skin_grid $this */

$styling = $this->main->get_styling();
$event_colorskin = (isset($styling['mec_colorskin'] ) || isset($styling['color'])) ? 'colorskin-custom' : '';
$settings = $this->main->get_settings();
$display_label = isset($this->skin_options['display_label']) ? $this->skin_options['display_label'] : false;
$reason_for_cancellation = isset($this->skin_options['reason_for_cancellation']) ? $this->skin_options['reason_for_cancellation'] : false;

// colorful
$colorful_flag = $colorful_class = '';
if($this->style == 'colorful')
{
        $colorful_flag = true;
        $this->style = 'modern';
        $colorful_class = ' mec-event-grid-colorful';
}
?>

        <?php

        $count      = $this->count;
        $grid_limit = $this->limit;

        if($count == 0 or $count == 5) $col = 4;
        else $col = 12 / $count;


        foreach($this->events as $date):
        foreach($date as $event):



        echo '<div class="relative group bg-white border border-light shadow-lg rounded-lg overflow-hidden">';

        $location_id = $this->main->get_master_location_id($event);
        $location = ($location_id ? $this->main->get_location_data($location_id) : array());
        $organizer_id = $this->main->get_master_organizer_id($event);
        $organizer = ($organizer_id ? $this->main->get_organizer_data($organizer_id) : array());
        $event_color = $this->get_event_color_dot($event);
        $start_time = (isset($event->data->time) ? $event->data->time['start'] : '');
        $end_time = (isset($event->data->time) ? $event->data->time['end'] : '');
        $event_start_date = !empty($event->date['start']['date']) ? $event->date['start']['date'] : '';
        $mec_data = $this->display_custom_data($event);
        $custom_data_class = !empty($mec_data) ? 'mec-custom-data' : '';

        // colorful
                $colorful_bg_color = ($colorful_flag && isset($event->data->meta['mec_color'])) ? ' style="background: #' . esc_attr($event->data->meta['mec_color']) . '"' : '';

        // MEC Schema
        do_action('mec_schema', $event);

        echo '<article class="relative'.((isset($event->data->meta['event_past']) and trim($event->data->meta['event_past'])) ? 'mec-past-event' : '').' mec-event-article mec-clear ' . esc_attr($custom_data_class) . ' '.esc_attr($this->get_event_classes($event)).'"' . $colorful_bg_color . ' itemscope>';
        ?>
                       <?php $location_icon = '<svg width="14" height="17" viewBox="0 0 14 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M11.7634 2.05025C14.3604 4.78392 14.3604 9.21608 11.7634 11.9497L7.06113 16.8995L2.35887 11.9497C-0.238114 9.21608 -0.238114 4.78392 2.35887 2.05025C4.95586 -0.683417 9.16641 -0.683418 11.7634 2.05025ZM7.06148 8.99996C8.11082 8.99996 8.96148 8.10453 8.96148 6.99996C8.96148 5.89539 8.11082 4.99996 7.06148 4.99996C6.01214 4.99996 5.16148 5.89539 5.16148 6.99996C5.16148 8.10453 6.01214 8.99996 7.06148 8.99996Z" fill="#216CFF"/>
</svg>
'; ?>
            <div class="p-2"></div>
            <div class="absolute w-full top-0 p-2 bg-action rounded-t-lg z-20"></div>
            <?php if ($event->data->thumbnails['large']) :?>
            <?php echo str_replace('wp-post-image', 'aspect-video w-full object-cover relative z-20', MEC_kses::element($this->display_link($event, $event->data->thumbnails['large'], ''))); ?>
            <?php elseif ($location['thumbnail']) : ?>
                <img class="aspect-video w-full object-cover bg-light relative z-20" src="<?php echo $location['thumbnail'] ?>" />

            <?php else: ?>
<div class="aspect-video w-full object-cover bg-light"></div>
                    <?php endif; ?>
            <div class="relative z-20 ml-8 -mt-8 w-16 h-16 mb-9 bg-white border border-pale-blue-light shadow-md rounded-md flex flex-col justify-center items-center">
<span class="text-action font-bold text-3xl"><?php echo esc_html($this->main->date_i18n($this->date_format_minimal_1, strtotime($event->date['start']['date']))); ?></span>
<span class="text-brand uppercase"><?php echo esc_html($this->main->date_i18n($this->date_format_minimal_2, strtotime($event->date['start']['date']))); ?></span></div>
            <div class="px-7 pb-10 z-20 relative">
                <h3 class="mb-4 text-[28px] flex flex-wrap gap-2"><?php echo str_replace('mec-color-hover', 'group-hover:text-action', MEC_kses::element($this->display_link($event))); ?><?php echo MEC_kses::embed($this->display_custom_data($event)); ?><?php echo MEC_kses::element($this->main->get_flags($event));//.$event_color); ?>
                <?php

                //.$this->main->display_cancellation_reason($event, $reason_for_cancellation)); ?><?php // do_action('mec_shortcode_virtual_badge', $event->data->ID); ?><?php //echo MEC_kses::element($this->get_label_captions($event,'mec-fc-style')); ?></h3>

                   <?php if($this->localtime) echo MEC_kses::full($this->main->module('local-time.type2', array('event' => $event))); ?>
<div class="flex flex-wrap gap-2">
                <div class="inline-flex mt-4 gap-2 px-2 py-1 justify-center items-start no-underline text-brand hover:shadow-inner border-2 border-pale-blue-dark rounded-[16px]">
                    <span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M10.0014 18C14.1987 18 17.6014 14.4183 17.6014 10C17.6014 5.58172 14.1987 2 10.0014 2C5.804 2 2.40137 5.58172 2.40137 10C2.40137 14.4183 5.804 18 10.0014 18ZM10.9514 6C10.9514 5.44772 10.526 5 10.0014 5C9.47669 5 9.05136 5.44772 9.05136 6V10C9.05136 10.2652 9.15145 10.5196 9.32961 10.7071L12.0166 13.5355C12.3876 13.9261 12.9891 13.9261 13.3601 13.5355C13.7311 13.145 13.7311 12.5118 13.3601 12.1213L10.9514 9.58579V6Z" fill="#216CFF"/>
</svg>

        </span>
        <span class="text-brand text-sm">
                <?php if($this->include_events_times) echo str_replace('mec-time-details', '', MEC_kses::element($this->main->display_time($start_time, $end_time))); ?>
        </span>
            </div>
<?php
            $the_labels = MEC_kses::element($this->main->get_normal_labels($event, $display_label));
                $the_labels = str_replace('class="mec-label-normal"', 'class="tw-mec-label-normal relative z-20"', $the_labels);
                $the_labels = str_replace('background-color:">', 'background-color:">' . $location_icon, $the_labels);
                echo $the_labels;

                ?>
            </div>
            <?php /*
                <div class="mec-event-detail">


                    <div class="mec-event-loc-place"><?php echo (isset($location['name']) ? esc_html($location['name']) : ''); ?></div>
                    <?php echo str_replace('target="_blank">', 'target="_blank">' . $location_icon, MEC_kses::element($this->display_categories($event))); ?>
                    <?php echo MEC_kses::element($this->display_organizers($event)); ?>
                    <?php echo MEC_kses::element($this->display_cost($event)); ?>
                    <?php echo MEC_kses::form($this->booking_button($event)); ?>
                </div>
                */ ?>


            </div>


 <?php
        echo '</article>';


        $link = str_replace('mec-color-hover', "mec-color-hover absolute inset-0 z-40", MEC_kses::element($this->display_link($event)));
        $link = str_replace('noopener">', 'noopener"><span class="sr-only">', $link);
        $link = str_replace('</a>', '</span></a>', $link);
        echo $link;

        echo '<div class="absolute inset-0 related-gradient opacity-0 group-hover:opacity-100"></div>
        </div>';


        ?>
        <?php endforeach; ?>
        <?php endforeach; ?>