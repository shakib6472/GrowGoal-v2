<?php
namespace EdubinCore\Widgets;

use \Elementor\Controls_Manager;
use \Elementor\Widget_Base;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class Course_Search extends Widget_Base {

	public function get_name() {
		return 'edubin-course-search';
	}
    public function get_title() {
        return __( 'Search (LearnPress)', 'edubin-core' );
    }
	public function get_icon() {
		return 'edubin-elementor-icon eicon-search';
	}

	public function get_keywords() {
		return [ 'edubin', 'course', 'search', 'live search', 'ajax search' ];
	}

	public function get_categories() {
		return [ 'edubin-core' ];
	}

    protected $post_type = LP_COURSE_CPT;

	// =========== Register Controls ===========
	protected function _register_controls() {

		$this->start_controls_section(
			'section_course_search',
			[
				'label' => __( 'Course Search', 'edubin-core' )
			]
		);

        $this->add_control(
            'type',
            [
                'label'     => __( 'Type', 'edubin-core' ),
                'type'      => Controls_Manager::SELECT,
                'default'   => 'search-icon',
                'options'   => [
					'search-icon' => __( 'Search Icon', 'edubin-core' ),
					'button'      => __( 'Button', 'edubin-core' )
                ]
            ]
        );

        $this->add_control(
            'button_text',
            [   
				'label'     => __( 'Button Text', 'edubin-core' ),
				'type'      => Controls_Manager::TEXT,
				'default'   => __( 'Search', 'edubin-core' ),
				'condition' => [
                	'type'  => 'button'
                ]
            ]
        );

		$this->add_control(
            'placeholder',
            [   
                'label'       => __( 'Search placeholder', 'edubin-core' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => __( 'Search By Course Name, Just Type To Get Hint...', 'edubin-core' ),
                'description' => __( 'Placeholder text for the search box.', 'edubin-core' )
            ]
        );

        $this->add_control(
            'ajax_live_search',
            [
                'label'        => __( 'Ajax Live Search', 'edubin-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Enable', 'edubin-core' ),
                'label_off'    => __( 'Disable', 'edubin-core' ),
                'return_value' => 'yes',
                'default'      => 'yes'
            ]
        );

        $this->add_control(
            'disable_submit_form',
            [
                'label'        => __( 'Submit Form Option', 'edubin-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Enable', 'edubin-core' ),
                'label_off'    => __( 'Disable', 'edubin-core' ),
                'return_value' => 'yes',
                'default'      => 'no'
            ]
        );

		$this->add_responsive_control(
			'search_box_height',
			[
				'label'        => __( 'height', 'edubin-core' ),
				'type'         => Controls_Manager::SLIDER,
				'size_units'   => [ 'px', '%' ],
				'range'        => [
					'px'       => [
						'min'  => 20,
						'max'  => 150,
						'step' => 5
					]
				],
				'selectors'    => [
					'{{WRAPPER}} .edubin-course-serach-input-group input[type="text"]' => 'height: {{SIZE}}{{UNIT}};'
				]
			]
		);

        $this->add_responsive_control(
			'search_box_width',
			[
				'label'        => __( 'Width', 'edubin-core' ),
				'type'         => Controls_Manager::SLIDER,
				'size_units'   => [ 'px', '%' ],
				'range'        => [
					'px'       => [
						'min'  => -1000,
						'max'  => 1000,
						'step' => 5
					],
					'%'        => [
						'min'  => 0,
						'max'  => 100
					]
				],
				'default'      => [
					'unit'     => '%',
					'size'     => 100
				],
				'selectors'    => [
					'{{WRAPPER}} .edubin-course-search-box-wrapper' => 'width: {{SIZE}}{{UNIT}};'
				]
			]
		);

        $this->add_responsive_control(
            'alignment',
            [
                'label'          => __( 'Alignment', 'edubin-core' ),
                'type'           => Controls_Manager::CHOOSE,
                'options'        => [
                    '0' => [
                        'title'  => __( 'Left', 'edubin-core' ),
                        'icon'   => 'eicon-text-align-left'
                    ],
                    '0 auto'     => [
                        'title'  => __( 'Center', 'edubin-core' ),
                        'icon'   => 'eicon-text-align-center'
                    ],
                    '0 0 0 auto' => [
                        'title'  => __( 'Right', 'edubin-core' ),
                        'icon'   => 'eicon-text-align-right'
                    ]
                ],
                'selectors'      => [
                    '{{WRAPPER}} .edubin-course-search-box-wrapper' => 'margin: {{VALUE}};'
                ]
            ]
        );

		$this->end_controls_section();

        $this->start_controls_section(
			'container_style',
			[
				'label' => __( 'Container', 'edubin-core' ),
				'tab'   => Controls_Manager::TAB_STYLE
			]
		);

        $this->add_control(
            'text_color',
            [
                'label'     => __( 'Text Color', 'edubin-core' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .edubin-course-serach-input-group input[type="text"]' => 'color: {{VALUE}};'
                ]
            ]
        );

        $this->add_control(
            'text_placeholder_color',
            [
                'label'     => __( 'Placeholder Color', 'edubin-core' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .edubin-course-serach-input-group input[type="text"]::placeholder' => 'color: {{VALUE}} !important;'
                ]
            ]
        );

		$this->end_controls_section();
	}

	// =========== Render ===========
	protected function render() {
		$settings    = $this->get_settings_for_display();
		$placeholder = $settings['placeholder'];
		$disable_submit_form = false;

        $this->add_render_attribute( 'container', 'class', 'edubin-course-search-box-wrapper' );
        $this->add_render_attribute( 'container', 'class', 'edubin-course-search-by-' . esc_attr( $settings['type'] ) );

        if ( 'yes' === $settings['ajax_live_search'] ) :
            $this->add_render_attribute( 'container', 'data-ajax-search', 'enable' );
        endif;

		if ( 'yes' === $settings['disable_submit_form'] || 'edubin-ms-course-search' === $this->get_name() ) :
			$disable_submit_form = true;
		endif;

		$this->add_render_attribute( 'container', 'class', 'edubin-course-search-form' );
		$this->add_render_attribute( 'container', 'role', 'search' );
		if ( $disable_submit_form ) :
			$this->add_render_attribute( 'container', 'onsubmit', 'return false' );
		else :
			$this->add_render_attribute( 'container', 'action', esc_url( get_post_type_archive_link( $this->post_type ) ) );
		endif;

		echo '<div ' . $this->get_render_attribute_string( 'container' ) . '>';
			echo '<div class="edubin-course-search">';
				echo '<form ' . $this->get_render_attribute_string( 'container' ) . '>';
					echo '<fieldset>';
						echo '<div class="edubin-course-serach-input-group">';
							if ( is_search() ) :
								echo '<input id="edubin-course-search-id-' . $this->get_id() . '" class="edubin-course-search-field" type="text" name="s" value="' . esc_attr( apply_filters( 'the_search_query', get_search_query() ) ) . '"/>';
							else :
								echo '<input id="edubin-course-search-id-' . $this->get_id() . '" class="edubin-course-search-field" type="text" name="s" placeholder="' . esc_attr( $placeholder ) . '"/>';
							endif;

							echo '<input type="hidden" value="course" name="ref" />';
                            
							echo '<span class="edubin-course-search-btn">';
                                if ( 'search-icon' === $settings['type'] ) :
                                    echo '<button type="submit" class="edubin-course-ajax-search-icon"><i class="icon-2" aria-hidden="true"></i></button>';
                                else :
                                    echo '<button type="submit" class="edubin-course-ajax-search-button">' . esc_html( $settings['button_text'] ) . '</button>';
                                endif;
							echo '</span>';
						echo '</div>';
					echo '</fieldset>';
				echo '</form>';

                if ( 'yes' === $settings['ajax_live_search'] ) :
                    echo '<div class="edubin-course-ajax-search-result-area">';
                        echo '<div id="edubin-course-search-id-' . esc_attr( $this->get_id() ) . '" class="edubin-course-ajax-search-result-inner"></div>';
                    echo '</div>';
                endif;
			echo '</div>';
		echo '</div>';
	}
}