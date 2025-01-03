<?php
namespace EdubinCore\Widgets;
use \Elementor\Controls_Manager;
use \Elementor\Group_Control_Image_Size;
use \Elementor\Group_Control_Typography;
use \Elementor\Group_Control_Text_Shadow;
use \Elementor\Group_Control_Box_Shadow;
use \Elementor\Group_Control_Border;
use \Elementor\Group_Control_Background;
use \Elementor\Widget_Base;

use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Edubin_Elementor_Widget_Section_Title extends Widget_Base {

    public function get_name() {
        return 'section-title-addons';
    }
    
    public function get_title() {
        return __( 'Section Title', 'edubin-core' );
    }

    public function get_icon() {
        return 'edubin-elementor-icon eicon-heading';
    }
    public function get_categories() {
        return [ 'edubin-core' ];
    }

    public function get_keywords() {
        return ['section title', 'title', 'heading', 'custom heading'];
    }
    
    public function get_help_url() {
        return 'https://thepixelcurve.com/docs/general-widgets/call-to-action-widget/';
    }
    protected function register_controls() {

        $this->start_controls_section(
            'section_title_txt',
            [
                'label' => __( 'Section Title', 'edubin-core' ),
            ]
        );
        
            $this->add_control(
                'titlestyle',
                [
                    'label' => __( 'Title Style', 'edubin-core' ),
                    'type' => Controls_Manager::SELECT,
                    'default' => 'four',
                    'options' => [
                        'one'   => __( 'Style 1', 'edubin-core' ),
                        'two'   => __( 'Style 2', 'edubin-core' ),
                        'three' => __( 'Style 3', 'edubin-core' ),
                        'four'  => __( 'Style 4', 'edubin-core' ),
                        'five'  => __( 'Style 5', 'edubin-core' ),
                    ],
                ]
            );

            $this->add_control(
                'section_title_text',
                [
                    'label' => __( 'Title', 'edubin-core' ),
                    'type' => Controls_Manager::TEXTAREA,
                    'placeholder' => __( 'Enter your title', 'edubin-core' ),
                    'default' => __( 'Add Your Heading Text Here', 'edubin-core' ),
                    'title' => __( 'Enter your title', 'edubin-core' ),
                ]
            );

            $this->add_control(
                'section_subtitle_text',
                [
                    'label' => __( 'Sub Title', 'edubin-core' ),
                    'type' => Controls_Manager::TEXTAREA,
                    'placeholder' => __( 'Enter your sub title', 'edubin-core' ),
                    'default' => 'Subtitle',
                    'title' => __( 'Enter your sub title', 'edubin-core' ),
                ]
            );

            $this->add_control(
                'section_advancetitle_text',
                [
                    'label' => __( 'Advance Title', 'edubin-core' ),
                    'type' => Controls_Manager::TEXTAREA,
                    'placeholder' => __( 'Enter your advance title', 'edubin-core' ),
                    'default' => '',
                    'title' => __( 'Enter your advance title', 'edubin-core' ),
                    'condition' =>[
                        'titlestyle' => 'five',
                    ],
                ]
            );

            $this->add_control(
                'section_icon_type',
                [
                    'label' => esc_html__('Icon Type','edubin-core'),
                    'type' =>Controls_Manager::CHOOSE,
                    'options' =>[
                        'img' =>[
                            'title' =>__('Image','edubin-core'),
                            'icon' =>'fa fa-picture-o',
                        ],
                        'icon' =>[
                            'title' =>__('Icon','edubin-core'),
                            'icon' =>'fa fa-info',
                        ]
                    ],
                ]
            );

            $this->add_control(
                'titleimage',
                [
                    'label' => __('Image','edubin-core'),
                    'type'=>Controls_Manager::MEDIA,
                    'dynamic' => [
                        'active' => true,
                    ],
                    'condition' => [
                        'section_icon_type' => 'img',
                    ]
                ]
            );

            $this->add_group_control(
                Group_Control_Image_Size::get_type(),
                [
                    'name' => 'iconimagesize',
                    'default' => 'large',
                    'separator' => 'none',
                    'condition' => [
                        'section_icon_type' => 'img',
                    ]
                ]
            );

            $this->add_control(
                'titleicon',
                [
                    'label' =>__('Icon','edubin-core'),
                    'type'=>Controls_Manager::ICON,
                    'default' => 'fa fa-pencil',
                    'condition' => [
                        'section_icon_type' => 'icon',
                    ]
                ]
            );

        $this->end_controls_section();

        // Title Option start
        $this->start_controls_section(
            'section_title_setting',
            [
                'label' => esc_html__( 'Title Setting', 'edubin-core' ),
                'condition' => [
                    'section_title_text!' => '',
                ]
            ]
        );

            $this->add_control(
                'section_link',
                [
                    'label' => __( 'Link', 'edubin-core' ),
                    'type' => Controls_Manager::URL,
                    'dynamic' => [
                        'active' => true,
                    ],
                    'placeholder' => __( 'https://your-link.com', 'edubin-core' ),
                    'default' => [
                        'url' => '',
                    ],
                    'separator' => 'before',
                ]
            );

            $this->add_control(
                'section_title_tag',
                [
                    'label' => __( 'HTML Tag', 'edubin-core' ),
                    'type' => Controls_Manager::SELECT,
                    'options' => edubin_html_tag_lists(),
                    'default' => 'h2',
                ]
            );

        $this->end_controls_section(); // Subtitle Option end

        // Subtitle Option start
        $this->start_controls_section(
            'section_subtitle_setting',
            [
                'label' => esc_html__( 'Sub Title Setting', 'edubin-core' ),
                'condition' => [
                    'section_subtitle_text!' => '',
                ]
            ]
        );

            $this->add_control(
                'subtitle_position',
                [
                    'label' => __( 'Position', 'edubin-core' ),
                    'type' => Controls_Manager::CHOOSE,
                    'options' => [
                        'top' => [
                            'title' => __( 'Top', 'edubin-core' ),
                            'icon' => 'eicon-v-align-top',
                        ],
                        'bottom' => [
                            'title' => __( 'Bottom', 'edubin-core' ),
                            'icon' => 'eicon-v-align-bottom',
                        ],
                    ],
                    'default' => 'top',
                ]
            );

            $this->add_control(
                'sectionsubtitle_link',
                [
                    'label' => __( 'Link', 'edubin-core' ),
                    'type' => Controls_Manager::URL,
                    'dynamic' => [
                        'active' => true,
                    ],
                    'placeholder' => __( 'https://your-link.com', 'edubin-core' ),
                    'default' => [
                        'url' => '',
                    ],
                    'separator' => 'before',
                ]
            );

            $this->add_control(
                'section_subtitle_tag',
                [
                    'label' => __( 'HTML Tag', 'edubin-core' ),
                    'type' => Controls_Manager::SELECT,
                    'options' => edubin_html_tag_lists(),
                    'default' => 'p',
                ]
            );

        $this->end_controls_section(); // Subtitle Option end


        // Advance Title Option start
        $this->start_controls_section(
            'section_advancetitle_setting',
            [
                'label' => esc_html__( 'Advance Title Setting', 'edubin-core' ),
                'condition' => [
                    'section_advancetitle_text!' => '',
                ]
            ]
        );

            $this->add_responsive_control(
                'section_advancetitle_x_position',
                [
                    'label'   => esc_html__( 'X Offset', 'edubin-core' ),
                    'type'    => Controls_Manager::SLIDER,
                    'default' => [
                        'size' => 0,
                    ],
                    'tablet_default' => [
                        'size' => 0,
                    ],
                    'mobile_default' => [
                        'size' => 0,
                    ],
                    'range' => [
                        'px' => [
                            'min' => -800,
                            'max' => 800,
                        ],
                    ],
                ]
            );

            $this->add_responsive_control(
                'section_advancetitle_y_position',
                [
                    'label'   => esc_html__( 'Y Offset', 'edubin-core' ),
                    'type'    => Controls_Manager::SLIDER,
                    'default' => [
                        'size' => 0,
                    ],
                    'tablet_default' => [
                        'size' => 0,
                    ],
                    'mobile_default' => [
                        'size' => 0,
                    ],
                    'range' => [
                        'px' => [
                            'min' => -800,
                            'max' => 800,
                        ],
                    ],
                ]
            );

            $this->add_responsive_control(
                'section_advancetitle_rotate',
                [
                    'label'   => esc_html__( 'Rotate', 'edubin-core' ),
                    'type'    => Controls_Manager::SLIDER,
                    'default' => [
                        'size' => 0,
                    ],
                    'tablet_default' => [
                        'size' => 0,
                    ],
                    'mobile_default' => [
                        'size' => 0,
                    ],
                    'range' => [
                        'px' => [
                            'min'  => -150,
                            'max'  => 150,
                            'step' => 2,
                        ],
                    ],
                    'selectors' => [
                        '(desktop){{WRAPPER}} .section-advancetitle-txt' => 'transform: translate({{section_advancetitle_x_position.SIZE}}px, {{section_advancetitle_y_position.SIZE}}px) rotate({{SIZE}}deg);',
                        '(tablet){{WRAPPER}} .section-advancetitle-txt' => 'transform: translate({{section_advancetitle_x_position_tablet.SIZE}}px, {{section_advancetitle_y_position_tablet.SIZE}}px) rotate({{SIZE}}deg);',
                        '(mobile){{WRAPPER}} .section-advancetitle-txt' => 'transform: translate({{section_advancetitle_x_position_mobile.SIZE}}px, {{section_advancetitle_y_position_mobile.SIZE}}px) rotate({{SIZE}}deg);',
                    ],
                ]
            );

        $this->end_controls_section(); //  Advance Title Option end

        // Style tab section
        $this->start_controls_section(
            'section_area_style',
            [
                'label' => __( 'Section style', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

            $this->add_group_control(
                Group_Control_Background::get_type(),
                [
                    'name' => 'background',
                    'label' => __( 'Background', 'edubin-core' ),
                    'types' => [ 'classic', 'gradient' ],
                    'selector' => '{{WRAPPER}} .edubin-section-title',
                ]
            );

            $this->add_responsive_control(
                'sectionmargin',
                [
                    'label' => __( 'Margin', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin-section-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'sectionpadding',
                [
                    'label' => __( 'Padding', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin-section-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'aligntitle',
                [
                    'label' => __( 'Alignment', 'edubin-core' ),
                    'type' => Controls_Manager::CHOOSE,
                    'options' => [
                        'left' => [
                            'title' => __( 'Left', 'edubin-core' ),
                            'icon' => 'eicon-text-align-left',
                        ],
                        'center' => [
                            'title' => __( 'Center', 'edubin-core' ),
                            'icon' => 'eicon-text-align-center',
                        ],
                        'right' => [
                            'title' => __( 'Right', 'edubin-core' ),
                            'icon' => 'eicon-text-align-right',
                        ],
                        'justify' => [
                            'title' => __( 'Justified', 'edubin-core' ),
                            'icon' => 'eicon-text-align-justify',
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin-section-title' => 'text-align: {{VALUE}};',
                    ],
                    'default' => 'left',
                    'prefix_class' => 'edubin-title-align%s-',
                ]
            );

            $this->add_group_control(
                Group_Control_Border::get_type(),
                [
                    'name' => 'section_title_border',
                    'label' => __( 'Border', 'edubin-core' ),
                    'selector' => '{{WRAPPER}} .edubin-section-title',
                ]
            );

            $this->add_control(
                'before_after_title_color',
                [
                    'label' => __( 'Before And After Border Color', 'edubin-core' ),
                    'type' => Controls_Manager::COLOR,
                    'default' => ' ',
                    'selectors' => [
                        '{{WRAPPER}} .title-style-two .section-title-txt::before' => 'background-color: {{VALUE}};',
                        '{{WRAPPER}} .title-style-two .section-title-txt::after' => 'background-color: {{VALUE}};',
                    ],
                    'condition' => [
                        'titlestyle' => 'two',
                    ]
                ]
            );

            $this->add_control(
                'title_separaotr_color',
                [
                    'label' => __( 'Title Separator Color', 'edubin-core' ),
                    'type' => Controls_Manager::COLOR,
                    'default' => ' ',
                    'selectors' => [
                        '{{WRAPPER}} .edubin-section-title span.edubin-title-sperator' => 'background-color: {{VALUE}};',
                    ],
                    'condition' => [
                        'titlestyle' => 'four',
                    ],
                    'separator'=>'before',
                ]
            );

            $this->add_responsive_control(
                'title_separaotr_margin',
                [
                    'label' => __( 'Separator Specing', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin-section-title span.edubin-title-sperator' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'condition' => [
                        'titlestyle' => 'four',
                    ]
                ]
            );

        $this->end_controls_section();

        // Style tab tite section
        $this->start_controls_section(
            'section_title_style',
            [
                'label' => __( 'Title style', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'section_title_text!' => '',
                ]
            ]
        );

            $this->add_control(
                'sectitle-heading',
                [
                    'label' => __( 'Title', 'edubin-core' ),
                    'type' => Controls_Manager::HEADING,
                ]
            );

            $this->add_control(
                'title_color',
                [
                    'label' => __( 'Color', 'edubin-core' ),
                    'type' => Controls_Manager::COLOR,
                    'default' => ' ',
                    'selectors' => [
                        '{{WRAPPER}} .edubin-section-title .section-title-txt' => 'color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'titletypography',
                    'global' => [
                        'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
                    ],
                    'selector' => '{{WRAPPER}} .edubin-section-title .section-title-txt',
                ]
            );

            $this->add_group_control(
                Group_Control_Border::get_type(),
                [
                    'name' => 'title_border',
                    'label' => __( 'Border', 'edubin-core' ),
                    'selector' => '{{WRAPPER}} .edubin-section-title .section-title-txt',
                ]
            );

            $this->add_responsive_control(
                'title_border_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'selectors' => [
                        '{{WRAPPER}} .edubin-section-title .section-title-txt' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                    ],
                ]
            );

            $this->add_responsive_control(
                'titlenmargin',
                [
                    'label' => __( 'Margin', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin-section-title .section-title-txt' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'titlepadding',
                [
                    'label' => __( 'Padding', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin-section-title .section-title-txt' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );


            $this->add_responsive_control(
                'titledisplay',
                [
                    'label' => __( 'Display', 'edubin-core' ),
                    'type' => Controls_Manager::CHOOSE,
                    'options' => [
                        'block' => [
                            'title' => __( 'Block', 'edubin-core' ),
                            'icon' => 'eicon-device-desktop',
                        ],
                        'inline-block' => [
                            'title' => __( 'Inline block', 'edubin-core' ),
                            'icon' => 'eicon-slider-push',
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin-section-title .section-title-txt' => 'display: {{VALUE}};',
                    ],
                    'default' => 'inline-block',
                ]
            );

            $this->add_group_control(
                Group_Control_Background::get_type(),
                [
                    'name' => 'titlebackground',
                    'label' => __( 'Background', 'edubin-core' ),
                    'types' => [ 'classic', 'gradient' ],
                    'selector' => '{{WRAPPER}} .edubin-section-title .section-title-txt',
                ]
            );

        $this->end_controls_section(); // Title style end

        // Style tab sub tite section
        $this->start_controls_section(
            'section_subtitle_style',
            [
                'label' => __( 'Sub Title style', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'section_subtitle_text!' => '',
                ]
            ]
        );

            $this->add_control(
                'subtitle_color',
                [
                    'label' => __( 'Color', 'edubin-core' ),
                    'type' => Controls_Manager::COLOR,
                    'default' => '',
                    'selectors' => [
                        '{{WRAPPER}} .edubin-section-title .section-subtitle-txt' => 'color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'subtitletypography',
                    'global' => [
                        'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
                    ],
                    'selector' => '{{WRAPPER}} .edubin-section-title .section-subtitle-txt',
                ]
            );

            $this->add_group_control(
                Group_Control_Border::get_type(),
                [
                    'name' => 'subtitle_border',
                    'label' => __( 'Border', 'edubin-core' ),
                    'selector' => '{{WRAPPER}} .edubin-section-title .section-subtitle-txt',
                ]
            );

            $this->add_responsive_control(
                'subtitle_border_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'selectors' => [
                        '{{WRAPPER}} .edubin-section-title .section-subtitle-txt' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                    ],
                ]
            );

            $this->add_responsive_control(
                'subtitlenmargin',
                [
                    'label' => __( 'Margin', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin-section-title .section-subtitle-txt' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'subtitlepadding',
                [
                    'label' => __( 'Padding', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin-section-title .section-subtitle-txt' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'subtitledisplay',
                [
                    'label' => __( 'Display', 'edubin-core' ),
                    'type' => Controls_Manager::CHOOSE,
                    'options' => [
                        'block' => [
                            'title' => __( 'Block', 'edubin-core' ),
                            'icon' => 'eicon-device-desktop',
                        ],
                        'inline-block' => [
                            'title' => __( 'Inline block', 'edubin-core' ),
                            'icon' => 'eicon-slider-push',
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin-section-title .section-subtitle-txt' => 'display: {{VALUE}};',
                    ],
                    'default' => 'block',
                ]
            );

            $this->add_group_control(
                Group_Control_Background::get_type(),
                [
                    'name' => 'subtitlebackground',
                    'label' => __( 'Background', 'edubin-core' ),
                    'types' => [ 'classic', 'gradient' ],
                    'selector' => '{{WRAPPER}} .edubin-section-title .section-subtitle-txt',
                ]
            );

        $this->end_controls_section();

        // Style tab advance tite section
        $this->start_controls_section(
            'section_advancetitle_style',
            [
                'label' => __( 'Advance Title style', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'section_advancetitle_text!' => '',
                ]
            ]
        );

            $this->add_control(
                'advancetitle_color',
                [
                    'label' => __( 'Color', 'edubin-core' ),
                    'type' => Controls_Manager::COLOR,
                    'default' => ' ',
                    'selectors' => [
                        '{{WRAPPER}} .edubin-section-title .section-advancetitle-txt' => 'color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'advancetitletypography',
                    'global' => [
                        'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
                    ],
                    'selector' => '{{WRAPPER}} .edubin-section-title .section-advancetitle-txt',
                ]
            );

            $this->add_group_control(
                Group_Control_Text_Shadow::get_type(),
                [
                    'name' => 'advance_text_shadow',
                    'label' => __( 'Text Shadow', 'edubin-core' ),
                    'selector' => '{{WRAPPER}} .edubin-section-title .section-advancetitle-txt',
                ]
            );

            $this->add_group_control(
                Group_Control_Box_Shadow::get_type(),
                [
                    'name' => 'advance_box_shadow',
                    'label' => __( 'Box Shadow', 'edubin-core' ),
                    'selector' => '{{WRAPPER}} .edubin-section-title .section-advancetitle-txt',
                ]
            );

            $this->add_group_control(
                Group_Control_Border::get_type(),
                [
                    'name' => 'advancetitle_border',
                    'label' => __( 'Border', 'edubin-core' ),
                    'selector' => '{{WRAPPER}} .edubin-section-title .section-advancetitle-txt',
                    'separator' =>'before',
                ]
            );

            $this->add_responsive_control(
                'advancetitle_border_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'selectors' => [
                        '{{WRAPPER}} .edubin-section-title .section-advancetitle-txt' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                    ],
                    'separator' =>'before',
                ]
            );

            $this->add_responsive_control(
                'advancetitlepadding',
                [
                    'label' => __( 'Padding', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin-section-title .section-advancetitle-txt' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'separator' =>'before',
                ]
            );

            $this->add_group_control(
                Group_Control_Background::get_type(),
                [
                    'name' => 'advancetitlebackground',
                    'label' => __( 'Background', 'edubin-core' ),
                    'types' => [ 'classic', 'gradient' ],
                    'selector' => '{{WRAPPER}} .edubin-section-title .section-advancetitle-txt',
                    'separator' =>'before',
                ]
            );

            $this->add_control(
                'advanced_title_opacity',
                [
                    'label' => __( 'Opacity', 'edubin-core' ),
                    'type'  => Controls_Manager::SLIDER,
                    'range' => [
                        'px' => [
                            'min'  => 0.05,
                            'max'  => 1,
                            'step' => 0.01,
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin-section-title .section-advancetitle-txt' => 'opacity: {{SIZE}};',
                    ],
                    'separator' =>'before',
                ]
            );

        $this->end_controls_section();

    }

    protected function render( $instance = [] ) {

        $settings   = $this->get_settings_for_display();
        $titlestyle = $settings['titlestyle'];

        $this->add_render_attribute( 'section_area_attr', 'class', 'edubin-section-title' );
        $this->add_render_attribute( 'section_area_attr', 'class', 'edubin-subtitle-position-'. $settings['subtitle_position'] );
        $this->add_render_attribute( 'section_area_attr', 'class', 'title-style-'. $settings['titlestyle'] );

        $this->add_render_attribute( 'section_title_text', 'class', 'section-title-txt' );
        $this->add_render_attribute( 'section_subtitle_attr', 'class', 'section-subtitle-txt' );

        $this->add_render_attribute( 'section_advancetitle_attr', 'class', 'section-advancetitle-txt' );

        $title      = ! empty( $settings['section_title_text'] ) ? $settings['section_title_text'] : '';
        $subtitle   = ! empty( $settings['section_subtitle_text'] ) ? $settings['section_subtitle_text'] : '';

        // URL Generate Title
        if ( ! empty( $settings['section_link']['url'] ) ) {
            $this->add_render_attribute( 'url', 'href', $settings['section_link']['url'] );

            if ( $settings['section_link']['is_external'] ) {
                $this->add_render_attribute( 'url', 'target', '_blank' );
            }

            if ( ! empty( $settings['section_link']['nofollow'] ) ) {
                $this->add_render_attribute( 'url', 'rel', 'nofollow' );
            }

            $title = sprintf( '<a %1$s>%2$s</a>', $this->get_render_attribute_string( 'url' ), $title );
        }

        // URL Generate Sub Title
        if ( ! empty( $settings['sectionsubtitle_link']['url'] ) ) {
            $this->add_render_attribute( 'suburl', 'href', $settings['sectionsubtitle_link']['url'] );

            if ( $settings['sectionsubtitle_link']['is_external'] ) {
                $this->add_render_attribute( 'suburl', 'target', '_blank' );
            }

            if ( ! empty( $settings['sectionsubtitle_link']['nofollow'] ) ) {
                $this->add_render_attribute( 'suburl', 'rel', 'nofollow' );
            }

            $subtitle = sprintf( '<a %1$s>%2$s</a>', $this->get_render_attribute_string( 'suburl' ), $subtitle );
        }

        ?>
            <div <?php echo $this->get_render_attribute_string( 'section_area_attr' ); ?>>
                <?php
                    if( $titlestyle == 'one' ){

                        if( !empty($title) ){
                            echo sprintf( '<%1$s %2$s>%3$s</%1$s>', $settings['section_title_tag'], $this->get_render_attribute_string( 'section_title_text' ), $title );
                        }
                        if( !empty( $subtitle ) ){
                            echo sprintf( '<%1$s %2$s>%3$s</%1$s>', $settings['section_subtitle_tag'], $this->get_render_attribute_string( 'section_subtitle_attr' ), $subtitle );
                        }

                        if( !empty( $settings['titleimage'] ) ){
                            echo Group_Control_Image_Size::get_attachment_image_html( $settings, 'iconimagesize', 'titleimage' );
                        }

                        if( !empty( $settings['titleicon'] ) ){
                            echo '<i class="'.$settings['titleicon'].'"></i>';
                        }

                    }else{

                        if( !empty( $title ) ){
                            echo sprintf( '<%1$s %2$s>%3$s</%1$s>%4$s', $settings['section_title_tag'], $this->get_render_attribute_string( 'section_title_text' ), $title, '<div class=edubin-title-sperator-sec><span class="edubin-title-sperator">&nbsp;</span></div>' );
                        }
                        if( !empty($settings['section_advancetitle_text']) && $titlestyle == 'five' ){
                            echo sprintf( '<div %1$s>%2$s</div>', $this->get_render_attribute_string( 'section_advancetitle_attr' ), $settings['section_advancetitle_text'] );
                        }
                        if( !empty( $subtitle ) ){
                            echo sprintf( '<%1$s %2$s>%3$s</%1$s>', $settings['section_subtitle_tag'], $this->get_render_attribute_string( 'section_subtitle_attr' ), $subtitle );
                        }
                        if( !empty( $settings['titleimage'] ) ){
                            echo Group_Control_Image_Size::get_attachment_image_html( $settings, 'iconimagesize', 'titleimage' );
                        }
                        if( !empty( $settings['titleicon'] ) ){
                            echo '<i class="'.$settings['titleicon'].'"></i>';
                        }

                    }
                ?>
            </div>

        <?php

    }
}

