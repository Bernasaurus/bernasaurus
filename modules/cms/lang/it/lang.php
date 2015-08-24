<?php

return [
    'cms_object' => [
        'invalid_file' => 'Nome file non valido: :name. I nomi dei file possono contenere solo caratteri alfanumerici, underscores, trattini e punti. Alcuni esempi di nome di file corretti: page.htm, page, subdirectory/page',
        'invalid_property' => "La proprietà ':name' non può essere impostata",
        'file_already_exists' => "File ':name' già esistente.",
        'error_saving' => "Errore nel salvataggio del file ':name'. Verifica le autorizzazioni di scrittura.",
        'error_creating_directory' => 'Errore nella creazione della cartella :name. Verifica le autorizzazioni di scrittura.',
        'invalid_file_extension'=>'Estensione del file non valida: :invalid. Le estensioni consentite sono: :allowed.',
        'error_deleting' => "Errore nella cancellazione del file ':name'. Verifica le autorizzazioni di scrittura.",
        'delete_success' => 'Template eliminati correttamente: :count.',
        'file_name_required' => 'Il campo Nome file è obbligatorio.'
    ],
    'theme' => [
        'not_found_name' => "Tema ':name' non trovato.",
        'active' => [
            'not_set' => 'Il tema attivo non è impostato.',
            'not_found' => 'Il tema attivo non è stato trovato.',
        ],
        'edit' => [
            'not_set' => 'Il tema modificato non è impostato.',
            'not_found' => 'Il tema modificato non è stato trovato.',
            'not_match' => "L'oggetto a cui stai cercando di accedere non appartiene al tema che stai modificando. Si prega di ricaricare la pagina."
        ],
        'settings_menu' => 'Tema del sito',
        'settings_menu_description' => 'Visualizza l\'anteprima dei temi installati e seleziona un tema attivo.',
        'default_tab' => 'Proprietà',
        'name_label' => 'Nome',
        'name_create_placeholder' => 'Nome del nuovo tema',
        'author_label' => 'Autore',
        'author_placeholder' => 'Nome della persona o della società',
        'description_label' => 'Descrizione',
        'description_placeholder' => 'Descrizione del tema',
        'homepage_label' => 'Homepage',
        'homepage_placeholder' => 'URL Sito web',
        'code_label' => 'Codice',
        'code_placeholder' => 'Un codice univoco per questo tema, utilizzato per la distribuzione',
        'dir_name_label' => 'Nome della cartella',
        'dir_name_create_label' => 'La cartella di destinazione del tema',
        'theme_label' => 'Tema',
        'theme_title' => 'Temi',
        'activate_button' => 'Attiva',
        'active_button' => 'Attivo',
        'customize_theme' => 'Personalizza tema',
        'customize_button' => 'Personalizza',
        'duplicate_button' => 'Duplica',
        'duplicate_title' => 'Duplica tema',
        'duplicate_theme_success' => 'Tema duplicato con successo!',
        'manage_button' => 'Gestisci',
        'manage_title' => 'Gestisci tema',
        'edit_properties_title' => 'Tema',
        'edit_properties_button' => 'Modifica proprietà',
        'save_properties' => 'Salva proprietà',
        'import_button' => 'Importa',
        'import_title' => 'Importa tema',
        'import_theme_success' => 'Tema importato con successo!',
        'import_uploaded_file' => 'File di archivio del tema',
        'import_overwrite_label' => 'Sovrascrivi file esistenti',
        'import_overwrite_comment' => 'Deseleziona per importare solamente i nuovi file',
        'import_folders_label' => 'Cartelle',
        'import_folders_comment' => 'Seleziona le cartelle del tema che vuoi importare',
        'export_button' => 'Esporta',
        'export_title' => 'Esporta tema',
        'export_folders_label' => 'Cartelle',
        'export_folders_comment' => 'Seleziona le cartelle del tema che vuoi esportare',
        'delete_button' => 'Elimina',
        'delete_confirm' => 'Sei sicuro di voler cancellare questo tema? L\'operazione non può essere annullata!',
        'delete_active_theme_failed' => 'Impossibile eliminare il tema attivo, prova prima ad attivare un altro tema.',
        'delete_theme_success' => 'Tema eliminato con successo!',
        'create_title' => 'Crea tema',
        'create_button' => 'Crea',
        'create_new_blank_theme' => 'Crea un nuovo tema vuoto',
        'create_theme_success' => 'Tema creato con successo!',
        'create_theme_required_name' => 'Specifica un nome per il tema.',
        'new_directory_name_label' => 'Cartella di destinazione del tema',
        'new_directory_name_comment' => 'Inserisci una nuova cartella per il tema duplicato.',
        'dir_name_invalid' => 'Il nome della cartella può contenere solo numeri, lettere latine e i seguenti simboli: _-',
        'dir_name_taken' => 'Cartelle di destinazione del tema già esistente.',
        'find_more_themes' => 'Trova nuovi temi',
        'saving' => 'Salvataggio tema in corso...',
        'return' => 'Ritorna all\'elenco del temi',
    ],
    'maintenance' => [
        'settings_menu' => 'Modalità di manutenzione',
        'settings_menu_description' => 'Configura la pagina da visualizzare in modalità di manutenzione e cambia l\'impostazione.',
        'is_enabled' => 'Abilita modalità di manutenzione',
        'is_enabled_comment' => 'Se attivo i visitatori del sito vedranno la pagina selezionata sotto.'
    ],
    'page' => [
        'not_found_name' => "Pagina ':name' non trovata",
        'not_found' => [
            'label' => 'Pagina non trovata',
            'help' => 'La pagina richiesta non è stata trovata.',
        ],
        'custom_error' => [
            'label' => 'Errore nella pagina',
            'help' => "Siamo spiacenti, ma qualcosa è andato storto e la pagina non può essere visualizzata.",
        ],
        'menu_label' => 'Pagine',
        'unsaved_label' => 'Pagina/e non salvate',
        'no_list_records' => 'Pagine non trovate',
        'new' => 'Nuova pagina',
        'invalid_url' => 'Formato URL non valido. L\'URL deve iniziare con una barra e può contenere numeri, lettere latine e i seguenti simboli: ._-[]:?|/+*^$',
        'delete_confirm_multiple' => 'Sei sicuro di voler eliminare le pagine selezionate?',
        'delete_confirm_single' => 'Sei sicuro di voler eliminare questa pagina?',
        'no_layout' => '-- nessun layout --'
    ],
    'layout' => [
        'not_found_name' => "Il layout ':name' non è stato trovato",
        'menu_label' => 'Layout',
        'unsaved_label' => 'Layout non salvati',
        'no_list_records' => 'Nessun layout trovato',
        'new' => 'Nuovo layout',
        'delete_confirm_multiple' => 'Sei sicuro di voler eliminare i layouts selezionati?',
        'delete_confirm_single' => 'Sei sicuro di voler eliminare questo layout?'
    ],
    'partial' => [
        'not_found_name' => "La vista parziale ':name' non è stata trovata.",
        'invalid_name' => 'Nome della vista parziale non valido: :name.',
        'menu_label' => 'Viste parziali',
        'unsaved_label' => 'Viste parziali non salvate',
        'no_list_records' => 'Nessuna vista parziale trovata',
        'delete_confirm_multiple' => 'Sei sicuro di voler eliminare le viste parziali selezionate?',
        'delete_confirm_single' => 'Sei sicuro di voler eliminare questa vista parziale?',
        'new' => 'Nuova vista parziale'
    ],
    'content' => [
        'not_found_name' => "Il file di contenuti ':name' non è stato trovato.",
        'menu_label' => 'Contenuti',
        'unsaved_label' => 'Contenuti non salvati',
        'no_list_records' => 'Nessun file di contenuto trovato',
        'delete_confirm_multiple' => 'Sei sicuro di voler eliminare i file o le cartelle di contenuti selezionate?',
        'delete_confirm_single' => 'Sei sicuro di voler eliminare questo file di contenuti?',
        'new' => 'Nuovo file di contenuti'
    ],
    'ajax_handler' => [
        'invalid_name' => 'Nome del gestore AJAX non valido: :name.',
        'not_found' => "Il gestore AJAX ':name' non è stato trovato.",
    ],
    'cms' => [
        'menu_label' => 'CMS'
    ],
    'sidebar' => [
        'add' => 'Aggiungi',
        'search' => 'Cerca...'
    ],
    'editor' => [
        'settings' => 'Impostazioni',
        'title' => 'Titolo',
        'new_title' => 'Titolo nuova pagina',
        'url' => 'URL',
        'filename' => 'Nome file',
        'layout' => 'Layout',
        'description' => 'Descrizione',
        'preview' => 'Anteprima',
        'meta' => 'Metadati',
        'meta_title' => 'Meta Titolo',
        'meta_description' => 'Meta Descrizione',
        'markup' => 'Markup',
        'code' => 'Codice',
        'content' => 'Contenuto',
        'hidden' => 'Nascosto',
        'hidden_comment' => 'Le pagine nascoste sono accessibili solo dagli utenti collegati al pannello di controllo.',
        'enter_fullscreen' => 'Visualizza a schermo intero',
        'exit_fullscreen' => 'Esci dalla visualizzazione a schermo intero'
    ],
    'asset' => [
        'menu_label' => 'Assets',
        'unsaved_label' => 'Asset(s) non salvati',
        'drop_down_add_title' => 'Aggiungi...',
        'drop_down_operation_title' => 'Azioni...',
        'upload_files' => 'Carica file(s)',
        'create_file' => 'Crea file',
        'create_directory' => 'Crea cartella',
        'directory_popup_title' => 'Nuova cartella',
        'directory_name' => 'Nome della cartella',
        'rename' => 'Rinomina',
        'delete' => 'Elimina',
        'move' => 'Sposta',
        'select' => 'Seleziona',
        'new' => 'Nuovo file',
        'rename_popup_title' => 'Rinomina',
        'rename_new_name' => 'Nuovo nome',
        'invalid_path' => 'Il percorso può contenere solo numeri, lettere latine, spazi e i simboli seguenti: ._-/',
        'error_deleting_file' => 'Errore durante l\'eliminazione del file :name.',
        'error_deleting_dir_not_empty' => 'Errore durante l\'eliminazione della cartella :name. La cartella non è vuota.',
        'error_deleting_dir' => 'Errore durante l\'eliminazinoe della cartella :name.',
        'invalid_name' => 'Il nome può contenere solo numeri, lettere latine, spazi e i simboli seguenti: ._-',
        'original_not_found' => 'Il file o la cartella originali non sono stati trovati',
        'already_exists' => 'Un file o cartella con questo nome è già esistente',
        'error_renaming' => 'Errore nella rinominazione del file o della cartella',
        'name_cant_be_empty' => 'Il nome non può essere vuoto',
        'too_large' => 'Il file caricato è troppo grande. La dimensione massima consentita è :max_size',
        'type_not_allowed' => 'Solo i seguenti tipi di file sono consentiti: :allowed_types',
        'file_not_valid' => 'File non valido',
        'error_uploading_file' => "Errore durante il caricamento del file ':name': :error",
        'move_please_select' => 'seleziona',
        'move_destination' => 'Cartella di destinazione',
        'move_popup_title' => 'Sposta assets',
        'move_button' => 'Sposta',
        'selected_files_not_found' => 'Files selezionati non trovati.',
        'select_destination_dir' => 'Seleziona una cartella di destinazione',
        'destination_not_found' => 'Cartella di destinazione non trovata',
        'error_moving_file' => 'Errore durante lo spostamento del file :file',
        'error_moving_directory' => 'Errore durante lo spostamento della cartella :dir',
        'error_deleting_directory' => 'Errore durante l\'eliminazione della cartella originale :dir',
        'path' => 'Percorso'
    ],
    'component' => [
        'menu_label' => 'Componenti',
        'unnamed' => 'Senza nome',
        'no_description' => 'Nessuna descrizione fornita',
        'alias' => 'Alias',
        'alias_description' => 'Un nome univoco fornito a questo componente quando utilizzato nella pagina o nel layout.',
        'validation_message' => 'L\'alias del componente è obbligatorio e può contenere solo lettere latine, numeri e underscores. L\'alias deve iniziare con una lettera.',
        'invalid_request' => 'Il template non può essere salvato a causa di dati dei componenti non validi.',
        'no_records' => 'Nessun componente trovato',
        'not_found' => "Il componente ':name' non è stato trovato.",
        'method_not_found' => "Il componente ':name' non contiene il metodo ':method'."
    ],
    'template' => [
        'invalid_type' => 'Tipo di template sconosciuto.',
        'not_found' => 'Il template richiesto non è stato trovato.',
        'saved'=> 'Il template è stato salvato con successo'
    ],
    'permissions' => [
        'name' => 'Cms',
        'manage_content' => 'Gestisci contenuti',
        'manage_assets' => 'Gestisci assets',
        'manage_pages' => 'Gestisci pagine',
        'manage_layouts' => 'Gesstisci layouts',
        'manage_partials' => 'Gestisci viste parziali',
        'manage_themes' => 'Gestisci temi',
        'manage_media' => 'Gestisci elementi multimediali'
    ],
    'mediafinder' => [
        'default_prompt' => 'Fai clic sul pulsante %s per trovare un elemento multimediale'
    ],
    'media' => [
        'invalid_path' => "Percorso del file non valido: ':path'.",
        'menu_label' => 'Elementi multimediali',
        'upload' => 'Carica',
        'move' => 'Sposta',
        'delete' => 'Elimina',
        'add_folder' => 'Aggiungi cartella',
        'search' => 'Cerca',
        'display' => 'Visualizza',
        'filter_everything' => 'Tutto',
        'filter_images' => 'Immagini',
        'filter_video' => 'Video',
        'filter_audio' => 'Audio',
        'filter_documents' => 'Documenti',
        'library' => 'Libreria',
        'folder_size_items' => 'elementi',
        'size' => 'Dimensione',
        'title' => 'Titolo',
        'last_modified' => 'Ultima modifica',
        'public_url' => 'URL pubblico',
        'click_here' => 'Fai clic qui',
        'thumbnail_error' => 'Errore durante la generazione dell\'anteprima.',
        'return_to_parent' => 'Ritorna alla cartella superiore',
        'return_to_parent_label' => 'Torna su ..',
        'nothing_selected' => 'Nessun elemento selezionato.',
        'multiple_selected' => 'Elementi multipli selezionati.',
        'uploading_file_num' => 'Caricamento in corso di :number file(s)...',
        'uploading_complete' => 'Caricamento completato',
        'order_by' => 'Ordina per',
        'search' => 'Cerca',
        'folder' => 'Cartella',
        'no_files_found' => 'Nessun file corrisponde alla tua richiesta.',
        'delete_empty' => 'Seleziona elementi da eliminare.',
        'delete_confirm' => 'Vuoi davvero eliminare gli elementi selezionati?',
        'error_renaming_file' => 'Errore durante la rinominazione dell\'elemento',
        'new_folder_title' => 'Nuova cartella',
        'folder_name' => 'Nome della cartella',
        'error_creating_folder' => 'Errore durante la creazione della cartella',
        'folder_or_file_exist' => 'Una cartella o un file con il nome specificato è già esistente.',
        'move_empty' => 'Selezione elementi da spostare.',
        'move_popup_title' => 'Sposta file o cartelle',
        'move_destination' => 'Cartella di destinazione',
        'please_select_move_dest' => 'Seleziona una cartella di destinazione.',
        'move_dest_src_match' => 'Seleziona un\'altra cartella di destinazione.',
        'empty_library' => 'La libreria è vuota. Carica dei files o crea delle cartelle per iniziare.',
        'insert' => 'Inserisci',
        'crop_and_insert' => 'Ritaglia e inserisci',
        'select_single_image' => 'Seleziona una singola immagine.',
        'selection_not_image' => 'L\'elemento selezionato non è un\'immagine.',
        'restore' => 'Annulla tutte le modifiche',
        'resize' => 'Ridimensiona...',
        'selection_mode_normal' => 'Normale',
        'selection_mode_fixed_ratio' => 'Rapporto fisso',
        'selection_mode_fixed_size' => 'Dimensione fissa',
        'height' => 'Altezza',
        'width' => 'Larghezza',
        'selection_mode' => 'Metodo di selezione',
        'resize_image' => 'Ridimensiona immagine',
        'image_size' => 'Dimensione immagine:',
        'selected_size' => 'Selezionati:'
    ]
];
