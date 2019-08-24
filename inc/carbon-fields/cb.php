<?php

if (!defined('ABSPATH')) exit;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
function crb_attach_theme_options()
{
	$basic_options_container = Container::make('theme_options', __('Basic Options'))
		->add_tab(__('Images'), array(
			Field::make('image', 'crb_logo_png', __('Logo png'))
				->set_value_type('url'),
		))
		->add_tab(__('Contacts'), array(
			Field::make('text', 'crb_site_title', __('Title of the site', 'bs-prodinfo1')),
			Field::make('text', 'crb_phone', __('Phone'))
				->set_help_text(esc_html__('Use all simbols for me', 'bs-prodinfo1')),
			Field::make('text', 'crb_mail', __('Email')),
			Field::make('text', 'crb_address_ru', __('Address ru'))
				->set_width(30),
			Field::make('text', 'crb_address_ro', __('Address ro'))
				->set_width(30),
			Field::make('text', 'crb_address_en', __('Address en'))
				->set_width(30),

			Field::make('text', 'crb_facebook', __('Facebook')),
			Field::make('text', 'crb_twitter', __('Twitter')),
			Field::make('text', 'crb_linkedin', __('Linked in')),
		));

	// Add second options page under 'Basic Options'
	Container::make('theme_options', 'Blocks')
		->set_page_parent($basic_options_container)// reference to a top level container
		->add_tab(__('Slider'), array(
			Field::make('text', 'crb_slider_title_ro', __('Block slider title ro', 'bs-prodinfo1')),
			Field::make('rich_text', 'crb_slider_text_ro', __('Block slider text ro', 'bs-prodinfo1')),

			Field::make('text', 'crb_slider_title_ru', __('Block slider title ru', 'bs-prodinfo1')),
			Field::make('rich_text', 'crb_slider_text_ru', __('Block slider text ru', 'bs-prodinfo1')),

			Field::make('text', 'crb_slider_title_en', __('Block slider title en', 'bs-prodinfo1')),
			Field::make('rich_text', 'crb_slider_text_en', __('Block slider text en', 'bs-prodinfo1')),

			Field::make('complex', 'crb_slider', __('Slider'))
				->add_fields(array(
					Field::make('image', 'crb_slider_photo', __('Slide Photo')),
				))
				->set_layout('tabbed-horizontal')
				->set_help_text('1350x600')
		))
		->add_tab(__('Offers'), array(
			Field::make('text', 'crb_offers_title_ro', __('Block offers title ro', 'bs-prodinfo1'))
				->set_width(50),
			Field::make('text', 'crb_offers_text_ro', __('Block offers text ro', 'bs-prodinfo1'))
				->set_width(50),

			Field::make('text', 'crb_offers_title_ru', __('Block offers title ru', 'bs-prodinfo1'))
				->set_width(50),
			Field::make('text', 'crb_offers_text_ru', __('Block offers text ru', 'bs-prodinfo1'))
				->set_width(50),

			Field::make('text', 'crb_offers_title_en', __('Block offers title en', 'bs-prodinfo1'))
				->set_width(50),
			Field::make('text', 'crb_offers_text_en', __('Block offers text en', 'bs-prodinfo1'))
				->set_width(50),

			Field::make('complex', 'crb_offers', __('Slider'))
				->add_fields(array(
					Field::make('image', 'crb_offers_photo', __('Photo offers'))
						->set_help_text('120x120'),

					Field::make('text', 'crb_offers_item_title_ro', __('Block offers item title ro', 'bs-prodinfo1'))
						->set_width(40),
					Field::make('text', 'crb_offers_item_text_ro', __('Block offers item text ro', 'bs-prodinfo1'))
						->set_width(60),

					Field::make('text', 'crb_offers_item_title_ru', __('Block offers item title ru', 'bs-prodinfo1'))
						->set_width(40),
					Field::make('text', 'crb_offers_item_text_ru', __('Block offers item text ru', 'bs-prodinfo1'))
						->set_width(60),

					Field::make('text', 'crb_offers_item_title_en', __('Block offers item title en', 'bs-prodinfo1'))
						->set_width(40),
					Field::make('text', 'crb_offers_item_text_en', __('Block offers item text en', 'bs-prodinfo1'))
						->set_width(60),

				))
				->set_layout('tabbed-horizontal')
		))
		->add_tab(__('Members'), array(
			Field::make('text', 'crb_members_title_ro', __('Block members title ro', 'bs-prodinfo1'))
				->set_width(30),

			Field::make('text', 'crb_members_title_ru', __('Block members title ru', 'bs-prodinfo1'))
				->set_width(30),

			Field::make('text', 'crb_members_title_en', __('Block members title en', 'bs-prodinfo1'))
				->set_width(30),

			Field::make('text', 'crb_members_button_ro', __('Block members button ro', 'bs-prodinfo1'))
				->set_width(30),
			Field::make('text', 'crb_members_button_ru', __('Block members button ru', 'bs-prodinfo1'))
				->set_width(30),
			Field::make('text', 'crb_members_button_en', __('Block members button en', 'bs-prodinfo1'))
				->set_width(30),

			Field::make('complex', 'crb_members', __('Slider'))
				->add_fields(array(
					Field::make('image', 'crb_members_photo', __('Photo offers'))
						->set_help_text('116x100'),

					Field::make('text', 'crb_offers_item_title_ro', __('Block members item title ro', 'bs-prodinfo1')),

					Field::make('text', 'crb_offers_item_title_ru', __('Block members item title ru', 'bs-prodinfo1')),

					Field::make('text', 'crb_offers_item_title_en', __('Block members item title en', 'bs-prodinfo1')),

				))
				->set_layout('tabbed-horizontal')
		))
		->add_tab(__('Directions'), array(
			Field::make('text', 'crb_directions_title_ro', __('Block directions title ro', 'bs-prodinfo1'))
				->set_width(30),
			Field::make('text', 'crb_directions_title_ru', __('Block directions title ru', 'bs-prodinfo1'))
				->set_width(30),
			Field::make('text', 'crb_directions_title_en', __('Block directions title en', 'bs-prodinfo1'))
				->set_width(30),

			Field::make('text', 'crb_directions_button_ro', __('Block directions button ro', 'bs-prodinfo1'))
				->set_width(30),
			Field::make('text', 'crb_directions_button_ru', __('Block directions button ru', 'bs-prodinfo1'))
				->set_width(30),
			Field::make('text', 'crb_directions_button_en', __('Block directions button en', 'bs-prodinfo1'))
				->set_width(30),

			Field::make('complex', 'crb_directions', __('Slider'))
				->add_fields(array(
					Field::make('image', 'crb_directions_photo', __('Photo directions'))
						->set_help_text('92x92'),
					Field::make('image', 'crb_directions_bg', __('Photo background directions'))
						->set_help_text('241x262'),
					Field::make('text', 'crb_directions_item_title_ro', __('Block directions item title ro', 'bs-prodinfo1')),
					Field::make('text', 'crb_directions_item_title_ru', __('Block directions item title ru', 'bs-prodinfo1')),
					Field::make('text', 'crb_directions_item_title_en', __('Block directions item title en', 'bs-prodinfo1')),

				))
				->set_layout('tabbed-horizontal')
		))
		->add_tab(__('Idea'), array(
			Field::make('text', 'crb_idea_title_ro', __('Block idea title ro', 'bs-prodinfo1'))
				->set_width(30),
			Field::make('text', 'crb_idea_title_ru', __('Block idea title ru', 'bs-prodinfo1'))
				->set_width(30),
			Field::make('text', 'crb_idea_title_en', __('Block idea title en', 'bs-prodinfo1'))
				->set_width(30),

			Field::make('textarea', 'crb_idea_subtitle_ro', __('Block idea subtitle ro', 'bs-prodinfo1'))
				->set_width(30),
			Field::make('textarea', 'crb_idea_subtitle_ru', __('Block idea subtitle ru', 'bs-prodinfo1'))
				->set_width(30),
			Field::make('textarea', 'crb_idea_subtitle_en', __('Block idea subtitle en', 'bs-prodinfo1'))
				->set_width(30),

			Field::make('text', 'crb_idea_button_ro', __('Block idea button ro', 'bs-prodinfo1'))
				->set_width(30),
			Field::make('text', 'crb_idea_button_ru', __('Block idea button ru', 'bs-prodinfo1'))
				->set_width(30),
			Field::make('text', 'crb_idea_button_en', __('Block idea button en', 'bs-prodinfo1'))
				->set_width(30),

			Field::make('complex', 'crb_idea', __('Slider'))
				->add_fields(array(
					Field::make('image', 'crb_idea_photo', __('Photo idea'))
						->set_help_text('1349x248'),

				))
				->set_layout('tabbed-horizontal')
		))
		->add_tab(__('Partners'), array(
			Field::make('text', 'crb_partners_title_ro', __('Block partners title ro', 'bs-prodinfo1'))
				->set_width(30),
			Field::make('text', 'crb_partners_title_ru', __('Block partners title ru', 'bs-prodinfo1'))
				->set_width(30),
			Field::make('text', 'crb_partners_title_en', __('Block partners title en', 'bs-prodinfo1'))
				->set_width(30),


			Field::make('complex', 'crb_partners', __('Slider'))
				->add_fields(array(
					Field::make('image', 'crb_partners_photo', __('Photo idea'))
						->set_help_text('213x272'),

				))
				->set_layout('tabbed-horizontal')
		))
		->add_tab(__('Benefice'), array(
			Field::make('text', 'crb_benefce_title_before_ro', __('Title benefce before ro'))
				->set_width(50),
			Field::make('text', 'crb_benefce_title_after_ro', __('Title benefce after ro'))
				->set_width(50),

			Field::make('text', 'crb_benefce_title_before_ru', __('Title benefce before ru'))
				->set_width(50),
			Field::make('text', 'crb_benefce_title_after_ru', __('Title benefce after ru'))
				->set_width(50),

			Field::make('text', 'crb_benefce_title_before_en', __('Title benefce before en'))
				->set_width(50),
			Field::make('text', 'crb_benefce_title_after_en', __('Title benefce after en'))
				->set_width(50),

			Field::make('text', 'crb_benefce_button_ro', __('Title benefce button ro'))
				->set_width(30),
			Field::make('text', 'crb_benefce_button_ru', __('Title benefce button ru'))
				->set_width(30),
			Field::make('text', 'crb_benefce_button_en', __('Title benefce button en'))
				->set_width(30),
		))
		->add_tab(__('Footer'), array(
			Field::make('image', 'crb_footer_photo', __('Photo footer'))
				->set_help_text('1280x520'),

			Field::make('text', 'crb_contacts_title_ro', __('Block contacts title ro', 'bs-prodinfo1'))
				->set_width(30),
			Field::make('text', 'crb_contacts_title_ru', __('Block contacts title ru', 'bs-prodinfo1'))
				->set_width(30),
			Field::make('text', 'crb_contacts_title_en', __('Block contacts title en', 'bs-prodinfo1'))
				->set_width(30),
		));
}

add_action('after_setup_theme', 'crb_load');
function crb_load()
{
	require_once(__DIR__ . '/../../vendor/autoload.php');
	\Carbon_Fields\Carbon_Fields::boot();
}
