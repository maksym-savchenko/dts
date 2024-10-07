<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class Vacancies extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Vacancies';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'Блок з вакансіями';

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
            'items' => $this->get_value('items'),
            'title' => $this->get_value('title'),
            'description' => $this->get_value('description'),
            'button' => $this->get_value('button'),
            'sub_title' => $this->get_value('sub_title'),
            'button_label' => $this->get_value('button_label'),
        ];
    }

    /**
     * The block field group.
     */
    public function fields(): array
    {
        $fields = Builder::make('vacancies');

        $fields
            ->addAccordion('vacancies', [
                    'label' => 'Вакансії',
                ]
            )
            ->addText('title', [
                'label' => 'Заголовок',
            ])
            ->addWysiwyg('description', [
                'label' => 'Опис',
                'instructions' => '',
                'tabs' => 'all',
                'toolbar' => 'basic',
                'media_upload' => 0,
            ])
            ->addText('sub_title', [
                'label' => 'Заголовок над вакансіями',
                'wrapper' => [
                    'width' => '33%',
                ],
            ])
            ->addLink('button', [
                'label' => 'Кнопка "Заповнюй анкету"',
                'return_format' => 'array',
                'wrapper' => [
                    'width' => '33%',
                ],
            ])
            ->addText('button_label', [
                'label' => 'Напис на кнопці "Завантажити ще"',
                'wrapper' => [
                    'width' => '33%',
                ],
            ])
            ->addRepeater('items')
            ->addText('vacancy', [
                'label' => 'Вакансія'
            ])
            ->endRepeater()
            ->addAccordion('accordion_end')->endpoint();

        return $fields->build();
    }

    /**
     * Retrieve the items.
     *
     * @return array
     */
    public function get_value($field): array|string
    {
        return get_field($field) ?: '';
    }

    /**
     * Assets enqueued when rendering the block.
     */
    public function assets(array $block): void
    {
        //
    }
}
