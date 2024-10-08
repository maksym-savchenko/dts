<?php

namespace App\Options;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Options as Field;

class Options extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Options';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Хедер | Футтер | Посилання';

    /**
     * The option page field group.
     */
    public function fields(): array
    {
        $fields = Builder::make('options');

        $fields
            ->addTab('Інформація Хедер')
            ->addText('header_phone', [
                'label' => 'Номер телефону',
                'wrapper' => [
                    'width' => '50',
                ]
            ])
            ->addLink('header_link', [
                'label' => 'Кнопка в хедері',
                'wrapper' => [
                    'width' => '50',
                ]
            ])
            ->addTab('Контакти')
            ->addTextarea('contacts_title', [
                'label' => 'Заголовок',
                'wrapper' => [
                    'width' => '50%',
                    'class' => '',
                    'id' => '',
                ],
                'new_lines' => 'br',
            ])
            ->addRepeater('contacts', [
                'label' => 'Контакти',
                'button_label' => 'Додати посилання',
                'layout' => 'table',])
            ->addSelect('contact_type', [
                'label' => 'Тип контакту',
                'choices' => [
                    'phone' => 'Телефон',
                    'email' => 'Email',
                ],
                'default_value' => 'phone',
                'return_format' => 'value',
            ])
            ->addText('contact', [
                'label' => 'Контакт (Телефон/Пошта)'
            ])
            ->endRepeater()
            ->addTab('Месенджери')
            ->addTextarea('messengers_title', [
                'label' => 'Заголовок',
                'wrapper' => [
                    'width' => '50%',
                    'class' => '',
                    'id' => '',
                ],
                'new_lines' => 'br',
            ])
            ->addRepeater('messengers', [
                'label' => 'Месенджери',
                'button_label' => 'Додати посилання',
                'layout' => 'table',])
            ->addImage('icon', [
                'label' => 'Іконка месенджеру',
                'return_format' => 'array',
            ])
            ->addUrl('url', ['label' => 'Посилання'])
            ->endRepeater()
            ->addTab('Соціальні Мережі')
            ->addTextarea('social_title', [
                'label' => 'Заголовок над соц.мережами',
                'wrapper' => [
                    'width' => '50%',
                    'class' => '',
                    'id' => '',
                ],
                'new_lines' => 'br',
            ])
            ->addRepeater('socials', [
                'label' => 'Соціальні Мережі',
                'button_label' => 'Додати посилання',
                'layout' => 'table',])
            ->addImage('icon', [
                'label' => 'Іконка Соціальної мережі',
                'return_format' => 'array',
            ])
            ->addUrl('socials_url', ['label' => 'Посилання'])
            ->endRepeater()
            ->addTab('Copyright')
            ->addTextarea('copyright', [
                'label' => 'Copyright',
                'instructions' => '<code>@year</code> - буде автоматично замінятись на актуальний рік',
                'wrapper' => [
                    'width' => '50%',
                    'class' => '',
                    'id' => '',
                ],
            ])
            ->addTab('404')
            ->addText('404_title', [
                'label' => 'Заголовок'
            ])
            ->addText('404_subtitle', [
                'label' => 'Пізгаловок'
            ])
            ->addTextarea('404_description', [
                'label' => 'Спис',
                'new_lines' => 'br',
            ]);

        return $fields->build();
    }
}
