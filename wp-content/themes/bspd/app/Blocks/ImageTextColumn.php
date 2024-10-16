<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class ImageTextColumn extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Image Text Column';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'Блок із зображення та текстом розбити на дві колонки.';

    /**
     * The block category.
     *
     * @var string
     */
    public $category = 'btd';

    /**
     * The block icon.
     *
     * @var string|array
     */
    public $icon = 'superhero';

    /**
     * The block keywords.
     *
     * @var array
     */
    public $keywords = [];

    /**
     * The block post type allow list.
     *
     * @var array
     */
    public $post_types = [];

    /**
     * The parent block type allow list.
     *
     * @var array
     */
    public $parent = [];

    /**
     * The ancestor block type allow list.
     *
     * @var array
     */
    public $ancestor = [];

    /**
     * The default block mode.
     *
     * @var string
     */
    public $mode = 'edit';

    /**
     * The default block alignment.
     *
     * @var string
     */
    public $align = '';

    /**
     * The default block text alignment.
     *
     * @var string
     */
    public $align_text = '';

    /**
     * The default block content alignment.
     *
     * @var string
     */
    public $align_content = '';

    /**
     * The supported block features.
     *
     * @var array
     */
    public $supports = [
        'anchor' => true,
    ];

    /**
     * The block styles.
     *
     * @var array
     */
    public $styles = [];

    /**
     * The block preview example data.
     *
     * @var array
     */
    public $example = [
        'items' => [],
    ];

    /**
     * The block template.
     *
     * @var array
     */
    public $template = [];

    /**
     * Data to be passed to the block before rendering.
     */
    public function with(): array
    {
        return [
            'image' => $this->get_value('image'),
            'title' => $this->get_group_item_value('title'),
            'text' => $this->get_group_item_value('text'),
            'link' => $this->get_group_item_value('link'),
            'hide_section' => $this->get_value('hide_section'),
        ];
    }

    /**
     * The block field group.
     */
    public function fields(): array
    {
        $fields = Builder::make('image_text_column');

        $fields
            ->addAccordion('image_text_column', [
                    'label' => 'Зображення-Текст',
                ]
            )
            ->addTrueFalse('hide_section', [
                'label' => 'Видимість секцї',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [],
                'message' => '',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Прихована',
                'ui_off_text' => 'Секція видима',
            ])
            ->addImage('image', [
                'label' => 'Зображення',
                'wrapper' => [
                    'width' => '50',
                ]
            ])
            ->addGroup('column_content', [
                'label' => 'Текстова колонка',
                'wrapper' => [
                    'width' => '50',
                ],
                'layout' => 'block'
            ])
                ->addText('title', [
                    'label' => 'Заголовок',
                ])
                ->addWysiwyg('text', [
                    'label' => 'Text',
                    'instructions' => '',
                    'tabs' => 'all',
                    'toolbar' => 'basic',
                    'media_upload' => 0,
                ])
                ->addLink('link', [
                    'label' => 'Кнопка',
                    'return_format' => 'array',
                ])
            ->endGroup()
            ->addAccordion('image_text_column_end')->endpoint();

        return $fields->build();
    }

    /**
     * Retrieve the items.
     *
     * @return array
     */
    public function get_value($field): array|string|bool
    {
        return get_field($field) ?: '';
    }

    public function get_group_item_value( $field_key): array|string
    {
        $group_field = get_field('column_content') ?: '';
        return $group_field && isset($group_field[$field_key]) ? $group_field[$field_key] : '';
    }


    /**
     * Assets enqueued when rendering the block.
     */
    public function assets(array $block): void
    {
        //
    }
}
