<?php
/*
 * Translation for hypeInvite
 * @package hypeInvite
 * @subpackage Languages.German
 */
$de_extend = array(
  'users:invite' => 'Einladen',
  'users:invite:invite' => 'Benutzer Einladen',
  'users:invite:emails:select' => 'E-Mail-Adressen zum Einladen',
  'users:invite:notify:subject' => 'Du wurdest eingeladen %s beizutreten',
  'users:invite:result:invited' => '%s von %s Einladungen wurden erfolgreich versandt.',
  'groups:invite:result:invited' => '%s von %s Einladungen wurden erfolgreich versandt.',
  'users:invite:emails:select:help' => 'Eine E-Mail-Adresse pro Zeile',
  'groups:invite:emails:select:help' => 'Eine E-Mail-Adresse pro Zeile',
  'users:invite:message' => 'Eine persönliche Nachricht hinzufügen',
  'groups:invite:message' => 'Eine persönliche Nachricht hinzufügen',
  'users:invite:resend' => 'E-Mail-Adressen, die bereits eingeladen wurden, erneut einladen',
  'users:invite:notify:body' => '%1$s hat dich eingeladen zu %2$s.

%3$s
Um einen Account zu erstellen, besuche bitte folgenden Link:
%4$s

%6$s',
  'users:invite:notify:invite_code' => 'Benutze bitte den folgenden Einladungscode:
%1$s',
  'users:invite:invitation_code' => 'Einladungscode',
  'users:invite:invitation_code:mismatch' => 'Der Einladungscode ist ungültig',
  'groups:invite:notify:body' => '%1$s hat dich eingeladen zu %2$s bei %3$s.

%4$s
Um einen Account zu erstellen, besuche bitte folgenden Link:
%5$s

%7$s',
  'groups:invite:notify:message' => 'Bitte benutze den folgenden Einladungscode:
%1$s',
  'groups:invite:user:subject' => '%s hat dich eingeladen %s beizutreten',
  'groups:invite:user:body' => 'Hallo %s,

%s hat dich eingeladen \'%s\' beizutregen. Klicke auf folgenden Link, um die Einladung anzunehmen:

%s',
  'groups:invite:result:skipped' => '%s von %s Einladungen wurden übersprungen, da die Benutzer bereits eingeladen wurden',
  'groups:invite:result:added' => '%s of %s Benutzern wurden als Gruppenmitglieder hinzugefügt',
  'groups:invite:result:error' => '%s von %s Einladungen konnten wegen eines Fehlers nicht gesendet werden',
  'groups:invite:not_found' => 'Gruppe nicht gefunden',
  'groups:invite:tool_option' => 'Gestatte Mitgliedern andere Benutzer einzuladen',
  'groups:invite:friends' => 'Freunde',
  'groups:invite:users' => 'Benutzer',
  'groups:invite:emails' => 'E-Mail-Adressen',
  'groups:invite:friends:select' => 'Einzuladende Freunde',
  'groups:invite:users:select' => 'Einzuladende Benutzer',
  'groups:invite:emails:select' => 'Einzuladende E-Mail-Adressen',
  'groups:invite:resend' => 'Sende erneut Einladungen an eingeladene Benutzer',
  'groups:invite:action:add' => 'Füge als Benutzer ohne Einladung hinzu',
  'groups:invite:notify:subject' => 'Du wurdest eingeladen %s beizutreten',
  'users:invite:settings:invitation_codes' => 'Einladungs-Codes',
  'users:invite:settings:invite_code_register_form' => 'Feld für den Einladungs-Code',
  'users:invite:settings:invite_code_register_form:help' => 'Falls deaktiviert, wird das Feldt für den Einladungs-Code bei der Registrierung nicht angezeigt',
  'users:invite:settings:invite_only_network:help' => 'Falls aktiviert, können sich nur Benutzer mit einem gültigen Einladungs-Code registrieren',
  'users:invite:settings:invite_only_network' => 'Registrierung nur mit Einladung',
  'users:invite:notify:message' => 'They haben die folgende Nachricht für dich angehängt:
%s',
  'groups:invite:action:invite' => 'Sende eine Einladung um ein Mitglied zu werden.',
  'groups:invite:confirm:error' => 'Deine Anfrage konnte nicht abgeschlossen werden. Bitte logge dich ein und bestätige die Einladung manuell',
  'groups:invite:settings:emails_tab:help' => 'Falls aktiviert, können Benutzer andere Leute per E-Mail in eine Gruppe einladen',
  'groups:invite:settings:emails_tab' => 'Gruppen: Erlaube Einladungen per Mail',
  'groups:invite:settings:users_tab' => 'Gruppen: Erlaube Einladungen an alle registrierten Benutzer',
  'groups:invite:settings:require_confirmation' => 'Gruppe: Erfordere die Bestätigung des Eingeladenden',
  'users:invite:result:error' => '%s von %s Einladungen konnten aufgrund von Fehlern nicht gesendet werden',
  'users:invite:result:skipped' => '%s von %s Einladungen wurden übersprungen, da die Nutzer bereits eingeladen wurden oder ein Benutzerkonto haben',
  'groups:invite' => 'Freunde einladen',
  'groups:invite:title' => 'Lade Deine Freunde ein, dieser Gruppe beizutreten',
  'groups:inviteto' => 'Freunde zur Gruppe \'%s\' einladen',
);
add_translation("de",$de_extend);
