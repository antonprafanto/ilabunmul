<?php

    return [

        'plugin' => [
            'name'        => 'Magic Forms',
            'description' => 'Eenvoudige AJAX-formulieren maken',
        ],

        'menu' => [
            'label'    => 'Magic Forms',
            'records'  => ['label' => 'Records'],
            'exports'  => ['label' => 'Exporteren'],
            'settings' => 'Configureer plugin parameters',
        ],

        'controllers' => [
            'records' => [
                'title'      => 'Bekijk Records',
                'view_title' => 'Record Details',
                'error'      => 'Record niet gevonden',
                'deleted'    => 'Record succesvol verwijderd',
                'columns'    => [
                    'id'         => 'Record ID',
                    'group'      => 'Groep',
                    'ip'         => 'IP adres',
                    'form_data'  => 'Opgeslagen velden',
                    'files'      => 'Bijlagen',
                    'created_at' => 'Gemaakt',
                ],
                'buttons' => [
                    'read'       => 'Als gelezen markeren',
                    'unread'     => 'Als ongelezen markeren',
                    'gdpr_clean' => 'AVG opschoning uitvoeren',
                ],
                'alerts' => [
                    'gdpr_confirm' => "Weet u zeker dat u oude gegevens wilt wissen?\nDeze actie kan niet ongedaan worden gemaakt!",
                    'gdpr_success' => 'AVG-opschoning is met succes uitgevoerd',
                    'gdpr_perms'   => 'Je hebt geen toestemming voor deze functie.',
                ],
            ],
            'exports' => [
                'title'                 => 'Exporteer Records',
                'breadcrumb'            => 'Exporteren',
                'filter_section'        => '1. Filter records',
                'filter_type'           => 'Exporteer alle records',
                'filter_groups'         => 'Groepen',
                'filter_date_after'     => 'Vanaf datum',
                'filter_date_before'    => 'Tot datum',
                'options_section'       => '2. Extra opties',
                'options_metadata'      => 'Metagegevens meenemen',
                'options_metadata_com'  => 'Exporteer records met metadata (Record ID, groep, IP, aanmaakdatum)',
                'options_deleted'       => 'Verwijderde records meenemen',
                'options_delimiter'     => 'Use alternative delimiter',
                'options_delimiter_com' => 'Gebruik alternatief scheidingsteken',
                'options_utf'           => 'Encoderen in UTF-8',
                'options_utf_com'       => 'Codeer uw csv in UTF-8 om niet-standaard tekens te ondersteunen',
            ],
        ],

        'components' => [
            'generic_form' => [
                'name'        => 'Algemeen AJAX Formulier',
                'description' => 'Toont standaard een algemeen formulier; overschrijf component HTML met uw aangepaste velden.',
            ],
            'upload_form' => [
                'name'        => 'Upload AJAX Formulier [BETA]',
                'description' => 'Laat zien hoe je bestandsuploads kunt implementeren in je formulier.',
            ],
            'empty_form' => [
                'name'        => 'Leeg AJAX Formulier',
                'description' => 'Maak een leeg sjabloon voor uw aangepaste formulier; overschrijf component HTML.',
            ],
            'shared' => [
                'csrf_error'        => 'Formulier sessie verlopen! Vernieuw de pagina.',
                'recaptcha_warn'    => 'Waarschuwing: reCAPTCHA is niet goed geconfigureerd. Ga aub naar Backend > Instellingen > CMS > Magic Forms en configureer.',
                'group_validation'  => 'Formulier Validatie',
                'group_messages'    => 'Flash Berichten',
                'group_mail'        => 'Notificatie Instellingen',
                'group_mail_resp'   => 'Auto-Response Instellingen',
                'group_settings'    => 'Meer Instellingen',
                'group_security'    => 'Beveiliging',
                'group_recaptcha'   => 'reCAPTCHA Instellingen',
                'group_advanced'    => 'Geavanceerde Instellingen',
                'group_uploader'    => 'Uploader Instellingen',
                'validation_req'    => 'De property is verplicht',
                'group'             => ['title' => 'Groep'                        , 'description' => 'Organiseer uw formulieren met een aangepaste groepsnaam. Deze optie is handig bij het exporteren van gegevens.'],
                'rules'             => ['title' => 'Regels'                       , 'description' => 'Stel je eigen regels in met Laravel validatie'],
                'rules_messages'    => ['title' => 'Regels Berichten'             , 'description' => 'Gebruik uw eigen regels berichten met behulp van Laravel validatie'],
                'custom_attributes' => ['title' => 'Aangepaste attributen'        , 'description' => 'Gebruik je eigen aangepaste attributen met Laravel validatie'],
                'messages_success'  => ['title' => 'Succes'                       , 'description' => 'Bericht wanneer het formulier succesvol is verzonden', 'default' => 'Uw formulier is succesvol verzonden'],
                'messages_errors'   => ['title' => 'Fouten'                       , 'description' => 'Bericht wanneer het formulier fouten bevat'         , 'default' => 'Er zijn fouten opgetreden bij uw inzending'],
                'messages_partial'  => ['title' => 'Gebruik Aangepaste Partial'   , 'description' => 'Overschrijf flashberichten met uw eigen partials in uw thema'],
                'mail_enabled'      => ['title' => 'Stuur Notificaties'           , 'description' => 'Stuur e-mailmeldingen over elk ingediend formulier'],
                'mail_subject'      => ['title' => 'Onderwerp'                    , 'description' => 'Standaard e-mail onderwerp overschrijven'],
                'mail_recipients'   => ['title' => 'Ontvangers'                   , 'description' => 'Geef e-mailontvangers op. Gebruik e-mailadressen als sleutels en namen als waarden.'],
                'mail_bcc'          => ['title' => 'BCC'                          , 'description' => 'Stuur een BBC naar de ontvangers (één adres per regel)'],
                'mail_replyto'      => ['title' => 'ReplyTo E-mail Veld'          , 'description' => 'Formulierveld met het e-mailadres van de afzender dat moet worden gebruikt als "ReplyTo"'],
                'mail_template'     => ['title' => 'E-mail sjabloon'              , 'description' => 'Gebruik een aangepast e-mail sjabloon. Specificeer sjabloon code zoals "blakejones.magicforms::mail.notification" (te vinden onder Instellingen, E-mail sjablonen). Laat leeg om de standaard te gebruiken.'],
                'mail_uploads'      => ['title' => 'Verstuur uploads'             , 'description' => 'Verstuur uploads als bijlagen'],
                'mail_resp_enabled' => ['title' => 'Stuur automatisch antwoord'   , 'description' => 'Stuur een automatische e-mail naar de persoon die het formulier heeft ingediend'],
                'mail_resp_field'   => ['title' => 'E-mail Veld'                  , 'description' => 'Formulierveld met het e-mailadres van de ontvanger van het automatische antwoord'],
                'mail_resp_from'    => ['title' => 'Verzender adres'              , 'description' => 'E-mailadres van de afzender van de auto-response e-mail (bv. noreply@yourcompany.com)'],
                'mail_resp_subject' => ['title' => 'Onderwerp'                    , 'description' => 'Standaard e-mail onderwerp overschrijven'],
                'reset_form'        => ['title' => 'Reset Form'                   , 'description' => 'Formulier terugzetten na succesvol verzenden'],
                'redirect'          => ['title' => 'Redirect on Success'          , 'description' => 'Doorverwijzen bij succes'],
                'inline_errors'     => ['title' => 'Inline fouten'                , 'description' => 'Toon inline fouten. Dit heeft extra code nodig, zie de documentatie voor meer info info.', 'disabled' => 'Uitgeschakeld', 'display' => 'Toon fouten', 'variable' => 'JS variabele'],
                'js_on_success'     => ['title' => 'JS bij Succes'                , 'description' => 'Voer aangepaste JavaScript code uit wanneer het formulier succesvol is verstuurd. Gebruik geen script tags.'],
                'js_on_error'       => ['title' => 'JS bij Fout'                  , 'description' => 'Voer aangepaste JavaScript code uit als het formulier niet valideert. Gebruik geen script tags.'],
                'allowed_fields'    => ['title' => 'Toegestane Velden'            , 'description' => 'Geef aan welke velden moeten worden gefilterd en opgeslagen (voeg één veldnaam per regel toe)'],
                'anonymize_ip'      => ['title' => 'Anonimiseer IP'               , 'description' => 'Sla het IP adres niet op', 'full' => 'Volledig', 'partial' => 'Gedeeltelijk', 'disabled' => 'Uitgeschakeld'],
                'sanitize_data'     => ['title' => 'Sanitize form data'           , 'description' => 'Formuliergegevens zuiveren', 'disabled' => 'Uitgeschakeld', 'htmlspecialchars' => 'Gebruik htmlspecialchars'],
                'recaptcha_enabled' => ['title' => 'Schakel reCAPTCHA in'         , 'description' => 'Plaats de reCAPTCHA widget op uw formulierm'],
                'recaptcha_theme'   => ['title' => 'Thema'                        , 'description' => 'Het kleurenthema van de widget', 'light'  => 'Licht' , 'dark'    => 'Donker'],
                'recaptcha_type'    => ['title' => 'Type'                         , 'description' => 'Het type CAPTCHA dat moet worden gebruikt' , 'image'  => 'Afbeelding' , 'audio'   => 'Audio'],
                'recaptcha_size'    => [
                    'title' => 'Grootte',
                    'description' => 'De grootte van de widget',
                    'normal' => 'Normaal',
                    'compact' => 'Compact',
                    'invisible' => 'Onzichtbaar',
                ],
                'skip_database'      => ['title' => 'Sla database over'       , 'description' => 'Sla dit formulier niet op in de database. Handig als je gebeurtenissen wilt gebruiken met je aangepaste plugin.'],
                'emails_date_format' => ['title' => 'Datumnotatie op e-mails' , 'description' => 'Aangepaste notatie instellen voor datums in e-mailonderwerpen.'],
                'uploader_enable'    => ['title' => 'Sta uploads toe'         , 'description' => 'Bestanden uploaden inschakelen. U moet deze optie expliciet inschakelen als veiligheidsmaatregel.'],
                'uploader_multi'     => ['title' => 'Meerdere bestanden'      , 'description' => 'Sta uploaden van meerdere bestanden toe'],
                'uploader_pholder'   => ['title' => 'Placeholder tekst'       , 'description' => 'Formulering die wordt weergegeven wanneer geen bestand is geüpload', 'default' => 'Klik of sleep bestanden om te uploaden'],
                'uploader_maxsize'   => ['title' => 'Limiet bestandsgrootte'  , 'description' => 'De maximale bestandsgrootte die kan worden geüpload in megabytes'],
                'uploader_types'     => ['title' => 'Toegestane bestandstypen', 'description' => 'Toegestane bestandsextensies of sterretje (*) voor alle types (één extensie per regel)'],
                'uploader_remFile'   => ['title' => 'Popup tekst verwijderen' , 'description' => 'Tekst die wordt weergegeven in de popup wanneer u een bestand verwijdert', 'default' => 'Weet je het zeker?'],
            ],
        ],

        'settings' => [
            'tabs'                    => ['general' => 'Algemeen', 'recaptcha' => 'reCAPTCHA', 'gdpr' => 'AVG'],
            'section_flash_messages'  => 'Flash Berichten',
            'global_messages_success' => ['label' => 'Globaal succesbericht', 'comment' => '((Deze instelling kan worden overschreven vanuit het component))', 'default' => 'Uw formulier is succesvol verzonden'],
            'global_messages_errors'  => ['label' => 'Globaal foutbericht' , 'comment' => '((Deze instelling kan worden overschreven vanuit het component))', 'default' => 'Er zijn fouten opgetreden bij uw inzending'],
            'plugin_help'             => 'U kunt de plugin documentatie vinden op de GitHub repo:',
            'global_hide_button'      => 'Verberg menu item',
            'global_hide_button_desc' => 'Handig als je events wilt gebruiken met je aangepaste plugin.',
            'section_recaptcha'       => 'reCAPTCHA Instellingen',
            'recaptcha_site_key'      => 'Site key',
            'recaptcha_secret_key'    => 'Secret key',
            'gdpr_help_title'         => 'Informatie',
            'gdpr_help_comment'       => 'Voor AVG-wetgeving in Europa, u kunt records niet onbeperkt bewaren, u moet ze wissen na een bepaalde periode, afhankelijk van uw behoeften',
            'gdpr_enable'             => 'Schakel AVG in',
            'gdpr_days'               => 'Bewaar de gegevens maximaal X dagen',
        ],

        'permissions' => [
            'tab'             => 'Magic Forms',
            'access_records'  => 'Toegang tot opgeslagen formuliergegevens',
            'access_exports'  => 'Toegang tot export van opgeslagen gegevens',
            'access_settings' => 'Toegang tot instellingen',
            'gdpr_cleanup'    => 'AVG opschoning uitvoeren',
        ],

        'mails' => [
            'form_notification' => ['description' => 'Notificeer wanneer een formulier wordt verzonden'],
            'form_autoresponse' => ['description' => 'Automatisch antwoord wanneer een formulier wordt verzonden'],
        ],

        'validation' => [
            'recaptcha_error' => 'Kan reCAPTCHA-veld niet valideren',
        ],

        'classes' => [
            'GDPR' => [
                'alert_gdpr_disabled' => 'AVG opties zijn uitgeschakeld',
                'alert_invalid_gdpr'  => 'Ongeldige AVG instellingswaarde voor dagen',
            ],
        ],

    ];
