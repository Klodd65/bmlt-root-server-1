<?php
/***********************************************************************/
/** \file	search_results_strings.inc.php
	\brief	The strings displayed in the search results for this language (English)
    
    This file is part of the Basic Meeting List Toolbox (BMLT).
    
    Find out more at: http://bmlt.magshare.org

    BMLT is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    BMLT is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this code.  If not, see <http://www.gnu.org/licenses/>.*/
	defined( 'BMLT_EXEC' ) or die ( 'Cannot Execute Directly' );	// Makes sure that this file is in the correct context.
	
	$comdef_server_admin_strings = array (  'account_disclosure'                                    =>  'Mein Account',
	                                        'account_name_label'                                    =>  'Mein Account Name:',
	                                        'account_login_label'                                   =>  'Mein Login:',
	                                        'account_type_label'                                    =>  'Ich bin ein:',
	                                        'account_type_1'                                        =>  'Server Administrator',
	                                        'account_type_2'                                        =>  'Service Body Administrator',
											'ServerMapsURL'                                         =>  'http://maps.googleapis.com/maps/api/geocode/xml?address=##SEARCH_STRING##&sensor=false',
	                                        'account_type_4'                                        =>  'Pathetic Luser Who Shouldn\'t Even Have Access to This Page -The Author of the Software Pooched it BAD!',
	                                        'account_type_5'                                        =>  'Service Body Observer',
	                                        'change_password_label'                                 =>  'Mein Passwort ändern in:',
	                                        'change_password_default_text'                          =>  'Leave This Alone If You Don\'t Want To Change Your Password',
	                                        'account_email_label'                                   =>  'Meine E-Mailadresse:',
	                                        'email_address_default_text'                            =>  'Trage eine E-Mailadresse ein',
	                                        'account_description_label'                             =>  'Meine Beschreibung:',
	                                        'account_description_default_text'                      =>  'Trage eine Beschreibung ein',
	                                        'account_change_button_text'                            =>  'Account Einstellungen ändern',
	                                        'account_change_fader_success_text'                     =>  'Die Account Information wurde erfolgreich geändert',
	                                        'account_change_fader_failure_text'                     =>  'Die Account Information wurde nicht geändert',
	                                        'meeting_editor_disclosure'                             =>  'Meetings bearbeiten',
	                                        'meeting_editor_already_editing_confirm'                =>  'Du bearbeitest gerade ein anderes Meeting. Möchtest du alle Änderungen in diesem Meeting verlieren?',
	                                        'meeting_change_fader_success_text'                     =>  'Das Meeting wurde erfolgreich geändert',
	                                        'meeting_change_fader_failure_text'                     =>  'Das Meeting wurde nicht geändert',
	                                        'meeting_change_fader_success_delete_text'              =>  'Das Meeting wurde erfolgreich gelöscht',
	                                        'meeting_change_fader_fail_delete_text'                 =>  'Das Meeting wurde nicht gelöscht',
	                                        'meeting_change_fader_success_add_text'                 =>  'Das neue Meeting wurde erfolgreich hinzugefügt',
	                                        'meeting_change_fader_fail_add_text'                    =>  'Das neue Meeting wurde nicht hinzugefügt',
	                                        'meeting_text_input_label'                              =>  'Suche nach Text:',
	                                        'access_service_body_label'                             =>  'Ich habe Zugriff zu:',
	                                        'meeting_text_input_default_text'                       =>  'Füge Suchtext ein',
	                                        'meeting_text_location_label'                           =>  'Dies ist ein Ort oder eine PLZ',
	                                        'meeting_search_weekdays_label'                         =>  'Suche nach ausgewählten Wochentagen:',
	                                        'meeting_search_weekdays_names'                         =>  array ( 'Alle', 'Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag' ),
	                                        'meeting_search_service_bodies_label'                   =>  'Suche nach ausgewählten Service Bodies:',
	                                        'meeting_search_start_time_label'                       =>  'Suche nach Meetings-Anfangszeit:',
	                                        'meeting_search_start_time_all_label'                   =>  'Jede Zeit',
	                                        'meeting_search_start_time_morn_label'                  =>  'Morgen',
	                                        'meeting_search_start_time_aft_label'                   =>  'Nachmittag',
	                                        'meeting_search_start_time_eve_label'                   =>  'Abend',
	                                        'meeting_search_no_results_text'                        =>  'Keine Meetings gefunden',
	                                        'meeting_editor_tab_specifier_text'                     =>  'Suche nach Meetings',
	                                        'meeting_editor_tab_editor_text'                        =>  'Meetings bearbeiten',
	                                        'meeting_editor_create_new_text'                        =>  'Erstelle ein neues Meeting',
	                                        'meeting_editor_location_map_link'                      =>  'Ort auf Karte',
	                                        'meeting_editor_screen_match_map_button'                =>  'Setze Karte auf Adresse',
	                                        'meeting_editor_screen_default_text_prompt'             =>  'Trage einen Text oder eine Zahl ein',
	                                        'meeting_is_published'                                  =>  'Meeting is veröffentlicht',
	                                        'meeting_editor_screen_meeting_name_label'              =>  'Meetings-Name:',
	                                        'meeting_editor_screen_meeting_name_prompt'             =>  'Trage einen Meetings-Namen ein',
	                                        'meeting_editor_screen_meeting_weekday_label'           =>  'Wochentag:',
	                                        'meeting_editor_screen_meeting_start_label'             =>  'Meetings-Anfangszeit:',
	                                        'meeting_editor_screen_meeting_am_label'                =>  'AM',
	                                        'meeting_editor_screen_meeting_pm_label'                =>  'PM',
	                                        'meeting_editor_screen_meeting_noon_label'              =>  '12:00 Uhr',
	                                        'meeting_editor_screen_meeting_midnight_label'          =>  '24:00 Uhr',
	                                        'meeting_editor_screen_meeting_duration_label'          =>  'Dauer:',
	                                        'meeting_editor_screen_meeting_oe_label'                =>  'Ende offen',
	                                        'meeting_editor_screen_meeting_cc_label'                =>  'World Service Committee Code:',
	                                        'meeting_editor_screen_meeting_cc_prompt'               =>  'Trage einen World Service Committee Code ein',
	                                        'meeting_editor_screen_meeting_contact_label'           =>  'Meetings E-Mail Kontakt:',
	                                        'meeting_editor_screen_meeting_contact_prompt'          =>  'Trage eine E-Mail for einen Kontakt nur für dieses Meeting ein',
	                                        'meeting_editor_screen_meeting_sb_label'                =>  'Service Body:',
	                                        'meeting_editor_screen_meeting_sb_default_value'        =>  'Kein Service Body ausgewählt',
	                                        'meeting_editor_screen_meeting_longitude_label'         =>  'Longitude:',
	                                        'meeting_editor_screen_meeting_longitude_prompt'        =>  'Trage einen Längengrad ein',
	                                        'meeting_editor_screen_meeting_latitude_label'          =>  'Breitengrad:',
	                                        'meeting_editor_screen_meeting_latitude_prompt'         =>  'Trage einen Breitengrad ein',
	                                        'meeting_editor_screen_meeting_location_label'          =>  'Institution:',
	                                        'meeting_editor_screen_meeting_location_prompt'         =>  'Trage einen Institutions-Namen ein (Wie einen Gebäudenamen)',
	                                        'meeting_editor_screen_meeting_info_label'              =>  'Zusätzliche Informationen:',
	                                        'meeting_editor_screen_meeting_info_prompt'             =>  'Trage zusätzliche Location Informationen ein',
	                                        'meeting_editor_screen_meeting_street_label'            =>  'Straße:',
	                                        'meeting_editor_screen_meeting_street_prompt'           =>  'Trage eine Straße ein',
	                                        'meeting_editor_screen_meeting_neighborhood_label'      =>  'Nachbarschaft:',
	                                        'meeting_editor_screen_meeting_neighborhood_prompt'     =>  'Trage eine Nachbarschaft ein (keinen Stadtteil oder Stadtbezirk)',
	                                        'meeting_editor_screen_meeting_borough_label'           =>  'Stadtteil:',
	                                        'meeting_editor_screen_meeting_borough_prompt'          =>  'Trage einen Stadtteil oder Stadtbezirk ein (keine Nachbarschaft)',
	                                        'meeting_editor_screen_meeting_city_label'              =>  'Stadt:',
	                                        'meeting_editor_screen_meeting_city_prompt'             =>  'Trage eine Stadt ein (Keine Nation oder Stadtbezirk)',
	                                        'meeting_editor_screen_meeting_county_label'            =>  'Land:',
	                                        'meeting_editor_screen_meeting_county_prompt'           =>  'Trage ein Land ein',
	                                        'meeting_editor_screen_meeting_state_label'             =>  'Bundesstaat/Bundesland:',
	                                        'meeting_editor_screen_meeting_state_prompt'            =>  'Trage ein Bundesstaat/Bundesland ein',
	                                        'meeting_editor_screen_meeting_zip_label'               =>  'Postleitzahl:',
	                                        'meeting_editor_screen_meeting_zip_prompt'              =>  'Trage eine Postleitzahl ein',
	                                        'meeting_editor_screen_meeting_nation_label'            =>  'Nation:',
	                                        'meeting_editor_screen_meeting_nation_prompt'           =>  'Trage eine Nation ein',
	                                        'meeting_editor_screen_meeting_publish_search_prompt'   =>  'Suche nach:',
	                                        'meeting_editor_screen_meeting_publish_search_pub'      =>  'nur veröfentlichte Meetings',
	                                        'meeting_editor_screen_meeting_publish_search_unpub'    =>  'nur unveröfentlichte Meetings',
	                                        'meeting_editor_screen_meeting_visibility_advice'       =>  'Dies wird in normalen Suchen nie angezeigt.',
	                                        'meeting_editor_screen_meeting_publish_search_all'      =>  'Alle Meetings',
	                                        'meeting_editor_screen_meeting_create_button'           =>  'Erstelle ein neues Meeting',
	                                        'meeting_editor_screen_delete_button'                   =>  'Lösche dieses Meeting',
	                                        'meeting_editor_screen_delete_perm_checkbox'            =>  'Lösche dieses Meeting dauerhaft',
	                                        'meeting_editor_screen_delete_button_confirm'           =>  'Bist du sicher, dass du dieses Meeting löschen möchtest?',
	                                        'meeting_editor_screen_delete_button_confirm_perm'      =>  'Dieses Meeting wird dauerhaft gelöscht!',
	                                        'meeting_editor_screen_cancel_button'                   =>  'abbrechen',
	                                        'logout'                                                =>  'Abmelden',
	                                        'meeting_editor_screen_cancel_confirm'                  =>  'Bist du sicher, dass du die Bearbeitung abbrechen möchtest und alle Änderungen verlieren möchtest?',
	                                        'meeting_lookup_failed'                                 =>  'Die Suche nach der Adresse schlug fehl.',
	                                        'meeting_lookup_failed_not_enough_address_info'         =>  'Dies ist keine gültige Adresse für eine Suche.',
	                                        'meeting_create_button_name'                            =>  'Speichere dies als ein neues Meeting',
	                                        'meeting_saved_as_a_copy'                               =>  'Speichere dies als eine Kopie (erstellt ein neues Meeting)',
	                                        'meeting_save_buttonName'                               =>  'Speichere die Änderungen an diesem Meeting',
	                                        'meeting_editor_tab_bar_basic_tab_text'                 =>  'Basic',
	                                        'meeting_editor_tab_bar_location_tab_text'              =>  'Institution',
	                                        'meeting_editor_tab_bar_format_tab_text'                =>  'Format',
	                                        'meeting_editor_tab_bar_other_tab_text'                 =>  'Sonstiges',
	                                        'meeting_editor_tab_bar_history_tab_text'               =>  'History',
	                                        'meeting_editor_result_count_format'                    =>  '%d Meetings gefunden',
	                                        'meeting_id_label'                                      =>  'Meeting ID:',
	                                        'meeting_editor_default_zoom'                           =>  '13',
	                                        'meeting_editor_default_weekday'                        =>  '2',
	                                        'meeting_editor_default_start_time'                     =>  '20:30:00',
	                                        'meeting_editor_default_duration'                       =>  '01:30:00',
	                                        'login_banner'                                          =>  'Basic Meeting List Toolbox',
	                                        'login_underbanner'                                     =>  'Root Server Administration Console',
											'login'                                                 =>  'Login ID',
                                            'password'                                              =>  'Passwort',
                                            'button'                                                =>  'Log In',
                                            'cookie'                                                =>  'Man muss Cookies erlauben um diesen Server zu verwalten.',
                                            'noscript'                                              =>  'Man kann diese Seite nicht ohne JavaScript verwalten.',
                                            'title'                                                 =>  'Bitte zum Verwalten des Servers einloggen.',
											'edit_Meeting_object_not_found'                         =>  'ERROR: Dieses Meeting wurde nicht gefunden.',
 											'edit_Meeting_object_not_changed'                       =>  'ERROR: Dieses Meeting wurde nicht geändert.',
 											'edit_Meeting_auth_failure'                             =>  'Du hast keine Berechtigung, dieses Meeting zu bearbeiten.',
                                            'not_auth_1'                                            =>  'NOT AUTHORIZED',
                                            'not_auth_2'                                            =>  'Du hast keine Berechtigung, diesen Server zu verwalten.',
                                            'not_auth_3'                                            =>  'Es gab ein Problem mit Benutzernamen oder Passwort.',
											'email_format_bad'                                      =>  'Das Format der eingefügten E-Mailadresse ist nicht richtig.',
											'history_header_format'                                 =>  '<div class="bmlt_admin_meeting_history_list_item_line_div history_item_header_div"><span class="bmlt_admin_history_list_header_date_span">%s</span><span class="bmlt_admin_history_list_header_user_span">by %s</span></div>',
											'history_no_history_available_text'                     =>  '<h1 class="bmlt_admin_no_history_available_h1">No History Available For This Meeting</h1>',
											'service_body_editor_disclosure'                        =>  'Service Body Administration',
	                                        'service_body_change_fader_success_text'                =>  'Der Service Body wurde erfolgreich geändert',
	                                        'service_body_change_fader_fail_text'                   =>  'Die Änderung des Service Body schlug fehl',
	                                        'service_body_editor_screen_sb_id_label'                =>  'ID:',
	                                        'service_body_editor_screen_sb_name_label'              =>  'Name:',
	                                        'service_body_name_default_prompt_text'                 =>  'Trage den Namen dieses Service Body ein',
	                                        'service_body_parent_popup_label'                       =>  'Service Body Parent:',
	                                        'service_body_parent_popup_no_parent_option'            =>  'No Parent (Top-Level)',
	                                        'service_body_editor_screen_sb_admin_user_label'        =>  'Primary Admin:',
	                                        'service_body_editor_screen_sb_admin_description_label' =>  'Beschreibung:',
	                                        'service_body_description_default_prompt_text'          =>  'Trage eine Beschreibung dieses Service Body ein',
	                                        'service_body_editor_screen_sb_admin_email_label'       =>  'Contact Email:',
	                                        'service_body_email_default_prompt_text'                =>  'Trage eine Kontakt-E-Mailadresse für deisen Service Body ein',
	                                        'service_body_editor_screen_sb_admin_uri_label'         =>  'Web Site URL:',
	                                        'service_body_uri_default_prompt_text'                  =>  'Trage eine Web Site URL für diesen Service Body ein',
	                                        'service_body_editor_screen_sb_admin_full_editor_label' =>  'Volle Meetingslisten Bearbeiter:',
	                                        'service_body_editor_screen_sb_admin_full_editor_desc'  =>  'Diese Benutzer können alle Meetings in diesem Service Body bearbeiten.',
	                                        'service_body_editor_screen_sb_admin_editor_label'      =>  'Basic Meeting List Bearbeiter:',
	                                        'service_body_editor_screen_sb_admin_editor_desc'       =>  'Diese Benutzer können alle Meetings in diesem Service Body bearbeiten, aber nur, wenn sie unveröffentlicht sind.',
	                                        'service_body_editor_screen_sb_admin_observer_label'    =>  'Beobachter:',
	                                        'service_body_editor_screen_sb_admin_observer_desc'     =>  'Diese Benutzer können versteckte Informationen sehen (wie E-Mailadressen), aber können nichts bearbeiten.',
	                                        'service_body_dirty_confirm_text'                       =>  'Du hast den Service Body verändert. möchtest due diese Änderungen verlieren?',
	                                        'service_body_save_button'                              =>  'Speichere diese Änderungen am Service Body',
	                                        'service_body_create_button'                            =>  'Erstelle diesen Service Body',
	                                        'service_body_delete_button'                            =>  'Lösche diesen Service Body',
	                                        'service_body_delete_perm_checkbox'                     =>  'Lösche diesen Service Body dauerhaft',
	                                        'service_body_delete_button_confirm'                    =>  'Are you sure that you want to delete this Service body?',
	                                        'service_body_delete_button_confirm_perm'               =>  'Dieser Service Body wird dauerhaft gelöscht werden!',
	                                        'service_body_change_fader_create_success_text'         =>  'Der Service Body wurde erfolgreich erstellt',
	                                        'service_body_change_fader_create_fail_text'            =>  'Das Erstellen des Serice Body schlug fehl',
	                                        'service_body_change_fader_delete_success_text'         =>  'Der Service Body wurde erfolgreich gelöscht',
	                                        'service_body_change_fader_delete_fail_text'            =>  'Das Löschen des Serice Body schlug fehl',
	                                        'service_body_change_fader_fail_no_data_text'           =>  'Das Ändern des Serice Body schlug fehl, weil keine Daten geliefert wurden',
	                                        'service_body_change_fader_fail_cant_find_sb_text'      =>  'Das Ändern des Serice Body schlug fehl, weil der Service Body nicht gefunden wurde',
	                                        'service_body_change_fader_fail_cant_update_text'       =>  'Das Ändern des Serice Body schlug fehl, weil der Service Body nicht upgedatet wurde',
	                                        'service_body_change_fader_fail_bad_hierarchy'          =>  'Das Ändern des Serice Body schlug fehl, weil der gewählte Eigentümer Service Body unter diesem Service Body ist, und nicht benutzt werden kann',
	                                        'service_body_cancel_button'                            =>  'Zurücksetzen auf Ursprung',
	                                        'service_body_editor_type_label'                        =>  'Service Body Type:',
	                                        'service_body_editor_type_c_comdef_service_body__GRP__' =>  'Gruppe',
	                                        'service_body_editor_type_c_comdef_service_body__ASC__' =>  'Gebiets Service Kommitee',
	                                        'service_body_editor_type_c_comdef_service_body__RSC__' =>  'Regionale Service Konferenz',
	                                        'service_body_editor_type_c_comdef_service_body__WSC__' =>  'World Service Conference',
	                                        'service_body_editor_type_c_comdef_service_body__MAS__' =>  'Metro Area',
	                                        'service_body_editor_type_c_comdef_service_body__ZFM__' =>  'Zonal Forum',
	                                        'service_body_editor_uri_naws_format_text'              =>  'Get The Meetings For This Service Body As A NAWS-Compatible File',
	                                        'edit_Meeting_meeting_id'                               =>  'Meeting ID:',
                                            'service_body_editor_create_new_sb_option'              =>  'Erstelle einen neuen Service Body',
	                                        'service_body_editor_screen_world_cc_label'             =>  'World Service Committee Code:',
	                                        'service_body_editor_screen_world_cc_prompt'            =>  'Trage einen Service Committee Code ein',
											'user_editor_disclosure'                                =>  'Benutzerverwaltung',
											'user_editor_create_new_user_option'                    =>  'CErstelle einen neuen Benutzer',
											'user_editor_screen_sb_id_label'                        =>  'ID:',
	                                        'user_editor_account_login_label'                       =>  'Benutzer Login:',
											'user_editor_login_default_text'                        =>  'Trage den Benutzer Login ein',
	                                        'user_editor_account_type_label'                        =>  'Benutzer ist ein:',
	                                        'user_editor_account_type_1'                            =>  'Server Administrator',
	                                        'user_editor_account_type_2'                            =>  'Service Body Administrator',
	                                        'user_editor_account_type_3'                            =>  'Service Body Editor',
	                                        'user_editor_account_type_5'                            =>  'Service Body Observer',
	                                        'user_editor_account_type_4'                            =>  'Deaktivierter Benutzer',
											'user_editor_account_name_label'                        =>  'Benutzername:',
											'user_editor_name_default_text'                         =>  'Trage den Benutzernamen ein',
											'user_editor_account_description_label'                 =>  'Beschreibung:',
											'user_editor_description_default_text'                  =>  'Trage eine Benutzerbeschreibung ein',
											'user_editor_account_email_label'                       =>  'E-Mailadresse:',
											'user_editor_email_default_text'                        =>  'Trage die Benutzer-E-Mailadresse ein',
	                                        'user_change_fader_success_text'                        =>  'Der Benutzer wurde erfolgreich geändert',
	                                        'user_change_fader_fail_text'                           =>  'Das Ändern des Benutzers schlug fehl',
	                                        'user_change_fader_create_success_text'                 =>  'Der Benutzer wurde erfolgreich erstellt',
	                                        'user_change_fader_create_fail_text'                    =>  'Das Erstellen des Benutzers schlug fehl',
	                                        'user_change_fader_delete_success_text'                 =>  'Der Benutzer wurde erfolgreich gelöscht',
	                                        'user_change_fader_delete_fail_text'                    =>  'Das Löschen des Benutzers schlug fehl',
	                                        'user_save_button'                                      =>  'Änderungen an diesem Benutzer speichern',
	                                        'user_create_button'                                    =>  'Erstelle diesen neuen Benutzer',
	                                        'user_cancel_button'                                    =>  'Zurücksetzen auf Ursprung',
	                                        'user_delete_button'                                    =>  'Lösche diesen Benutzer',
	                                        'user_delete_perm_checkbox'                             =>  'Lösche diesen Benutzer dauerhaft',
	                                        'user_password_label'                                   =>  'Ändere das Passwort zu:',
	                                        'user_new_password_label'                               =>  'Setze das Passwort zu:',
	                                        'user_password_default_text'                            =>  'Lass das frei, wenn du das Psswort nicht ändern willst',
	                                        'user_new_password_default_text'                        =>  'Du must ein Passwort für einen neuen Benutzer eintragen',
	                                        'user_dirty_confirm_text'                               =>  'Du hast den Benutzer verändert. möchtest due diese Änderungen verlieren?',
	                                        'user_delete_button_confirm'                            =>  'Bist du sicher, dass du diesen Benutzer löschen möchtest?',
	                                        'user_delete_button_confirm_perm'                       =>  'Dieser Benutzer wird dauerhaft gelöscht werden!',
	                                        'user_change_fader_create_success_text'                 =>  'Dieser Benutzer wurde erfolgreich erstellt',
	                                        'user_create_password_alert_text'                       =>  'Neue Benutzer brauchen ein Passwort. Du hast noch kein Passwort eingetragen.',
	                                        'user_change_fader_create_fail_text'                    =>  'Das Erstellen des Benutzers schlug fehl',
	                                        'user_change_fader_delete_success_text'                 =>  'Dieser Benutzer wurde erfolgreich gelöscht',
	                                        'user_change_fader_delete_fail_text'                    =>  'Das Ändern des Benutzers schlug fehl, weil keine Daten geliefert wurden',
	                                        'user_change_fader_fail_cant_find_sb_text'              =>  'Das Ändern des Benutzers  schlug fehl, weil der Benutzer nicht gefunden wurde',
	                                        'user_change_fader_fail_cant_update_text'               =>  'Das Ändern des Benutzers schlug fehl, weil der Benutzer nicht upgedatet wurde',
											'format_editor_disclosure'                              =>  'Format Verwaltung',
	                                        'format_change_fader_change_success_text'               =>  'Das Format wurde erfolgreich geändert',
	                                        'format_change_fader_change_fail_text'                  =>  'Das Ändern des Formats schlug fehl',
	                                        'format_change_fader_create_success_text'               =>  'Das Format wurde erfolgreich erstellt',
	                                        'format_change_fader_create_fail_text'                  =>  'Das Erstellen des Formats schlug fehl',
	                                        'format_change_fader_delete_success_text'               =>  'Das Format wurde erfolgreich gelöscht',
	                                        'format_change_fader_delete_fail_text'                  =>  'Das Löschen des Formats schlug fehl',
	                                        'format_change_fader_fail_no_data_text'                 =>  'Das Ändern des Formats schlug fehl, weil keine Daten geliefert wurden',
	                                        'format_change_fader_fail_cant_find_sb_text'            =>  'Das Ändern des Formatss  schlug fehl, weil das Format nicht gefunden wurde',
	                                        'format_change_fader_fail_cant_update_text'             =>  'Das Ändern des Formats schlug fehl, weil deas Format nicht upgedatet wurde',
	                                        'format_editor_name_default_text'                       =>  'Trage eine kurze Beschreibung ein',
	                                        'format_editor_description_default_text'                =>  'Trage eine detailiertere Beschreibung ein',
	                                        'format_editor_create_format_button_text'               =>  'Erstelle ein neues Format',
	                                        'format_editor_cancel_create_format_button_text'        =>  'abbrechen',
	                                        'format_editor_create_this_format_button_text'          =>  'Erstelle dieses Format',
	                                        'format_editor_change_format_button_text'               =>  'Ändere dieses Format',
	                                        'format_editor_delete_format_button_text'               =>  'Lösche dieses Format',
	                                        'format_editor_reset_format_button_text'                =>  'Zurücksetzen auf Ursprung',
	                                        'format_editor_create_format_button_text'               =>  'Erstelle ein neues Format',
	                                        'need_refresh_message_fader_text'                       =>  'Vor Benutzung dieses Bereiches sollte diese Seite neu geladen werden',
	                                        'need_refresh_message_alert_text'                       =>  'Weil Änderungen in der Service Body Verwaltung, Benutzerverwaltung oder Format Verwaltung vorgenommen wurden, ist die Information, die in diesem Bereich dargestellt wird, nicht mehr akkurat, also muss die Seite neu geladen werden. Der einfachste Weg dies zu tun ist sich abzumelden und sich wieder anzumelden.',
	                                        'format_editor_delete_button_confirm'                   =>  'Bist du sicher, dass du dieses Format löschen willst?',
	                                        'format_editor_delete_button_confirm_perm'              =>  'Dieses Format wird dauerhaft gelöscht werden!',
	                                        'min_password_length_string'                            =>  'Das Passwort ist zu kurz! Es muss mindestens %d zeichen betragen!',
	                                        'AJAX_Auth_Failure'                                     =>  'Authorisation fehlgeschlagen für diese Operation. Es kann sein, dass ein Problem mit der Serverkonfiguration besteht.',
	                                        'Observer_Link_Text'                                    =>  'Meetingssuche',
	                                    );
?>