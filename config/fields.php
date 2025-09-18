<?php

return [
    [
        'name' => 'fieldset_video_content',
        'type' => 'FieldsetOpen',
        'label' => 'Video Content',
        'tags' => 'fieldsets',
        'icon' => 'Tag',
    ],
    [
        'name' => 'fieldset_video_content_END',
        'type' => 'FieldsetClose',
        'label' => 'Close an open fieldset',
        'tags' => 'fieldsets',
        'icon' => 'Tag',
    ],
    [
        'name' => 'fieldset_image_content',
        'type' => 'FieldsetOpen',
        'label' => 'Image Content',
        'tags' => 'fieldsets',
        'icon' => 'Tag',
    ],
    [
        'name' => 'fieldset_image_content_END',
        'type' => 'FieldsetClose',
        'label' => 'Close an open fieldset',
        'tags' => 'fieldsets',
        'icon' => 'Tag',
    ],
    [
        'name' => 'fieldset_link_settings',
        'type' => 'FieldsetOpen',
        'label' => 'Link Settings',
        'tags' => 'fieldsets',
        'icon' => 'Tag',
    ],
    [
        'name' => 'fieldset_link_settings_END',
        'type' => 'FieldsetClose',
        'label' => 'Close an open fieldset',
        'tags' => 'fieldsets',
        'icon' => 'Tag',
    ],
    [
        'name' => 'headline',
        'type' => 'Text',
        'label' => 'Überschrift',
        'tags' => 'headlines',
        'icon' => 'Header',
        'width' => 25,
        'formatter' => 'TextformatterEntities',
        'inputfieldClass' => null,
    ],
    [
        'name' => 'headline_class',
        'type' => 'Text',
        'label' => 'Überschrift Klasse (CSS)',
        'tags' => 'headlines',
        'icon' => 'Header',
        'width' => 25,
        'formatter' => 'TextformatterEntities',
        'inputfieldClass' => null,
    ],
    [
        'name' => 'headline_tags',
        'type' => 'Options',
        'label' => 'Überschrift Tags (html)',
        'tags' => 'headlines',
        'icon' => 'Header',
        'width' => 25,
        'options' => '
                1=h1
                2=h2
                3=h3
                4=h4
                5=h5
                6=h6
                7=p
                ',
    ],
    [
        'name' => 'headline_align',
        'type' => 'Options',
        'label' => 'Überschrift Ausrichtung',
        'tags' => 'headlines',
        'icon' => 'Header',
        'width' => 25,
        'options' => '
                1=links
                2=mitte
                3=rechts
                ',
    ],
    [
        'name' => 'text',
        'type' => 'Textarea',
        'label' => 'Zusammenfassung',
        'tags' => 'text',
        'icon' => 'File text o',
        'width' => 100,
        'formatter' => '',
        'inputfieldClass' => 'InputfieldCKEditor'
    ],
    [
        'name' => 'text_video_speaker',
        'type' => 'Textarea',
        'label' => 'Sprechertext Video',
        'tags' => 'text',
        'icon' => 'File text o',
        'width' => 50,
        'formatter' => '',
        'inputfieldClass' => 'InputfieldCKEditor'
    ],
    [
        'name' => 'text_video_description',
        'type' => 'Textarea',
        'label' => 'Beschreibung Video',
        'tags' => 'text',
        'icon' => 'File text o',
        'width' => 50,
        'formatter' => '',
        'inputfieldClass' => 'InputfieldCKEditor'
    ],
    [
        'name' => 'text_class',
        'type' => 'Text',
        'label' => 'Container Klasse (CSS)',
        'tags' => 'text',
        'icon' => 'File text o',
        'width' => 20,
        'formatter' => 'TextformatterEntities',
        'inputfieldClass' => null,
    ],
    [
        'name' => 'text_difference_desktop',
        'type' => 'Text',
        'label' => 'Abstand in px ( Desktop )',
        'tags' => 'text',
        'icon' => 'File text o',
        'width' => 20,
        'formatter' => 'TextformatterEntities',
        'inputfieldClass' => null,
    ],
    [
        'name' => 'text_difference_tablet',
        'type' => 'Text',
        'label' => 'Abstand in px ( Tablet )',
        'tags' => 'text',
        'icon' => 'File text o',
        'width' => 20,
        'formatter' => 'TextformatterEntities',
        'inputfieldClass' => null,
    ],
    [
        'name' => 'text_difference_mobile',
        'type' => 'Text',
        'label' => 'Abstand in px ( Mobile )',
        'tags' => 'text',
        'icon' => 'File text o',
        'width' => 20,
        'formatter' => 'TextformatterEntities',
        'inputfieldClass' => null,
    ],
    [
        'name' => 'checkbox_separator',
        'type' => 'Checkbox',
        'label' => 'Trennlinie?',
        'tags' => 'settings',
        'icon' => 'Check',
        'width' => 20,
        'formatter' => null,
        'inputfieldClass' => null,
    ],
    [
        'name' => 'link_intern',
        'type' => 'Page',
        'label' => 'Link (intern)',
        'tags' => 'links',
        'icon' => 'Link',
        'width' => 50,
        'derefAsPage' => 2,
        'inputfield' => 'InputfieldPageListSelect',
        'parent_id' => 0,
        'labelFieldName' => 'title',
        'collapsed' => 0,
    ],
    [
        'name' => 'link_extern',
        'type' => 'Text',
        'label' => 'Link (extern)',
        'tags' => 'links',
        'icon' => 'Link',
        'width' => 50,
        'formatter' => 'TextformatterEntities'
    ],
    [
        'name' => 'link_text',
        'type' => 'Text',
        'label' => 'Link Text',
        'tags' => 'links',
        'icon' => 'Link',
        'width' => 25,
        'formatter' => 'TextformatterEntities'
    ],
    [
        'name' => 'link_aria',
        'type' => 'Text',
        'label' => 'Link (aria-label)',
        'tags' => 'links',
        'icon' => 'Link',
        'width' => 25,
        'formatter' => 'TextformatterEntities'
    ],
    [
        'name' => 'link_new_tab',
        'type' => 'Checkbox',
        'label' => 'Im neuen Tab öffnen?',
        'tags' => 'links',
        'icon' => 'Link',
        'width' => 25,
        'formatter' => null,
        'inputfieldClass' => null,
    ],
    [
        'name' => 'select_button_style',
        'type' => 'Options',
        'label' => 'Button Style',
        'tags' => 'settings',
        'icon' => 'Check square o',
        'width' => 25,
        'options' => '
                1=primary
                2=secondary
                3=link
                ',
    ],
    [
        'name' => 'select_image_size',
        'type' => 'Options',
        'label' => 'Bildgröße',
        'tags' => 'settings',
        'icon' => 'Check square o',
        'width' => 25,
        'options' => '
                1=Original
                2=Variationen (Desktop / Tablet / Mobile)
                3=Quadratisch
                ',
    ],
    [
        'name' => 'image',
        'type' => 'CroppableImage3',
        'label' => 'Bild',
        'tags' => 'images',
        'icon' => 'File image o',
        'width' => 50,
        'maxFiles' => 1,
        'defaultValuePage' => 0,
        'gridMode' => 'list',
        'clientQuality' => 90,
        'extensions' => 'jpg jpeg png',
        'inputfieldClass' => 'InputfieldCroppableImage3',
        'cropSetting' =>
            <<<EOT
                desktop,1920,1080
                tablet,1024,600
                mobile,600,600
                quadratisch,750,750
                EOT,
    ],
    [
        'name' => 'image_tablet',
        'type' => 'CroppableImage3',
        'label' => 'Tablet Bild',
        'tags' => 'images',
        'icon' => 'File image o',
        'width' => 25,
        'maxFiles' => 1,
        'defaultValuePage' => 0,
        'gridMode' => 'list',
        'clientQuality' => 90,
        'extensions' => 'jpg jpeg png',
        'inputfieldClass' => 'InputfieldCroppableImage3',
        'cropSetting' => '',
    ],
    [
        'name' => 'image_mobile',
        'type' => 'CroppableImage3',
        'label' => 'Mobile Bild',
        'tags' => 'images',
        'icon' => 'File image o',
        'width' => 25,
        'maxFiles' => 1,
        'defaultValuePage' => 0,
        'gridMode' => 'list',
        'clientQuality' => 90,
        'extensions' => 'jpg jpeg png',
        'inputfieldClass' => 'InputfieldCroppableImage3',
        'cropSetting' =>
            <<<EOT
                mobile,600,600
                EOT,
    ],
    [
        'name' => 'file_video',
        'type' => 'File',
        'label' => 'Video upload',
        'tags' => 'files',
        'icon' => 'File video o',
        'width' => 50,
        'extensions' => 'mp4',
        'maxFiles' => 1,
    ],
    [
        'name' => 'file_video_subtitle',
        'type' => 'File',
        'label' => 'Video Untertitel',
        'tags' => 'files',
        'icon' => 'File video o',
        'width' => 50,
        'extensions' => 'vtt',
        'maxFiles' => 1,
    ],
    [
        'name' => 'repeater_accordion',
        'type' => 'Repeater',
        'label' => 'Repeater (Accordion)',
        'tags' => 'repeater',
        'icon' => 'Repeat',
        'width' => 100,
        'fields' => [
            'headline',
            'text',
        ]
    ],
    [
        'name' => 'repeater_header_smooth',
        'type' => 'Repeater',
        'label' => 'Repeater (Header / Smooth Boxes)',
        'tags' => 'repeater',
        'icon' => 'Repeat',
        'width' => 100,
        'fields' => [
            'fieldset_image_content',
            'image',
            'image_tablet',
            'image_mobile',
            'select_image_size',
            'fieldset_image_content_END',
            'fieldset_video_content',
            'file_video',
            'file_video_subtitle',
            'text_video_speaker',
            'text_video_description',
            'fieldset_video_content_END',
            'headline',
            'headline_tags',
            'headline_class',
            'headline_align',
            'text',
            'fieldset_link_settings',
            'link_intern',
            'link_extern',
            'link_text',
            'link_aria',
            'link_new_tab',
            'select_button_style',
            'fieldset_link_settings_END',
        ]
    ],
    [
        'name' => 'matrix_content',
        'type' => 'RepeaterMatrix',
        'label' => 'Matrix (Content)',
        'tags' => 'matrix',
        'icon' => 'Codepen',
        'addType' => 1,
        'fields' => [
            'repeater_accordion',
            'repeater_header_smooth',
            'headline',
            'headline_tags',
            'headline_class',
            'headline_align',
            'text',
            'link_intern',
            'link_extern',
            'link_text',
            'link_aria',
            'link_new_tab',
            'select_button_style',
            'image',
            'image_tablet',
            'image_mobile',
            'select_image_size',
            'text_class',
            'text_difference_desktop',
            'text_difference_tablet',
            'text_difference_mobile',
            'checkbox_separator',
            'file_video',
            'file_video_subtitle',
            'text_video_speaker',
            'text_video_description',
        ],
        'matrix_items' => [
            [
                'name' => 'content_headline',
                'label' => 'Überschrift',
                'fields' => [
                    'headline',
                    'headline_tags',
                    'headline_class',
                    'headline_align',
                ]
            ],
            [
                'name' => 'content_text',
                'label' => 'Text',
                'fields' => [
                    'text',
                ]
            ],
            [
                'name' => 'content_link',
                'label' => 'Link',
                'fields' => [
                    'link_intern',
                    'link_extern',
                    'link_text',
                    'link_aria',
                    'link_new_tab',
                    'select_button_style',
                ]
            ],
            [
                'name' => 'content_image',
                'label' => 'Bild',
                'fields' => [
                    'image',
                    'image_tablet',
                    'image_mobile',
                    'select_image_size',
                ]
            ],
            [
                'name' => 'content_separator',
                'label' => 'Separator',
                'fields' => [
                    'text_class',
                    'text_difference_desktop',
                    'text_difference_tablet',
                    'text_difference_mobile',
                    'checkbox_separator',
                ]
            ],
            [
                'name' => 'content_video',
                'label' => 'Video',
                'fields' => [
                    'file_video',
                    'image',
                    'file_video_subtitle',
                    'text_video_speaker',
                    'text_video_description',
                ]
            ],
            [
                'name' => 'content_accordion',
                'label' => 'Accordion',
                'fields' => [
                    'repeater_accordion',
                ]
            ],
            [
                'name' => 'content_smooth',
                'label' => 'Smooth Boxes',
                'fields' => [
                    'repeater_header_smooth',
                ]
            ]
        ]
    ]
];