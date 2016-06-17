<?php
/**
Copyright 2011-2015 Nick Korbel

This file is part of Booked Scheduler.

Booked Scheduler is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Booked Scheduler is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Booked Scheduler.  If not, see <http://www.gnu.org/licenses/>.
*/

error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT);
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);

/**
 * Application configuration
 */
$conf['settings']['app.title'] = 'Booked Scheduler';            // application title
$conf['settings']['default.timezone'] = 'Europe/Podgorica';      // look up here http://php.net/manual/en/timezones.php
$conf['settings']['allow.self.registration'] = 'true';          // if users can register themselves
$conf['settings']['admin.email'] = 'tuarisa@gmail.com';         // email address of admin user
$conf['settings']['admin.email.name'] = 'Booked Administrator'; // name to be used in From: field when sending automatic emails
$conf['settings']['default.page.size'] = '50';                  // number of records per page
$conf['settings']['enable.email'] = 'false';                     // global configuration to enable if any emails will be sent
$conf['settings']['default.language'] = 'ru_ru';                // find your language in the lang directory
$conf['settings']['script.url'] = getenv("APP_URL").'Web';       // public URL to the Web directory of this instance. this is the URL that appears when you are logging in. leave http: or https: off to auto-detect
$conf['settings']['image.upload.directory'] = 'Web/uploads/images'; // full or relative path to where images will be stored
$conf['settings']['image.upload.url'] = 'uploads/images';       // full or relative path to show uploaded images from
$conf['settings']['cache.templates'] = 'true';                  // true recommended, caching template files helps web pages render faster
$conf['settings']['use.local.jquery'] = 'false';                // false recommended, delivers jQuery from Google CDN, uses less bandwidth
$conf['settings']['registration.captcha.enabled'] = 'false';     // recommended. unless using recaptcha this requires php_gd2 enabled in php.ini
$conf['settings']['registration.require.email.activation'] = 'false';       // requires enable.email = true
$conf['settings']['registration.auto.subscribe.email'] = 'false';           // requires enable.email = true
$conf['settings']['registration.notify.admin'] = 'false';       // whether the registration of a new user sends an email to the admin (ala phpScheduleIt 1.2)
$conf['settings']['inactivity.timeout'] = '30';                 // minutes before the user is automatically logged out
$conf['settings']['name.format'] = '{first} {last}';            // display format when showing user names
$conf['settings']['css.extension.file'] = '';                   // full or relative url to an additional css file to include. this can be used to override the default style
$conf['settings']['disable.password.reset'] = 'false';          // if the password reset functionality should be disabled
$conf['settings']['home.url'] = '';                             // the url to open when the logo is clicked
$conf['settings']['logout.url'] = '';                           // the url to be directed to after logging out
$conf['settings']['default.homepage'] = '2';                    // the default homepage to use when new users register (1 = Dashboard, 2 = Schedule, 3 = My Calendar, 4 = Resource Calendar)

$conf['settings']['schedule']['use.per.user.colors'] = 'true';         // color reservations by user
$conf['settings']['schedule']['show.inaccessible.resources'] = 'true';  // whether or not resources that are inaccessible to the user are visible
$conf['settings']['schedule']['reservation.label'] = 'Клиент: {participants} </br> Сдал: {name}';          // format for what to display on the reservation slot label.  Available properties are: {name}, {title}, {description}, {email}, {phone}, {organization}, {position}, {startdate}, {enddate} {resourcename} {participants} {invitees} {reservationAttributes}. Custom attributes can be added using att with the attribute id. For example {att1}
$conf['settings']['schedule']['hide.blocked.periods'] = 'false';        // if blocked periods should be hidden or shown

/**
 * ical integration configuration
 */
$conf['settings']['ics']['require.login'] = 'true';             // recommended, if the user must be logged in to access ics files
$conf['settings']['ics']['subscription.key'] = '';              // must be set to allow webcal subscriptions
$conf['settings']['ics']['import'] = 'false';                   // enable iCal import
$conf['settings']['ics']['import.key'] = '';                    // it's recommended  to set this key when iCal import is enabled
/**
 * Privacy configuration
 */
$conf['settings']['privacy']['view.schedules'] = 'false';                // if unauthenticated users can view schedules
$conf['settings']['privacy']['view.reservations'] = 'false';                // if unauthenticated users can view reservations
$conf['settings']['privacy']['hide.user.details'] = 'false';                // if personal user details should be displayed to non-administrators
$conf['settings']['privacy']['hide.reservation.details'] = 'false';         // if reservation details should be displayed to non-administrators
$conf['settings']['privacy']['allow.guest.reservations'] = 'false';         // if reservations can be made by users without a Booked account, if true this overrides schedule and resource visibility
/**
 * Reservation specific configuration
 */
$conf['settings']['reservation']['start.time.constraint'] = 'none';       // when reservations can be created or edited. options are future, current, none
$conf['settings']['reservation']['updates.require.approval'] = 'false';     // if updates to previously approved reservations require approval again
$conf['settings']['reservation']['prevent.participation'] = 'false';        // if participation and invitation options should be removed
$conf['settings']['reservation']['prevent.recurrence'] = 'false';           // if recurring reservations are disabled for non-administrators
$conf['settings']['reservation']['enable.reminders'] = 'false';             // if reminders are enabled. this requires email to be enabled and the reminder job to be configured
$conf['settings']['reservation']['allow.guest.participation'] = 'true';
/**
 * Email notification configuration
 */
$conf['settings']['reservation.notify']['resource.admin.add'] = 'false';
$conf['settings']['reservation.notify']['resource.admin.update'] = 'false';
$conf['settings']['reservation.notify']['resource.admin.delete'] = 'false';
$conf['settings']['reservation.notify']['resource.admin.approval'] = 'false';
$conf['settings']['reservation.notify']['application.admin.add'] = 'false';
$conf['settings']['reservation.notify']['application.admin.update'] = 'false';
$conf['settings']['reservation.notify']['application.admin.delete'] = 'false';
$conf['settings']['reservation.notify']['application.admin.approval'] = 'false';
$conf['settings']['reservation.notify']['group.admin.add'] = 'false';
$conf['settings']['reservation.notify']['group.admin.update'] = 'false';
$conf['settings']['reservation.notify']['group.admin.delete'] = 'false';
$conf['settings']['reservation.notify']['group.admin.approval'] = 'false';
/**
 * File upload configuration
 */
$conf['settings']['uploads']['enable.reservation.attachments'] = 'true';   // if reservation attachments can be uploaded
$conf['settings']['uploads']['reservation.attachment.path'] = 'uploads/reservation';    // full or relative (to the root of your installation) filesystem path to store reservation attachments
$conf['settings']['uploads']['reservation.attachment.extensions'] = 'txt,jpg,gif,png,doc,docx,pdf,xls,xlsx,ppt,pptx,csv';   // comma separated list of file extensions that users are allowed to attach. leave empty to allow all extensions
/**
 * Database configuration
 */
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
if (!$url["host"]){
	$dockerurl = "mysql://".getenv("DB_ENV_MYSQL_USER").":".getenv("DB_ENV_MYSQL_PASSWORD")."@".getenv("DB_PORT_3306_TCP_ADDR").':'.getenv("DB_PORT_3306_TCP_PORT")."/".getenv("DB_ENV_MYSQL_DATABASE");
	$url = parse_url($dockerurl);
}

$conf['settings']['database']['type'] = 'mysql';
$conf['settings']['database']['user'] = $url["user"];      // database user with permission to the booked database
$conf['settings']['database']['password'] = $url["pass"];
$conf['settings']['database']['hostspec'] = $url["host"];;        // ip, dns or named pipe
$conf['settings']['database']['name'] = substr($url["path"], 1);
/**
 * Mail server configuration
 */
$conf['settings']['phpmailer']['mailer'] = 'mail';              // options are 'mail', 'smtp' or 'sendmail'
$conf['settings']['phpmailer']['smtp.host'] = '';               // 'smtp.company.com'
$conf['settings']['phpmailer']['smtp.port'] = '25';
$conf['settings']['phpmailer']['smtp.secure'] = '';             // options are '', 'ssl' or 'tls'
$conf['settings']['phpmailer']['smtp.auth'] = 'true';           // options are 'true' or 'false'
$conf['settings']['phpmailer']['smtp.username'] = '';
$conf['settings']['phpmailer']['smtp.password'] = '';
$conf['settings']['phpmailer']['sendmail.path'] = '/usr/sbin/sendmail';
$conf['settings']['phpmailer']['smtp.debug'] = 'false';
/**
 * Plugin configuration.  For more on plugins, see readme_installation.html
 */
$conf['settings']['plugins']['Authentication'] = '';
$conf['settings']['plugins']['Authorization'] = '';
$conf['settings']['plugins']['Permission'] = '';
$conf['settings']['plugins']['PostRegistration'] = '';
$conf['settings']['plugins']['PreReservation'] = '';
$conf['settings']['plugins']['PostReservation'] = '';
/**
 * Installation settings
 */
$conf['settings']['install.password'] = getenv("INSTALL_PASSWORD");
/**
 * Pages
 */
$conf['settings']['pages']['enable.configuration'] = 'true';
/**
 * API
 */
$conf['settings']['api']['enabled'] = 'true';
/**
 * ReCaptcha
 */
$conf['settings']['recaptcha']['enabled'] = 'false';
$conf['settings']['recaptcha']['public.key'] = '';
$conf['settings']['recaptcha']['private.key'] = '';
/**
 * Email
 */
$conf['settings']['email']['default.from.address'] = '';
$conf['settings']['email']['default.from.name'] = '';
/**
 * Reports
 */
$conf['settings']['reports']['allow.all.users'] = 'true';
/**
 * Account Password Rules
 */
$conf['settings']['password']['minimum.letters'] = '0';
$conf['settings']['password']['minimum.numbers'] = '0';
$conf['settings']['password']['upper.and.lower'] = 'false';
/**
 * Label display settings
 */
$conf['settings']['reservation.labels']['ics.summary'] = '{title}';
$conf['settings']['reservation.labels']['ics.my.summary'] = '{title}';
$conf['settings']['reservation.labels']['rss.description'] = '<div><span>Start</span> {startdate}</div><div><span>End</span> {enddate}</div><div><span>Organizer</span> {name}</div><div><span>Description</span> {description}</div>';
$conf['settings']['reservation.labels']['my.calendar'] = '{resourcename} {title}';
$conf['settings']['reservation.labels']['resource.calendar'] = '{name}';
$conf['settings']['reservation.labels']['reservation.popup'] = ''; // Format for what to display in reservation popups. Possible values: {name} {dates} {title} {resources} {participants} {accessories} {description} {attributes}. Custom attributes can be added using att with the attribute id. For example {att1}
/**
 * Security header settings
 */
$conf['settings']['security']['security.headers'] = 'false'; // Enable the following options
$conf['settings']['security']['security.strict-transport'] = 'true';
$conf['settings']['security']['security.x-frame'] = 'deny';
$conf['settings']['security']['security.x-xss'] = '1; mode=block';
$conf['settings']['security']['security.x-content-type'] = 'nosniff';
$conf['settings']['security']['security.content-security-policy'] = "default-src 'self'"; // Requires careful tuning (know what your doing)
/**
 * Google Analytics settings
 */
$conf['settings']['google.analytics']['tracking.id'] = ''; // if set, Google Analytics tracking code will be added to every page in Booked
$conf['settings']['authentication']['allow.social.login'] = 'false';
/**
 * Credits functionality
 */
$conf['settings']['credits']['enabled'] = 'true';