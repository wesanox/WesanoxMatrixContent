<?php

return [
    [
        'name' => 'form_contact',
        'settings' => '{
            "required": false,
            "columnWidth": 0,
            "roles": {
                "form-submit": [
                    "guest"
                ],
                "form-list": [],
                "form-edit": [],
                "form-delete": [],
                "entries-list": [],
                "entries-edit": [],
                "entries-delete": [],
                "entries-page": [],
                "entries-resend": []
            },
            "flags": 0,
            "pluginActions": [],
            "framework": "Basic",
            "allowPreset": 0,
            "skipSessionKey": 0,
            "useCookies": 0,
            "partialEntryDays": 14,
            "spamEntryDays": 7,
            "submitText": "Anfrage senden",
            "successMessage": "Danke für Ihre Anfrage, wir melden uns Umgehend bei Ihnen.",
            "errorMessage": "Leider ist beim Senden etwas schief gelaufen, bitte versuchen Sie es erneut.",
            "mobilePx": 0,
            "frBasic_noLoad": [],
            "frBasic_cssURL": "/site/modules/FormBuilder/frameworks/basic/main.css",
            "frBasic_itemContent": [
                "description",
                "out",
                "error",
                "notes"
            ],
            "honeypot": [
                "city",
                "email",
                "street"
            ],
            "spamTimer": 0,
            "spamFlags": 0,
            "listFields": [],
            "entryDays": 0,
            "emailSubject": "Form Submission",
            "responderSubject": "Auto-Response",
            "saveFlags": 99,
            "spamWords": [],
            "responderTo": "mail",
            "children": {
                "firstname": {
                    "type": "Text",
                    "label": "Vorname",
                    "required": false,
                    "columnWidth": 50,
                    "collapsed": "0",
                    "minlength": 0,
                    "maxlength": 2048,
                    "showCount": "0",
                    "size": 0,
                    "placeholder": "Ihr Vorname"
                },
                "lastname": {
                    "type": "Text",
                    "label": "Nachname",
                    "required": false,
                    "columnWidth": 50,
                    "collapsed": "0",
                    "minlength": 0,
                    "maxlength": 2048,
                    "showCount": "0",
                    "size": 0,
                    "placeholder": "Ihr Nachname"
                },
                "mail": {
                    "type": "Email",
                    "label": "Mail",
                    "required": 1,
                    "columnWidth": 0,
                    "collapsed": "0",
                    "requiredAttr": 1,
                    "minlength": 0,
                    "maxlength": 250,
                    "showCount": "0",
                    "size": 0,
                    "placeholder": "E - Mail Adresse",
                    "confirm": 1,
                    "allowIDN": "0"
                },
                "message": {
                    "type": "Textarea",
                    "label": "Nachricht",
                    "required": 1,
                    "columnWidth": 0,
                    "collapsed": "0",
                    "requiredAttr": 1,
                    "minlength": 0,
                    "maxlength": 0,
                    "showCount": "0",
                    "rows": 10,
                    "placeholder": "Ihre Nachricht"
                },
                "imprint": {
                    "type": "Checkbox",
                    "label": "Datenschutzerklärung",
                    "required": false,
                    "columnWidth": 0,
                    "collapsed": "0",
                    "checkedValue": "1"
                },
                "street": {
                    "type": "Hidden",
                    "label": "street",
                    "required": false,
                    "columnWidth": 0
                },
                "city": {
                    "type": "Hidden",
                    "label": "city",
                    "required": false,
                    "columnWidth": 0
                },
                "email": {
                    "type": "Hidden",
                    "label": "email",
                    "required": false,
                    "columnWidth": 0
                }
            }
        }'
    ]
];

