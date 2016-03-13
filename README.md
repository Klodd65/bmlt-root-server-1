DESCRIPTION
-----------

The Basic Meeting List Toolbox (BMLT, hereafter) is a very powerful client/server system
that has been written for a very specific purpose, for a very specific clientele.

It is designed to track and locate Narcotics Anonymous meetings, which are regularly-
scheduled weekly, recurring events.

The intended clientele is Narcotics Anonymous Service bodies. They implement a BMLT
server, and provide the server to other NA Service bodies.

You can find out way too much about the BMLT on [the BMLT Documentation Site](http://bmlt.magshare.net).

[You can follow us on Twitter for release announcements](http://twitter.com/BMLT_NA).

This project is the "root" server for the BMLT. It is the "server" part of the BMLT
"client/server" architecture.

The project is actually several years old. To see the pre-[GitHub](http://github.com) history, visit the
original SourceForge page at [the Original SourceForge Page](https://sourceforge.net/projects/comdef/).

I decided to start new on [GitHub](http://github.com), as opposed to bringing over the SourceForge project,
in order to reduce disk space usage, and because it's a pain to rearrange a standard
SVN structure to Git.

NOTE: The repository origin has been transferred to [Bitbucket](http://bitbucket.org)! [GitHub](http://github.com) is now only archival (ends at version 2.0.2).

REQUIREMENTS
------------

The entire system is written in PHP, JavaScript, XHTML and CSS. Most of the code is PHP.

PHP 5.2 or above is required to establish a root server, and 5.0 or above for a satellite.

For more information about server requirements, see [the page on Server Requirements](http://bmlt.magshare.net/specific-topics/server-requirements/)
 
INSTALLATION
------------

You set up a root server as the central database and administration area for a BMLT
implementation, but most people access it through what we call "satellite servers." These
satellites comprise the "client" part of the BMLT "client/server" architecture.

For instructions on installing the root server, see [the page on installing a new Root Server](http://bmlt.magshare.net/installing-a-new-root-server/)

CHANGELIST
----------
** Version 2.7.1 **

- March 12, 2016
- Fixed an issue found immediately after release with the Observer Browser on some servers that use subdomains that point to the main directory.

** Version 2.7.0 **

- March 12, 2016
- Added the semantic workshop as a submodule. You can reach it by calling "/main_server/semantic".
- Fixed a minor issue with JSON responses. Numeric "0" was being sent back as an empty string ("").
- Removed the ancient header stuff from the semantic interface XHTML.
- Fixed a few warnings.
- Fixed a problem with quotes (") in JSON data.
- Fixed an issue where edit cuts weren't being recognized by text boxes.
- Fixed an SSL issue, where the SSL version of Google Maps was not being called in the admin.
- Fixed an SSL issue with the observer browser.

** Version 2.6.32 **

- March 5, 2016
- Added the JSON data field in the change response to the XML schema.
- Changed the way the data is stored in the JSON data field. It is now kept in up to 2 objects: "before" and "after".
- Fixed a bug with the editor paste functionality.
- Fixed an issue with JSON special character encoding that caused issues on some servers.

** Version 2.6.31 **

- February 17, 2016
- Added a JSON extra data column to the GetChanges response. This means that getting a change record for a meeting will give you a lot more information about that meeting.
- Fixed a fairly minor cosmetic bug in the history display, where "&" was being shown as "&amp;" (over-aggressive HTML conversion).

** Version 2.6.30 **

- January 6, 2016
- Fixed a bug introduced in .29, where the AJAX calls were being borked.

** Version 2.6.29 **

- January 5, 2016
- Added an onpaste handler to the editor text fields (detects paste).
- Fixed an issue with SSL.

** Version 2.6.28 **

- August 15, 2015
- Put in a fix for possible corruption of some fields that were previously hidden, but are now visible.
- Fixed an issue where a user could not properly change their own user info (My Account).

** Version 2.6.26 **

- June 26, 2015
- Added some new fields to the serverInfo response.

** Version 2.6.25 **

- June 25, 2015
- Added a flag to the serverInfo response that tells whether or not semantic administration is enabled.

** Version 2.6.24 **

- May 29, 2015
- Fixed an issue that borked the distance display for the iOS app and the mobile client.

** Version 2.6.23 **

- May 25, 2015
- Fixed some CSS issues with the Satellite Base Class. This is only reflected in the logged-in (Observer) browser.

** Version 2.6.22 **

- April 29, 2015

- Fixed a bug in the meeting editor, where setting the duration hour to 0 would fail to be recognized.

** Version 2.6.21 **

- April 9, 2015

- Fixed a bug in the simple response format fetch. Sometimes, the wrong formats were being returned.

** Version 2.6.20 **

- March 28, 2015

- Fixed a bug in the simple response format fetch. Sometimes, the wrong formats were being returned.
- Added a basic server info semantic call. This returns the version and the lang enums.

** Version 2.6.19 **

- March 21, 2015

- Fixed an old JavaScript bug in the meeting editor, where the "Create New Meeting" screen would sometimes refuse to enable the save button.

** Version 2.6.18 **

- March 19, 2015

- Fixed an old issue, where the nation can keep repeating itself ad nauseam.

** Version 2.6.17 **

- March 18, 2015

- Fixed a bug, in which the CSV output was missing its "published" column.
- Fixed a bug, in which the JSON response data format was different from the previous version, and interfered with 3rd-party applications.

** Version 2.6.16 **

- March 8, 2015

- Fixed a bug introduced in Version 2.6.14 that pooched the [[bmlt_simple]] shortcode.

** Version 2.6.15 **

- March 4, 2015

- Made a change in the way the WORLD IDs are returned in the semantic selectors. They are now all properly formatted.
- Added a special extra field to XML meeting searches that shows an aggregate for location searches. Useful for maps.
- Added the ability to get only this new location data. This applies to CSV, XML or JSON, but only XML gets it as a matter of course.
- Reformatted the new field values return slightly.
- Fixed an XML schema bug (minor).

** Version 2.6.14 **

- February 22, 2015

- Fixed an issue where the "Change Meeting" button wasn't being activated for some browsers when editing the "other" tab values.
- The above fix also addresses an older issue that could cause "Other" tab values to be assigned incorrectly.

** Version 2.6.13 **

- February 17, 2015

- Made some changes to make the new semantic responses even more powerful. They are now sorted and reduced.
- Fixed a bug in the new semantic responses that reacted badly to commas in data values.
- The internal response data from the new semantic calls is now in CSV, which makes it a lot more useful.

** Version 2.6.12 **

- February 17, 2015
- You are now able to filter for specific formats in the new semantic "GetFieldValues" call by adding a "&specific_formats=1,2,3..." to the parameter list. Also, you can make it an AND (all values) search by adding "&all_formats," which means that the meeting must have all of the given formats to match. Default is "OR," so any one of the formats will trigger a match.

** Version 2.6.11 **

- February 16, 2015
- Corrected a couple of bugs in the new semantic "GetFieldValues" and "GetFieldKeys" routines. These make the BMLT slightly more awesome.

** Version 2.6.10 **

- February 16, 2015
- Corrected a bug introduced in the previous release.
- The install is substantially smaller than the previous release.

** Version 2.6.9 **

- February 16, 2015
- Added the capacity to extract the field keys and values semantically (only of use to administrators and semantic interfaces, but extremely powerful).

** Version 2.6.8 **

- February 14, 2015 (Happy Valentine's Day!)
- Fixed a fairly minor bug in the semantic sorter, in which blank fields were not being sorted at all (they need to be first).

** Version 2.6.7 **

- January 31, 2015
- Fixed an issue with the extra fields display in the regular shortcode display details (browser).
- Fixed an issue where the arbitrary fields were actually creating too many results (browser).
- Now hide the distance_in_km/miles parameters in the meeting details (these are internal parameters -browser).

** Version 2.6.6 **

- January 26, 2015
- Accidentally removed the text for the NAWS format dump in the Service Body Editor. This has been fixed.

** Version 2.6.5 **

- January 26, 2015
- Addressed a couple of PHP warnings.
- Fixed a nasty bug that could appear in a brand new install. The editor would display as blank after creating the first user.

** Version 2.6.4 **

- January 13, 2015
- Added the main table fields to the data templates in the semantic admin.
- Now allow the language to be forced when instantiating the server object (minimally useful, but should be in place).
- Fixed a bug with including files in a non-standard port server.
- Fixed a couple of bugs that interfered with deployment on an IIS server.

** Version 2.6.3 **

- January 11, 2015
- Added some more steps to the the default values for the "auto-range," and expanded it to up to 200 miles.
- Added some special SQL sauce for the distance search that makes distance searching more accurate (It now uses a simple [Haversine](http://en.wikipedia.org/wiki/Haversine_formula) formula, executed in SQL, in the initial database triage). It will tend to return more meetings, but not a whole ton more. Basically, it just improves the quality of the auto-range. This works well with the new added steps.

** Version 2.6.2 **

- January 9, 2015
- Tweaked the syntax of this document's changelist to be full markdown, to make it more readable on [Bitbucket](http://bitbucket.org).
- Fixed a minor bug, where the initial Service Body Editor NAWS Dump URI was not the new publicly-accessible one.
- Greatly simplified the distance search functionality, and now allow it to be customized. This was a request from a largely rural community.
- Added a default set of distance ranges for the radius hunt.

** Version 2.6.1 **

- January 5, 2015
- Made a slight change, so that the formats are not automatically read upon a server instance being created. Instead, we wait until the first call to load them. This prevents them from being loaded in cases where they are not required.
- Fixed an issue caused by getting too fancy with radius ranges, and ended up causing problems in the hunt for radius functionality. Need to re-explore this.

** Version 2.6.0 **

- January 4, 2015
- Changed the NAWS Dump Link in the Service Body Editor to use the new open semantic URI.
- Fixed an admin bug, in which meetings that an admin can't edit can be listed in the search results.
- Fixed a bug, in which doing searches for meetings by ID would return unpublished meetings.
- Added a bit of a kludge to number-only location searches (postal codes). I now append the region bias to the string, as it looks like Google ignores the "region=" parameter.
- Created a common URL to the main server (utility function). This allows use of HTTPS and increases overall quality.
- The server now returns only the formats used somewhere in the database in response to the semantic "switcher=GetFormats" call.
- Continuing to look for places where I can take security measures. Added a few "belt & suspenders" methods, like reloading the user from the DB at every opportunity.
- Added the ability to edit meetings via an XML or JSON semantic interface.

** Version 2.5.3 **

- November 27, 2014 (Happy Thanksgiving!)
- The 2.5.2 "fix" was inadequate. I needed to make the "other" field editing more robust.

** Version 2.5.2 **

- November 26, 2014
- The 2.5.1 fix exposed another bug in administering the "other" fields.

** Version 2.5.1 **

- November 26, 2014
- Fixed a typo that interfered with the new arbitrary fields functionality.

** Version 2.5.0 **

- November 23, 2014
- Added support for arbitrary fields in meetings (had neglected to support these after the 2.0 release).

** Version 2.4.10 **

- October 14, 2014
- Fixed another issue, where simple searches weren't sorting properly (again, overzealous warning compensation).

** Version 2.4.9 **

- October 13, 2014
- Fixed another issue, where meeting edits were being ignored (again, overzealous warning compensation).

** Version 2.4.8 **

- October 12, 2014
- Fixed an issue where low-numbered ASCs and RSCs did not have leading zeroes in the NAWS export, which could cause issues for NAWS.
- Fixed a couple of issues with the meeting editors, where inactive anchor elements could cause "page not found" errors.
- Fixed a bug, where searching for selected weekdays, formats or languages stopped working.

** Version 2.4.7 **

- October 9, 2014
- Added an ID to the weekday sections of the simple response (allows easy linking on display pages).
- Fixed a number of warnings.
- Added some satellite fixes.
- Fixed a rather nasty error in the semantic response that could have caused a lot of bad search results. I'm shocked I haven't heard anything.

** Version 2.4.6 **

- August 19, 2014
- Fixed an issue with apostrophes (') causing problems.
- Added a user-agent to the cCURL calls, as some servers filter out cURL calls.
- Added a simpler, more direct semantic access to NAWS dumps.

** Version 2.4.5 **

- July 10, 2014
- Added true Spanish localization to the Root Server.
- Added a cookie for storing the selected language.
- Tweaked the French localization.
- Added a weekday wrapper around block mode simple responses. This allows better integration of search results with CSS.
- Fixed an issue with double-quotes entered on some servers.

** Version 2.4.4 **

- June 9, 2014
- Fixed a bug in the semantic interfaces that caused problems with clients. If a meeting had no name, a blank name was returned. It now returns a generic "NA Meeting".
- Fixed a bug in the administration system that prevented logins after a logout.

** Version 2.4.3 **

- June 4, 2014
- Fixed a bug introduced by the new code (It only manifested when sending mail, so no one has been affected).

** Version 2.4.2 **

- June 4, 2014
- Simplified the response for the test in the email sender.
- Made the email generated from contacts a bit more explanatory.
- Improved the ability to access the browser and the editor for meetings. This works in conjunction with the email sent from contacts.
- Prevent duplicate emails in the contact email.

** Version 2.4.1 **

- June 1, 2014
- Oops. Forgot to turn off debug mode.

** Version 2.4.0 **

- May 31, 2014
- Fixed some French localization issues with the admin screens.
- Added the ability to specify a language for the administration, so multiple languages can be used for a root server.
- Added (re-added, really) the ability to contact the meeting list administrators for a meeting with a message.
- Added support for directly going to the editor for a particular meeting, via URI.
- Added the capability to continue to the desired editing function after being stopped for a login.

** Version 2.3.5 **

- May 1, 2014
- Added a couple more Swedish translated strings.
- Fixed a bug in the French translation that caused the server admin to hose up if that language was specified.

** Version 2.3.4 **

- April 2, 2014
- Removed a redundant include of the Google Maps API from the admin screen.
- Fixed a JavaScript error with the set map to address functionality of the editor.

** Version 2.3.3 **

- March 12, 2014
- Fixed a rather embarrassing error, in which several fields were left out of deleted meetings in the NAWS export. All root servers that plan to sync with NAWS should apply this update.

** Version 2.3.2 **

- March 7, 2014
- Removed a couple of redundant entries from the "seed" format database table.

** Version 2.3.1 **

- March 5, 2014
- Added the ability to convey special language formats to NAWS.
- Fixed a bug, in which all deleted meetings in the NAWS dump had the same change date.
- Fixed a bug, in which all deleted meetings, regardless of Service body, were sent to NAWS. It now only filters for the deleted meetings attached to the requesting Service body.

** Version 2.3.0 **

- March 1, 2014
- Added a button to the meeting editor location tab, to set the meeting long/lat to the address (people were missing the button in the map).
- Fixed a mild bug, where the confirm dialog was shown twice when canceling a meeting edit.
- Fixed an issue, where including double quotes (") in meeting data could cause the server to experience an AJAX hang.
- Fixed another issue, where adding backslashes (\) to data in the editor resulted in incorrect values in the database.

** Version 2.2.5 **

- February 24, 2014
- Fixed an issue that caused problems with the admin screen on IIS (Microsoft Windows) hosting servers.

** Version 2.2.4 **

- February 23, 2014
- Added the capability to indicate multiple meeting IDs in the search string, by separating them with commas. This allows a list of specific meetings, selected by BMLT ID, to be returned.
- Added a field to the NAWS export to assist in future assigning NAWS Committee Codes to existing meetings.
- Fixed some issues with non-standard TCP ports.
- Fixed an error with validating the server version in the satellite admin page.

** Version 2.2.3 **

- February 17, 2014
- Accidentally removed a format from the default formats (only applied during the install wizard, so this will not affect already installed deployments).

** Version 2.2.2 **

- February 16, 2014
- Fixed an issue that happened on a somewhat nonstandard server. This resulted in the format editor not working.
- The GetServiceBodies XML schema (and dump) had some errors. These have been addressed. This does slightly change the semantics for the GetServiceBodies variant.
- Made it so that you don't need to specify array brackets ([]) for the GetFormats variant of the semantic interface.
- Changed the "id" attribute in the XML rows to "sequence_index". This helped some semantic users parse the data.

** Version 2.2.1 **

- January 21, 2014
- Fixed a minor warning issue with the simple output.
- Turned off debug mode (oops).
- Changed the value in the "Delete" column for the NAWS export to "D" (as per request from NAWS)

** Version 2.2.0 **

- January 20, 2014
- Removed an erroneous French format, and added three new formats. Fixed a broken Swedish format, and made it an English format (Web).
- Added the ability to select a NAWS format code as a translation match for an existing format code. This allows arbitrary format editing.
- Addressed an old bug that caused agita when all formats have been deleted. "Solved" it by not allowing the last format to be deleted.

** Version 2.1.11 **

- December 31, 2013
- Addressed a bug that could affect the observer browser in some Internet Explorer sessions (AJAX bug).

** Version 2.1.10 **

- December 29, 2013
- Fixed a bug in the install wizard that would result in corrupted initial databases.

** Version 2.1.9 **

- December 12, 2013
- Fixed a very small bug in the simple output. This would only affect rare installations. If a single_meeting_id** link was provided, it would not resolve properly.**


** Version 2.1.8 **

- December 11, 2013
- Fixed a bug that could affect rare servers with security set to "11." The Observer browser did not work.
- Fixed a bug that prevented meetings listed at noon and midnight from being displayed in simple searches (localization bug).
- Fixed a bug that created a disorganized sort for simple meeting results.
- Added address information to the meeting search results in the Meeting Editor. This was a request by an ASC administrator, so it had a high priority. It was a low-risk addition.
- Added an example auto-config file.

** Version 2.1.7 **

- December 9, 2013
- Fixed a bug in the simple meeting Map URL, caused by the localization work.

** Version 2.1.6 **

- December 8, 2013
- Added More French localization.
- Fixed a couple of PHP warnings.

** Version 2.1.5 **

- December 7, 2013
- Added French localization.

** Version 2.1.4 **

- December 3, 2013
- Fixed a syntax error in the Installer Wizard.

** Version 2.1.3 **

- November 30, 2013
- Added the capability to extract only those formats used in a search to the BMLT_SIMPLE capability. This allows things like easily scalable format keys.

** Version 2.1.2 **

- November 29, 2013
- There was an error in the KML output. This has been fixed.

** Version 2.1.1 **

- November 29, 2013
- Fixed a bug in the simple search, where weekdays were offset by 1 (actually caused by the localization work).

** Version 2.1.0 **

- November 28, 2013
- Consolidated and reduced the localization strings. Now, almost all the strings used in administration are in one file.
- Removed the useless PDF generator directory.
- Did some technical work to ensure that the server will work properly in some virtual host environments.
- Added a couple of more choices to the default sort keys.
- Added the capability to specify arbitrary sort keys in the semantic URIs.
- Fixed a bug in the meeting editor, where setting the map to an address did not activate the save button.
- Added GPX, KML and POI/CSV export options to the semantic interface.

** Version 2.0.34**

- October 19, 2013
- Fixed a bug in the XML/JSON export, where empty fields could result in incorrect data.

** Version 2.0.33 **

- October 2, 2013
- Added the zip code to the simple output.
- Fixed a bug, where setting the map location would not properly enable the save button.
- Added a German translation of the duplicate login error message.
- Tweaked the German translations a bit.

** Version 2.0.32 **

- June 26, 2013
- Simply added an error handler for when a duplicate user login is specified when trying to create a new user.

** Version 2.0.31 **

- June 8, 2013
- There was actually a nasty bug in the installer wizard that was caused by some of the work to address non-MySQL databases. This has been fixed.

** Version 2.0.30 **

- June 8, 2013
- Made the TEST button more useful. Also fixed a bug in it, where it would fail for a perfectly-formed empty database.
- Fixed a bug, where the Service body admin section would not appear properly for Server Administrators if there were no preexisting Service bodies.

** Version 2.0.29 **

- June 6, 2013
- Simply trap when the TEST button is hit with no information (used to give no response). It now gives an error message.

** Version 2.0.28 **

- June 4, 2013
- Added a database connectivity test button to the installer wizard.

** Version 2.0.27 **

- May 22, 2013
- Fixes an obscure bug that can be caused by entry of double-quotes into the format.

** Version 2.0.26 **

- May 22, 2013
- Adds German localization to the meeting search portion (used by Observers).

** Version 2.0.25 **

- May 22, 2013
- Removed some old code from the header that caused the AJAX responses to be a bit slow. Satellites linking to this version should render more quickly.
- Added a 'recursive' parameter to the semantic interface. This allows the response to return an entire Service body hierarchy, based on 1 Service body.
- Made the search parser a bit more forgiving for Service bodies and weekdays. They are no longer REQUIRED to be arrays, which makes single values easier to specify.
- Updated to the latest CMS Base Class (has no real effect on this project).

** Version 2.0.24 **

- May 19, 2013
- Fixed a bug, where clicking the format checkboxes with Internet Explorer did not trigger their callbacks.

** Version 2.0.23 **

- May 18, 2013
- Fixed an issue, where the Meeting search (Observer only) could have a bad AJAX URI.

** Version 2.0.22 **

- May 18, 2013
- Added compensation for servers running on non-standard HTTP ports.
- Made it so that older auto-config files will not trigger the install wizard.

** Version 2.0.20 **

- May 13, 2013
- Reduced the number of times that the marker redraw is called in the standard [[bmlt]] shortcode handler.
- Fixed an issue with CSS that caused displayed maps to get funky.

** Version 2.0.19 **

- May 12, 2013
- Fixed a JavaScript bug, in which the "Create New Meeting" button would sometimes trigger an error.

** Version 2.0.18 **

- May 10, 2013
- Made more invisible 'belt & suspenders' tweaks to the code to ensure no warnings.

** Version 2.0.17 **

- May 9, 2013
- Made some invisible 'belt & suspenders' tweaks to the code to ensure no warnings.

** Version 2.0.16 **

- May 8, 2013
- Made it so that hitting the RETURN key in the meeting search will trigger a search. This is a big usability enhancement.

** Version 2.0.15 **

- May 8, 2013
- Fixed a bug, in which a Service Body Admin with no Service body privileges would be shown a Service Body Admin editor.

** Version 2.0.14 **

- May 6, 2013
- Fixed a bug that occurred when the main_server was at the root of the domain. It would prevent JavaScript from being loaded.
- Adding German localization.

** Version 2.0.12 **

- May 4, 2013
- Simply stopped a warning/note from showing up in strict PHP.

** Version 2.0.11 **

- May 2, 2013
- Fixed a bug, in which some text fields were over-HTMLing ampersands (&).
- Fixed a bug, in which creating new Service bodies would sometimes result in a "hanging throbber."
- Fixed a bug, in which deleting a Service body did not remove it from the popup menu.

** Version 2.0.10 **

- May 1, 2013
- Hopefully, added a workaround for servers with dicey session support.

** Version 2.0.9 **

- May 1, 2013
- Fixed a bug, in which single-quotes (apostrophes) were causing problems in some text fields.

** Version 2.0.8 **

- April 29, 2013
- Fixed a bug, in which blank text fields were not being saved.

** Version 2.0.7 **

- April 27, 2013
- 2.0.6 had issues. This should REALLY fix the problem (Do you know this tune?)...
- Fixed a fairly old bug in the root server, where creating new meetings could result in a hung screen.

** Version 2.0.6 **

- April 27, 2013
- 2.0.5 had issues. This should REALLY fix the problem...

** Version 2.0.5 **

- April 27, 2013
- Fixed a bug that appeared in some servers, where quotes were escaped. This interfered with administration.

** Version 2.0.4 **

- April 25, 2013
- Removed the single meeting details link from the simple search results, as it points to the root server, and the root server has changed a lot.
- Cleaned up some redundant code.

** Version 2.0.3 **

- April 21, 2013
- Rewrote the text search for non-location text. It was not handling non-Roman text properly.
- This is the first release on [Bitbucket](http://bitbucket.org)

** Version 2.0.2 **

- April 18, 2013
- Fixed an issue where sessions were not being preserved properly across a cURL call.
- Fixed a bug, where the "hidden" fields were having their values "mangled" by the root server.
- Fixed a bug, where a redundant confirm dialog was shown for deleted meetings.

** Version 2.0.1 **

- April 17, 2013
- Fixed two bugs in the localization of the "Observer search" feature.
- Fixed a bug, in which the upublished meetings were unintentionally returned as valid search results.
- Fixed some bugs that caused JavaScript issues.

** Version 2.0.0 **

- April 13, 2013
- Official release of 2.0.0
- There are 3 open bugs in this release that need to be addressed in a near-future "point release":
    7) Swedish Language Ümlauts Result In Bad Location Searches
        This expresses itself in satellite searches, but is probably a root server bug.
        Search for these cities, using [the Swedish root server](http://www.nasverige.org/bmlt):
            Malmö
            Strängnäs
            Göteborg
        The searches will not produce expected results.
    
    8) Localization Needs to support military time in the satellite/root server.

    9) Non-MySQL databases (in particular, Postgres) don't work.

** Version 2.0b15 **

- April 9, 2013
- Did some work to ensure that strings stored in the database would retain their UTF-8 characteristics.

** Version 2.0b14 **

- April 8, 2013
- The Swedish localization is all but complete.
- Switched the order of the long/lat fields in the NAWS export.

** Version 2.0b12 **

- April 6, 2013
- Added placeholders for the Swedish and Spanish localizations.
- Fixed a bug, in which linefeeds in text entries could bork the administration interface.

** Version 2.0b11 **

- March 31, 2013
- Fixed a JavaScript Issue, where the user level popup was not being correctly set, as a result of the removal of the useless "Editor" level.

** Version 2.0b10 **

- March 31, 2013
- Fixed a JavaScript Issue, where the "dirty confirm" was not being shown in some instances. It is still an issue in a couple (like closing the browser).

** Version 2.0b9 **

- March 31, 2013
- Fixed a number of small JavaScript bugs that had the annoying habit of interfering with the "dirty" flag for meetings.

** Version 2.0b8 **

- March 31, 2013
- Removed the useless "trainee" position of "Service Body Editor" as a choice.
- Fixed a rather nasty bug in the new Service Body Parent functionality.

** Version 2.0b7 **

- March 30, 2013
- Fixed this bug:
    6) No Way To Nest Service Bodies
        1) Log In as a Server Administrator
        2) Open the "Service Body Administration" panel
        3) Try to change the hierarchy (the "parent" of the Service body)
    
        ANOMALY: No way to do it
        EXPECTED: A popup menu with a choice of other Service bodies that can be used as "parents"

** Version 2.0b6 **

- March 30, 2013
- Fixed this bug:
    If there are no Service bodies (new install), the "Service Bodies" section is not displayed (so no new ones can be created).
    
** Version 2.0b5 **

- March 30, 2013
- Fixed these bugs:
    3) No default duration
        1) Log in as an Observer
        2) Select "Meeting Search"
        3) Using the GNYR Dataset, enter "Amagansett, NY" into the text search box
    
        ANOMALY: A number of meetings show no duration.
        EXPECTED: A 90-minute duration
        EXTRA INFO: This should probably be set explicitly in the install wizard

    4) In Observer Meeting Search Mode, Multiple Instances of Hidden Fields Can Be Displayed
        1) Log in as an Observer
        2) Select "Meeting Search"
        3) Using the GNYR Dataset, enter "Amagansett, NY" into the text search box. Ensure that the "This is a location or postcode" checkbox is selected.
        4) Hit "GO"
        5) Repeat Search (Return to "Specify A New Search," and hit "GO." No need to re-enter the search criteria)
        6) Select the first meeting displayed
    
        ANOMALY: Multiple instances of the "email_contact" field displayed.
        EXPECTED: Only one instance displayed.

** Version 2.0b4 **

- March 29, 2013
- Added full support for observers to browse the database, and view restricted fields in a secure fashion.

** Version 2.0b3 **

- March 28, 2013
- I realized that I had completely neglected the needs of observers (logged in, but can't edit).
  I added a basic search for them. Due to the way that the satellites are written, this took about
  an hour, and represents basically zero risk to the main server admin functionality. In order to
  use the new browser, you add /client_interface/html to the main_server URI. It will ask you to
  log in (if you have not already done so), and will present the basic search interface shown in the
  3.X version satellites.
  However, this will require some more work in order to integrate it more completely to the server.
  Even though the functionality is incomplete, I am making a release in order to ensure that the
  main server editor functionality was not affected.

** Version 2.0b2 **

- March 27, 2013
- Fixed this bug:
    2) Location Search Fails With Too-Tight Comma
        1)  Log in as a Service Body Admin (or Server Admin)
        2)  Open the "Meeting Editor" dropdown
        3)  Check "This is a Location or PostCode."
        4)  Enter "Babylon,NY" (Notice no spaces between comma and succeeding character).
        5)  Click "Search For Meetings"
        
        ANOMALY:    No Search Results
        EXPECTED:   A number of returned meetings
        EXTRA INFO: Entering "Babylon, NY" (Note space between comma and succeeding character) works.

** Version 2.0b1 **

- March 25, 2013
- Fixed this bug:
    1) Open Two Editors Accidentally
        1)  Log in as a Service Body Admin (or Server Admin)
        2)  Open the "Meeting Editor" dropdown
        3)  Do A Meeting Search That Will Yield Results
        4)  Open the "Edit Meetings" tab
        5)  Open the top Search Result dropdown
        6)  Close it
        7)  Click on the "Create A New Meeting" button (Either click on "Cancel", or the meeting name).
    
        ANOMALY:    Both the Create Meeting And First Result dropdowns open
        EXPECTED:   Only the Create Meeting Editor dropdown opens
- Turned off debug mode.

** Version 2.0b0 **

- March 22, 2013
- Official Beta Release.

** Version 2.0a12 **

- March 20, 2013
- Added alerts to display a message if the AJAX authorization fails.

** Version 2.0a11 **

- March 19, 2013
- Fixed a bug, in which the server admin account was not being properly set in the setup install wizard.

** Version 2.0a10 **

- March 16, 2013
- Finished major coding for the root server, as the installer wizard was the last part.

** Version 2.0a9 **

- March 9, 2013
- Fixed a rather serious issue, in which apostrophes (') in text could cause the editor to go kablooey.
- Fixed an issue with the wizard detector, where a null-set global was misinterpreted.

** Version 2.0a8 **

- March 8, 2013
- More work on the installer wizard.
- The Server Admin can now change their own login and name (Other admins cannot).

** Version 2.0a7 **

- March 7, 2013
- Fixed a bug in which the map set button was not being properly enabled.

** Version 2.0a6 **

- March 7, 2013
- The password setting wasn't working correctly, so I fixed it. It also forces a logout upon successful change.
- Fixed the styling on the various warnings and admonishments.

** Version 2.0a5 **

- March 6, 2013
- Internet Explorer was displaying the wrong cursor in the meeting results list. This has been fixed.
- There was a big issue with text fields not working properly on IE. This has been addressed. Apparently, cloning a DOM node does not properly transfer event handlers in IE.
- Removed the now-unnecessary "supports_ajax" argument from the login.
- Simplified the login form a bit, so that the URI will remain consistent.
- Fixed a bug, in which changing multiple items at once in the "My Account" section triggered a JavaScript error.

** Version 2.0a4 **

- March 6, 2013
- Fixed an issue where the format editor did not work properly on Internet Exploder.

** Version 2.0a3 **

- March 4, 2013
- Tweaked the config loader to allow the auto-config to be fetched from the old location. This will change by beta.

** Version 2.0a2 **

- March 3, 2013
- Reduced the size of the text in the Service Body Editor Save button.
- Sort the languages to ensure consistency, and that the native language of the server is always first.
- The format list is delineated by color stripes. When formats were added or deleted, these stripes could get pooched. That has been fixed.

** Version 2.0a1 **

- March 3, 2013
- Fixed a minor issue, in which the warning banners were not bing set when a format was deleted.

** Version 2.0a0 **

- March 3, 2013
- Major rewrite of the administration system.
- Simplified the administration, and got rid of all client-side root server HTML. All clients are now required to communicate with the root via semantic interfaces (JSON/XML/CSV).
- The server administration is now heavily AJAX-based, and is now a completely interactive Web app.

** Version 1.10.3**

- January 16, 2013
- Added a "GetServiceBodies" variant to the semantic export.

** Version 1.10.2**

- January 8, 2013
- The miles from search center value was incorrect (improper conversion from Km). This has been fixed.

** Version 1.10.1**

- The main change in this version is that the formats can be exported so that only the ones actually used in the search are given.

** Version 1.9 **

- March 24, 2012
- Fixed a bug that did not apply localizations to PDF generation.
- Fixed a bug in the Metaphone splitter (It was in rarely used code, and had been there forever).
- Added some functionality to aid in syncing with the NAWS system.
- Changed the base "primer" DB to include the new standard set of formats to be used to sync with NAWS.
- Changed the way the "install wizard" works, in order to make it easier to "prime" the database.

** Version 1.8.43 **

- November 24, 2011
- Undid the date bug fix, as it caused problems on some servers, by reporting the wrong times.

** Version 1.8.42 **

- November 17, 2011
- Fixed a bug in which day/time searches were being offset improperly on some servers.
- Fixed a bug, in which the CSV response could cause a crash.

** Version 1.8.41 **

- October 22, 2011
- Addressed a bug, in which the wrong timezone was possibly being specified. The auto-config file will now allow a timezone to be specified in a variable called $default_timezone.
- Somehow or another, some junk characters got into the AJAX Thread Driver file. That has been fixed.
	    
** Version 1.8.40 **

- October 21, 2011
- Swedish localization added.
- There was a minor error in the XML schema for formats that interfered with operation on the iPhone app. This has been fixed.
	    
** Version 1.8.39 **

- September 5, 2011
- NA Sweden had an error, in which their server reports that it has all the various crypt() methodologies, but can't actually deliver. This broke the FullCrypt() function. I addressed it by adding a fallback to the most primitive crypt() function.

** Version 1.8.38 **

- August 17, 2011
- This addresses an issue where overrides of the address format strings were being ignored. It may also give a slight improvement to page load times.

** Version 1.8.37 **

- August 15, 2011
- Fixed a bug that prevented the "Contact Us About This Meeting" link from appearing in "More Details."

** Version 1.8.36 **

- August 12, 2011
- Fixed a bug discovered by UKNA, in which subsequent pages of a multi-page location result woul have bad links.

** Version 1.8.35 **

- July 11, 2011
- Fixed a couple of minor bugs in the installer wizard.
- Also added a change to the search spec. throbber location that should make it appear in the correct place, now.

** Version 1.8.34 **

- July 4, 2011
- Fixed a validation issue with the search form.

** Version 1.8.33 **

- June 26, 2011
- Added new fields to the CSV/JSON/XML Change response.
- There was a minor security issue that could have occurred with the email_contact field. It may have been displayed in some change records. This has been addressed.
- Made the changes response dig into a hierarchy of Service bodies, if a "parent" Service body ID is presented in service_body_id=
	    
** Version 1.8.32 **

- June 22, 2011
- Added the ability to filter by Service body, when looking for changes, and now only return meeting changes (previously, some Service body and user changes could also be supplied).
- Made a minor fix in the default details address string, so that meeting locations with no name won't show an empty comma.
- Added the address format strings to the shared local strings, which should help performance, and decouple the linking to global variables.

** Version 1.8.31 **

- June 7, 2011
- Added additional capability to the CSV, JSON and XML outputs, so that the Satellite Driver can extract more relevant information.

** Version 1.8.30 **

- June 5, 2011
- Fixed a fairly minor bug, in which failed geocode lookups would result in a blank screen. They now result in a message.

** Version 1.8.29 **

- June 4, 2011
- Initial check-in of [GitHub](http://github.com) project

	************* ORIGINAL SVN CHANGELOG (From SourceForge) *************

- June 2, 2011 - 1.8.28 Release
    - Fixed a bug, in which the start time was not being displayed in single meetings..

- May 27, 2011 - 1.8.27 Release
    - Fixed yet another bug introduced by over-aggressive optimization. The auto-radius calculation didn't work properly.

- May 27, 2011 - 1.8.26 Release
    - Fixed another bug introduced by over-aggressive optimization. The auto-radius calculation didn't work properly.

- May 25, 2011 - 1.8.25 Release
    - I was over-aggressive in my optimization efforts. I needed to add another parameter to the localized strings array.

- May 23, 2011 - 1.8.24 Release
    - Added the capability to specify that Service Body descriptions be shown in the Advanced Search.
    - Made a number of changes to try to improve performance of searches.

- May 3, 2011 - 1.8.23 Release
    - Changed the class of the default map basic/advanced selector to allow the selector to be hidden when the map is displayed, using CSS.
    - Converted the project to GPLv3 (Raises white flag).
    - Added explicit content-type headers to prevent servers from playing with the JSON responses.
    - Added a regex to the js files to strip naughty linefeeds from servers that just can't resist.
    - Fixed a long-standing bug in the JSON encoder.
    
- April 27, 2011 - 1.8.22 Release
    - Fixed a bug, in which satellites could get interminable spinning throbbers, when a map search returns an empty search.

- April 20, 2011 - 1.8.21 Release
    - Fixed a bug, in which address string searches were calculating their radius in Km, regardless of the local setting.
    - Fixed an old issue, in which text searches would often fail for correctly-spelled substrings of meeting data. This should now work.

- April 20, 2011 - 1.8.20 Release
    - Addressed an issue with the advanced map not opening properly.
    
- April 11, 2011 - 1.8.19 Release
    - Fixed a bug caused by my 1.8.18 fix.

- April 9, 2011 - 1.8.18 Release
    - Fixed a Firefox JavaScript error in the admin interface.
    
- April 4, 2011 - 1.8.17 Release
    - Worked around an issue where XSS filtering in a particular server was interfering with the contact form submission.
    
- April 3, 2011 - 1.8.16 Release
    - Now disable and uncheck the checkbox for a selected user in the Service Body Admin, so that an admin won't be selected as both an editor and the main admin.
    - There was a rather nasty bug in the distance calculations that manifested when Kilometers were chosen. This should now be fixed.
    - Added the ability to select the distance units to the wizard, and to the auto-config file.
    
- March 22, 2011 - 1.8.15 Release
    - Clear the default charset (php_ini). This allows better localization.
    - Improved German Localization
    - Speed up of various functions (the localized strings needed to be cached).
    
- March 9, 2011 - 1.8.14 Release
    - Added a debug check to the client_interface/server_access.php file to make debugging satellites easier. Make sure it is commented out for release.
    - Added some code to enable display of non-Roman characters. This affects a lot of code, and requires fairly extensive testing.
    - Fixed a longstanding bug, in which long data (greater than 256 bytes) was not properly stored or retrieved.
    - Added the beginning of the German localization.
    
- January 30, 2010 - 1.8.13 Release
    - The changes weren't using the localized strings properly. This was an "invisible" bug, and has been fixed.
    - Added a new security measure to ensure that unauthorized folks cannot see hidden values in change records.
    - Added a new capability to get Changes returned between given dates in the REST interface.

- January 22, 2011 - 1.8.12 Release
    - Addressed a couple of fairly cosmetic issues, including an incorrect licensing header.
    - Added the distance from a center point, in both KM and miles, as regular fields in CSV, XML and JSON responses.
    
- January 15, 2011 - 1.8.11 Release
    - Added the ability to sort results by distance from a radius point.
    - Fixed another bug (not so stupid) in the PDF export.
    
- January 8, 2011 - 1.8.10 Release
    - Fixed a REALLY STUPID bug, introduced while trying to add support for compressed CSV. data. Geez, is my face red...
    
- January 7, 2011 - 1.8.9 Release
    - Fixed a bug in the "hunt" feature, in which the weekday filter wasn't being properly applied.
    
- January 4, 2011 - 1.8.8 Release
    - More warning work (being more careful, this time).
    - Removed a bit more broken code that was never called.
    - Fixed a bug in the weekdays search that prevented the new satellite class from operating properly.
    
- December 29, 2010 - 1.8.7 Release
    - Added ob_ stuff to the two new XML files.
    - Added the ability to request XML be sent compressed by specifying 'compress_xml=1'
    - Fixed a really, really dumb mistake in the install wizard, caused by my smart-ass attempt to squash warnings. duh. :P
    
- December 28, 2010 - 1.8.6 Release
    - Optimized the Service Body XML response.
    - Fixed a minor error in the GetServiceBodies schema file.
    - Fixed a couple of minor issues that generated warnings in PHP. No operational issues, but I don't like warnings.
    - Added Doxygen comments to the new PHP files.

- December 27, 2010 -1.8.5 Release
    - Added an XML export function to get the Service bodies. This will be for integration with the new Satellite Controller Class, under development.
    - Got rid of some broken code that was never called, but would have caused problems if it had. Is there a PHP code coverage tool?
    
- December 27, 2010 -1.8.4 Release
    - Added an XML export function to get the server languages. This will be for integration with the new Satellite Controller Class, under development.
    
- December 19, 2010 -1.8.3 Release
    - Fixed a couple of "invisible" bugs that were pointed out. These were matters of bad styling, more than operational issues.

- November 28, 2010 -1.8.2 Release
    - Fixed a bug in the focused data item responses (XML, CSV and JSON), where the results were being erroneously sorted.
    - Fixed a bug, in which the contact form did not work for single meetings.
    - Adjusted the CSS to make the little version display stand away from the right side just a bit.
    - Adjusted the CSS for the contact form for single meetings. It was a bit offset.
    - Some slight adjustments the the JavaScript in the Data Item submission to try to alleviate possible encoding issues (Probably will not make any difference).
    
- November 25, 2010 -1.8.1 Release
    - Fixed a bug in the CSV export.
    
- November 24, 2010 -1.8 Release
    - Added an XML reply format and a JSON reply format. These allow the use of the BMLT in a more semantic environment, and sets the stage for more powerful satellites.
    
- November 8, 2010 -1.7.5 Release
    - Added a checkbox to the batch data item add, to force overwrites of existing data. This allows the function to be "gentler," and also allows deletes.
    
- November 5, 2010 -1.7.4 Release
    - Fixed a bug introduced by the security patch.

- November 2, 2010 -1.7.3 Release
    - Fixed a bug in the new function for adding bulk data items.
    - Fixed a minor security hole, where admins without edit/observe rights on accounts could still see the hidden info on those accounts via a CSV dump.
    
- October 22, 2010 -1.7.2 Release
    - Added the ability to set a "template" for the address display in the "More Info" and list screens.
    - Fixed a really stupid SQL error introduced in 1.7 (Installer).
    
- September 29, 2010 -1.7.1 Release
    - Made it so that the unusable edit fields are hidden from logged-in observers, and that observers can get to the meeting search page from the list reults page.
    - Fixed some validation errors in the administration screen.
    
- September 28, 2010 -1.7 Release
    - Added a powerful (and dangerous) function: Server admins can now apply a data item value to checked groups of meetings.
    - Added a checkbox to the list results that will set/clear all checkboxes.
    - Added full meeting dumps for deleted meetings (for NAWS DB, at their request).
    - Do not set a value into the NAWS CSV dump if there is no Service Body ID provided (It was adding AR0 or RG0).
    - If a value in a data field is 100% URI (in 'http://domain.tld' form), it will be replaced by an anchor to the URI.
    - The World Services ID for a Group now displays in the correct "G00XXXXXXX" format for individual meetings More Details display.
    - Now load the "History" section via AJAX. The immediate load caused an unacceptable page load time.
    - Observer-level users can no longer edit their information (allows the same account to be shared by a number of people). You can only log in or out.
    
- September 18, 2010 -1.6.2 Release
    - Added the "Ag" (Agnostic), "FD" (Five and Dime) and "AB" (Ask-It-Basket) formats to the default formats.
    - Added a NAWS-format CSV export to the logged-in admin Advanced Search.
    - Added the ability for satellites to specify 'advanced map' and 'advanced text' initial displays.
    
- August 6, 2010 -1.6.1 Release
    - Fixed a minor bug that doesn't affect the operation of the system, but which made ugly URIs and HTML. The 'preset_service_bodies' field was being set up as inputs in the form.
    - Fixed a possible (unlikely) security issue.
    
- June 28, 2010 -1.6 Release
    - Added an "Observer" user level. This is a "read-only" user that can see hidden fields in meetings for which they are authorized. This is how helplines can see contacts for meetings.
    - Added a "no_print" class to the "Contact Us About This Meeting" link.
    - Added the ability to specify a banner over the login. This helps to reduce confusion for "practice" servers.
    - Fixed [a bug](http://sourceforge.net/tracker/?func=detail&aid=3013722&group_id=228122&atid=1073410), in which "zombie markers" could come back after a zoom.
    - Fixed [a bug](http://sourceforge.net/tracker/?func=detail&aid=3014328&group_id=228122&atid=1073410), in which parentheses in meeting names caused bad map URIs.
    - Added "belt and suspenders" email validation to the contact form.
    
- June 5, 2010 -1.5.12 Release
    - Added a region bias to the config file and the install wizard.
    - Did a rather kludgy fix to work around the problem of Google Maps Geocode API ignoring the Region Bias
    
- May 31, 2010 -1.5.11 Release
    - Fixed a bug in the JavaScript for the GPS location code (FireFox).
    - Made the specification throbber appear in the middle, where it belongs.
    
- May 6, 2010 -1.5.10 Release
    - Fixed a bug in the location text search.
    
- May 2, 2010 -1.5.9 Release
    - Added a switch to detect compression conflicts with ZLIB.
    
- April 29, 2010 -1.5.8 Release
    - Large change lists can cause the Edit Functions page to time out, so I added a "timeout bumper" to the list.
    - Some mostly cosmetic changes to some JavaScript.
    
- April 26, 2010 -1.5.7 Release
    - Fixed an old bug that could affect the way the server interaction works (curl).
    
- April 25, 2010 - 1.5.6 Release
    - Added a "nocompress" parameter to the simple call. This is so it can be used in SSI. Nothing else is affected, and there is no reason to upgrade unless you want your clients to have the option of using SSI.
    
- April 16, 2010 - 1.5.5 Release
    - Fixed a nasty new variant on the bug discovered in 1.5.2, and fixed in 1.5.3. The symptom was empty searches in map view, from locations entered by string.
    - Added the ability to specify a radius for address string searches.
    
- April 13, 2010 - 1.5.4 Release
    - Fixed a bug, in which feedback was not being provided for permanent meeting deletions or undeleted meeting restores.
    - Made sure that deleted meetings that are no longer deleted, don't show up in the "Deleted Meetings" list.
    
- April 12, 2010 - 1.5.3 Release
    - Added a report facility to view deleted and changed meetings. The "Deleted Meetings" section has been moved into here.
    - Fixed an odd bug, in which some string locality searches could give different results between map and list mode.
    - Added the ability to specify the title of the Root server page in the auto config file.
    
- April 7, 2010 - 1.5.2 Release
    - Fixed a bug, in which the "before" time was not correctly set.
    - Fixed a bug in the kilometer radius search.

- April 5, 2010 - 1.5.1 Release
    - Added formats to the "simple" output. It was an oversight they weren't in the first release.

- April 2, 2010 - 1.5 Release
    - Added support for multiple fields to be searched for text.
    - Added better support for "pinch zoom" of map results on smaller screens.
    - Enabled scroll wheel zooming on map results.
    - Added the ability to get "simple" table (or block elements) search results returned from the server. These can be embedded into pages.
    
- March 24, 2010 - 1.4.7 Release
    - Added support for Google Gears, as that is how Android does geolocation.
    
- March 18, 2010 - 1.4.6 Release
    - Added support for Blackberry and Opera Mini to the mobile browser
    - Fixed a bug, in which the iPhone user agent was not being properly detected by the root.
    - Fixed a possible JavaScript parsing issue. It only caused problems with the Joomla plugin.
    
- March 6, 2010 - 1.4.5 Release
    - Replaced deprecated eregi call with preg_match.
    - Now explicitly turn off error reporting (minor security issue).
    - Made map redraw MUCH faster after a zoom.
    - Fixed the annoying thing that can happen if you click a bunch of times in rapid succession in the map (trail of markers).
    - Improved the security of the js_stripper and style_stripper files for DOS systems.
    - Improved the performance of the AJAX calls by aborting all prior ones.
    - Re-enabled AJAX call return compression in the regular user client.

- March 1, 2010 - 1.4.4 Release
    - Using a different method to get a new ID for a meeting. The prior method can cause issues with tightly-locked databases.

- February 21, 2010 - 1.4.3 Release
    - Keep the throbber from displaying if a PDF download is being done.
    
- February 19, 2010 - 1.4.2 Release
    - If the main map in a single meeting display is small, we display only the small zoom control.
    - Fixed a minor bug that caused format codes to be displayed in map view for meetings with no formats.
    
- February 16, 2010 - 1.4.1 Release
    - Make sure that the marker is removed when the zoom is brought out to where it disappears.
    - Added support for Android.

- February 13, 2010 - 1.4 Release
    - Made the "code cleaners" more efficient.
    - Added support for the geolocation API, so you can have a "Find meetings near me" facility.
    - Added support for small (iPhone) screens.
    - Added a throbber display to the initial search, so you know when a search is in progress.
    - Fixed a few usability bugs with the advanced map.
    - Added a weekday filter to the radius hunt. Helps to make the results a bit more relevant. This expands the radius to include more meetings.
    - Fixed a minor issue in the cURL caller
    - Made the "throbber" more stable. It had a tendency to wander around.
    
- January 28, 2010 - 1.3.13 Release
    - Addressed a minor security issue, in which it was possible to "tailgate" on a prior login. However, it required physical access to a machine with an already established session.

- January 24, 2010 - 1.3.12 Release
    - Fixed a bug, in which the format types were not displaying for a meeting edit.
    
- January 18, 2010 - 1.3.11 Release
    - Added a visibility parameter to the data fields. Fields can be marked as "invisible" (only admins can see it), Web-only (Does not show up for prints) and Print-only.
    - Make sure that email contacts are only given to logged-in admins with the right to edit a meeting (hidden, otherwise).
    
- January 7, 2010 - 1.3.10 Release
    - Fixed a nasty bug that caused string searches to fail if any meetings had the new email contact field filled in.
    
- January 4, 2010 - 1.3.9 Release
    - Simply added the ability to override the "default" text in the printed PDF lists. This is useful for Service Bodies that use it to create their own lists.
    
- January 2, 2010 - 1.3.8 Release
    - Fixed a newly introduced bug in the formats editor that prevented proper listing of formats in new languages. This is not a data-loss bug, and only affects servers with multilingual formats.
    - Fixed a bug in the way the email contact system works.
    - Cleaned up and vet the email forms a bit. If the email address is not correctly formatted, the meeting, user or Service Body cannot be submitted.
    - The "return key" submit for the meeting editor did not work. That has been fixed.
    - Now ensure that unauthorized sessions are destroyed.
    
- January 1, 2010 - 1.3.7 Release
    - Had to take out [session_regenerate_id()](http://us2.php.net/manual/en/function.session-regenerate-id.php). It caused problems with Chrome.
    - Fixed a series of sorting bugs in PHP 5.1.X
    - Removed the strings for the two awkward alerts that are no longer given when adding users or Service Bodies.
    - Fixed a bug in the format editor that could result in "clashes" with existing format IDs.
    - The Add and Delete formats functions now refresh the screen. Much better and more "solid."
    
- January 1, 2010 -1.3.6 Release
    - Removed the inclusion of the Service Body Administrator in the contact email "percolation." Only emails attached to the Service Body will be considered.
    - Added the ability to associate an email address with an individual meeting. Hopefully, this will be enough to reduce requests to associate personal information with meetings. An email address is less harmful than most, and it is masked by the contact form.
    - Made the behavior of the Service Body and User Editors a great deal more "natural," with more useful user feedback.
    - Switched the main throbber to an "NA Radar" throbber. I want to remove the BMLT branding, as that might imply endorsement. I'll leave the root server shortcut icon, as that is so small that it doesn't say much.
    - Fixed another bug that has been in there since 1.3.3, in which non-server admin users couldn't edit their own account info.
    - Fixed an old bug in the map search, in which a zoom would result in an extra marker draw.
    - Made sure that you don't need to specify meeting_key_contains in key searches (It should be true by default).
    - This release should make the administration far more natural and easy.
    
- December 29, 2009 -1.3.5 Release
    - Made the calculation of the radius circle a lot more accurate and speedy. It was having trouble with Northern latitudes. I switched both the JS and PHP to a fast Vincenty calculation.
    - Fixed a bug that caused user object edits to get ignored (Oops -caused by my centralization of the c_comdef_server::IsUserServerAdmin() function in 1.3.3).
    
- December 28, 2009 -1.3.4 Release
    - Added some styles to the edit screens for meetings that are duplicates or unpublished. Duplicate meetings now have uneditable Duplicate data fields, and a purple background (ugly), and unpublished meetings have a light orange background.
    - Changed the start time granularity to every five minutes.
    - Added a couple more fields to the "single meeting URI" filter.
    - Added a lot of flexibility to the email contact system. It is now possible to set a "percolate up" email address, or a separate email address in the Service Body to receive meeting contact emails.
    - Fixed a bug that caused the meeting editor to crash if a Service Body was deleted, when it was mentioned in a change record.
    - Made the meeting editor place the copy data item on top.
    - Fixed a bug, in which the proper copy style was not being updated in the background list when a copy was edited without removing the copy data item.
    - Switched the displayed strings to use a centralized function.
    - Added some indicators in single meeting (More Details) windows, when the meeting is unpublished and/or a duplicate.
    - Added some stripslashes() calls to the text being stored to the database for meetings.
    
- December 22, 2009 -1.3.3 Release
    - Ensure that all undeleted meetings are restored unpublished.
    - Added the capability to duplicate a meeting (Creates a new meeting that is an exact duplicate of an existing one). This is done in the "bulk list operations," and results in purple stripes. Purple meetings cannot be published until the "Duplicate" data field has been removed.
    - Fixed an issue where the server meeting ID count wasn't being done properly. It made it possible to have meeting IDs clash when resurrecting deleted meetings. So far, this has not come up.
    - Made it so that the proper server c_comdef_server::IsUserServerAdmin() is used to check all users.
    - Fixed a bug, in which restoring a deleted meeting from the Server Admin account would leave the permanent delete line behind.
    - Fixed a bug, in which warnings could appear in the format sorter, because I didn't check properly to make sure the arrays were valid first.
    - Tweaked the security just a wee bit more, by forcing a user object reload prior to ANY request for its level. Prevents "live object" shenanigans.
    - Added titles to the unpublished rows and the disabled publish button that explain what is going on.
    - Fixed a bug, in which unnamed meetings resulted in "null" being displayed in the map info windows. Now, "NA Meeting" is displayed.
    - Fixed a possible security issue, in which login details could be passed beyond the initial login in cleartext (oops).
    - Fixed a bug in which meeting editors were not allowed to delete unpublished meetings (They should be allowed to do so, and also undelete them).
    - Fixed a couple more bugs around NA meetings without names.
    - Updated the documentation to show the current structure of the BMLT.
    
- December 19, 2009 -1.3.2 Release
    - Fixed a rather annoying inaccuracy in the map circle when zoomed out.
    - Got some basic "bulk edit" operations working. From list view, you can now publish, unpublish or delete meetings in bulk, by using checkboxes.
    - Made it so that longitude and latitude values can now be entered directly as text.
    - Reduced the number of session regenerators, because some browsers drop logins during AJAX sessions.
    - Added the ability for Server Administrators to make meeting deletions permanent.
    
- December 13, 2009 -1.3.1 Release
    - Added some styles to the various additional editor checkboxes in the Service Body Editor. Bold are Service Body Editors, and italic are Meeting List Editors.
    - Added the ability to sort the format codes in the standard meeting editor.
    - Changed the styles for the format codes in the meeting editor, so the default formats are red (replaces the asterisk).
    - Removed the new meeting confirm alert, just to try to reduce the number of clicks involved.
    - Added a new AJAX throbber to the Create New Meeting screen, and disable the button while the editor is up, in order to try to reduce errors.
    - Disable the publish checkbox if the long/lat has not been set.
    - Added an extra layer of security to drop out of the editor if the meeting is published, and the editor is not a Service Body Admin.
    - Cleaned up a bunch of deprecated PHP functions to reduce PHP warnings to only a few that concern the clock.
    
- December 5, 2009 -1.3.0 Release
    - Simple release with no changes.

- November 27, 2009 -1.3B0 Release
    - Added handling of "published" meetings, including a silent database update.
    - Added an empty auto-config.inc.php.rename file.
    - Made some substantial changes to the way that the meeting changes are displayed. They now give an itemized report of the exact changes made.
    - Fixed a bug that would not have shown up until localization was attempted (one of the buttons in the meeting editor had a hardcoded name).
    - Added a submit button to the new data field fieldset. This greatly enhances the meeting edit workflow; especially for new meetinggs.
    - Fixed a couple of really lame, stoopid bugs in the format editor. I got my _GET and _POST mixed up. Duh.
    - Fixed some CSS and JS issues that caused complaints with validators.
    - Added the ability to sort the formats in the format editor.
    - Fixed a bug in the way the meeting object serializes data. The weekday was being reduced by 1. The fix may affect old changes. Check the weekday if you do a revert.
    - Changed the role of the Meeting List Editor, so they can't publish meetings, or work on published meetings. They can't delete meetings either.
    
- November 25, 2009 -1.2.22 Release
    - Fixed an admin error, in which you are not allowed to assign meetings to Service bodies that don't already have meetings.
    
- November 15, 2009 -1.2.21 Release
    - Fixed a JavaScript error that would sometimes result in the advanced tab becoming disabled, in some browsers. It should be fixed now. Really.
        
- November 14, 2009 -1.2.20 Release
    - Fixed a JavaScript error that would sometimes result in the advanced tab becoming disabled, in some browsers.

- November 11, 2009 -1.2.19 Release
    - The style for the new GO button was messed-up. This has been fixed.
    - Removed a redundant empty script element from the header.
    - Sped up the loading for satellites that have an AJAX check.
    - Fixed a nasty JavaScript bug that showed up in Firefox.
    
- November 10, 2009 -1.2.18 Release
    - Fixed <a href="https://sourceforge.net/tracker/?func=detail&aid=2895410&group_id=228122&atid=1073410">a nasty bug</a>, in which auto-radius within very dense urban areas could fail.
    
- November 9, 2009 -1.2.17 Release
    - Added an extra "GO" button to the top of the Advanced Search screen. This enhances usability.
    - Now hide "dead" meetings from all but the admins.
            
- November 6, 2009 -1.2.16 Release
    - Fixed <a href="https://sourceforge.net/tracker/?func=detail&aid=2891653&group_id=228122&atid=1073410">a bug</a>, in which a nonfunctional PDF popup was displayed on the root server.
    - Hardcoded the root PDF directory. This wasn't really a security breach, but it is possible to write bad URIs that could give ugly results. It's also a good idea to be anal by habit.
    - Added a note to the Advanced Tab formats and Service Bodies to hold the cursor over the items.
    - Made some tweaks to the styling and text of the search specification form to increase usability.
    - Fixed <a href="https://sourceforge.net/tracker/index.php?func=detail&aid=2893015&group_id=228122&atid=1073410">a bug</a>, in which the advanced marker would disappear after a zoom.
    
- November 3, 2009 -1.2.15 Release
    - Increased the minimum zoom for the "two-click zoom," because zoom 8 is still a bit too wide.
    - Added a field to the auto-config.inc.php file, that allows you to disable the "auto zoom-in" feature, so every click results in meetings found. This is good for rural areas.
    - Added on-root-server PDF generation. This allows satellites to use the PDF dumps <strong>(IMPORTANT: You MUST use version 1.2.15 satellites!)</strong>.
    - Split the documentation and standalone satellite projects into separate projects. As of version 1.2.15, they will have their own tracking.
    - Made a slight change in the default "weekday" sort. Won't make a difference anywhere but NYC, maybe. The "neighborhood" now sorts after start time.
    
- October 31, 2009 -1.2.14 Release
    - Added a new behavior for the search map. If the map starts off with a zoom less than 8, the first click brings the zoom to 8, then the next click finds meetings. This helps for maps that cover wide areas. It shouldn't affect any of the implementations to date.
    - Fixed <a href="https://sourceforge.net/tracker/index.php?func=detail&aid=2888335&group_id=228122&atid=1073410">a bug</a>, in which the overlay did not properly follow the marker in advanced search mode.
    - Made "Location" into "Location Name", and "Location Information" into "Additional Location Information" for the default meeting data fields. Bit more self-explanatory.
    - Added a language parameter for the standalone satellite server.
    - Removed the "Secondary Parent" capability. The code is still there, and commented out, but it was too confusing. A basic hierarchy, with assigned additional editors is much simpler.
    - Fixed <a href="https://sourceforge.net/tracker/?func=detail&aid=2889829&group_id=228122&atid=1073410">a bug</a>, in which setting a "Parent" Service Body to none failed.
    
- October 27, 2009 -1.2.13 Release
    - Fixed <a href="https://sourceforge.net/tracker/?func=detail&atid=1073410&aid=2886043&group_id=228122">a bug</a> in the main server and the standalone satellite, in which the advanced pane could interfere with the basic pane.
    - Added a circular overlay to the Advanced Search map. Makes it much more usable.
    
- October 25, 2009 -1.2.12 Release
    - Changed the title strings (tool tips) for the map markers to give information about the weekdays, and added one for the center marker.
    - Forgot to close a &lt;label&gt; element in the advanced search screen. It is now closed.
    - Simplified this doc page slightly, and added a header.
    - Spruced up all the Doxygen-generated docs.
    
- October 23, 2009 -1.2.11 Release
    - Fixed a couple of JavaScript bugs that showed up in good ol' IE8. We can always rely on IE to throw a monkey wrench into the works.
    - Added an AJAX throbber to the meeting change submit button. The button becomes replaced by a throbber, until the form is refreshed.
    - Tweaked the default styling for the Advanced Search Type popup to better mesh with the rest of the screen.
    - The new map marker now pans to the marker.
    - Updated the Advanced Search documentation to mention the map.
    
- October 20, 2009 -1.2.10 Release
    - Made the contact form textarea slightly smaller, in order to prevent an ugly "stretch."
    - Now make absolutely sure that there's something to write out for location info, so empty parentheses aren't shown.
    - Changed the background color of the contact form to be a bit more consistent with its container.
    - Fixed a broken div container in the main root server interface (did not cause any problems, but we HATES invalid pages. HATESSSS them. NASSSTY invalid pages &lt;gollum/&gt;).
    - Made the Advanced Search tab able to use the map. This is big juju.
    - Made the "No Results" display on the root server show up as white.
    - There was a problem with PDF dumps being corrupted by embedded linefeeds. The BMLT replaces linefeeds with "; " now.
    
- October 18, 2009 -1.2.9 Release
    - Fixed a minor IE6 bug, in which the response to the contact form submission would trigger a JS error.
    - Made the center marker of a single meeting details display the black center marker, and now ensure that it is not clickable. This was a usability issue.

- October 17, 2009 -1.2.8 Release
    - Fixed a bug that was causing issues with the Contact form of the FSRNA server.
    - Further simplified the "Single Meeting" URL.
    - Fixed a warning in the contact sent screen.
    - Fixed a bug in which Meeting ID searches weren't being done properly (This really only affects administrative use).
    - Made it so that a single meeting ID search when logged in as an admin, results in a list search, as opposed to a single meeting search. This is because you can't edit meetings in single meeting mode. The list search is a list of one meeting.
    - Changed the contact email to have a direct link to the root server, instead of the client satellite.
    
- October 8, 2009 -1.2.7 Release
    - Fixed a bug in the satellite server that caused problems when doing list searches from the advanced search.
    - Fixed a bug in the "More Details" view, in which the GPS POI download link was broken.
    - Fixed an annoying habit the tabs in the search spec had of toggling the map visibility.

- October 6, 2009 -1.2.6 Release
    - Removed some more extraneous parameters from the "one meeting" URL. It should be as simple as possible.
    - Fixed the styling of the center marker info window.
    - Fixed a bug in the root server installer wizard that produced a broken config file (Sorry).
    - Fixed an issue with the way the standalone satellite does its PDF dumps.

- October 3, 2009 -1.2.5 Release
    - Fixed a bug, in which a certain filtered map search list view link did not work.
    - Fixed some bugs in the satellite implementations of the contact form.
    - Did some formatting work to allow more flexibility with the list display.
    - Added the ability to specify 'advanced' in the 'start_view' parameter, which will open the search specification in the Advanced Tab.
    
- October 1, 2009 -1.2.4 Release
    - Fixed a VERY strange Joomla! bug. If there is a multi-page reply in list form, then Joomla croaks when it hits a 'style="display:none"' in one of the two hidden &lt;div&gt; elements at the top of the page. I worked around it by setting the hides via JS. What a kludge...
    
- September 26, 2009 -1.2.3 Release
    - Adjusted the XML output for the Service Body query, in order to accommodate CMS plugin satellites.
    - Fixed a bug in which the class specifier for no results was broken.
    - Added a class definition for no results.
    
- September 17, 2009 -1.2.2 Release
    - Fixed a bug, in which the AJAX handler could fail on some implementations (most embarrassingly, the demo implementation for our satellite server).
    
- September 14, 2009 -1.2.1 Release
    - Added a link to a Service Body site, if a URI is provided. This is in the meeting details form.
    - Added the capability to specify "pre-checked" Service Body checkboxes in the main server Advanced Search tab. However, we still need to add support for this in the plugin satellites.
    
- September 7, 2009 -1.2 Release
    - Added a US-Letter-Sized list option to the printable PDF.
    - Fixed a bug in which clicking on page numbers in the list resulted in an unexpected return to map view.
    - Fixed <a href="https://sourceforge.net/tracker/index.php?func=detail&aid=2845523&group_id=228122&atid=1073410">a bug</a>, in which entering ampersand (&) characters in any of the fields in the editors caused pretty big problems.
    - Fixed <a href="https://sourceforge.net/tracker/?func=detail&aid=2792463&group_id=228122&atid=1073410">a bug</a>, in which deleted Service bodies with nested components weren't updated properly. The 'fix' is kind of a kludge, as we simply reload the page.
    
- September 7, 2009 -1.2b2 Release
    - Added a "busy throbber" to the AJAX contact form, and fixed a couple of bugs that only showed when bad input was entered for the form.
    - Made the booklet a true "chapbook" size, and started work on a full US letter list.
    
- September 6, 2009 -1.2b1 Release
    - Made the booklet PDF use a two-column format.
    - Added a "Contact Us" email form to each meeting, allowing people to send an email to the administrator for a given meeting.

- September 1, 2009 -1.2b0 Release
    - Added support for a basic, standalone-satellite-based PDF generator (booklet).

- August 31, 2009 -1.1.2 Release
    - Moving all documentation, including the user and admin manual, into the docs directory, and created a frameset to display them.
    - Tweaked the Doxygen docs to reflect the new structure.
    - Fixed <a href="https://sourceforge.net/tracker/index.php?func=detail&aid=2846972&group_id=228122&atid=1073410">a bug</a>, in which the list wasn't working in Map view.
    - Fixed an unreported bug, in which zooming the map caused JavaScript slowdowns.
    
- July 26, 2009 -1.1.1 Release
    - Added printout handlers for the six New York meeting lists.
    - Added some base classes and handlers to the satellite server to afford on-the-fly PDF generation.
    - Split up the project structure: Moving the Drupal, WordPress and Joomla! modules off into their own projects. The main satellite server will now only be the standalone and PDF generators.
    - Modified the CSV data export to better accommodate list printing.
    - Added the ability to do searches, based upon a single key/value (example: county or town).
    - Fixed <a href="https://sourceforge.net/tracker/?func=detail&aid=2827219&group_id=228122&atid=1073410">a bug</a>, in which map searches with filters didn't work properly when called from a satellite server.
    - Marked <a href="https://sourceforge.net/tracker/index.php?func=detail&aid=2791321&group_id=228122&atid=1073410">a bug</a> as closed. Not sure how it was fixed (Hate it when that happens).
    - The current server version is now discretely displayed at the bottom, right corner of the search specification screen for the main server.
    - Optimized the standalone satellite server to be even more crazy simple to implement, and wrote up some detailed docs on it.
    
- July 6, 2009 -1.1 Release
    - Added the ability to dump results as a CSV file. If you are logged in as an admin (to the Root Server), you will have a new choice for return format: CSV file.
    - Added the ability to retrieve formats as a CSV file as well.
    
- June 26, 2009 -1.0.1 Release
    - Made the satellite servers use POST for their cURL calls. Increases the robustness a bit.
    - Fixed <a href="https://sourceforge.net/tracker/index.php?func=detail&aid=2809650&group_id=228122&atid=1073410">a bug</a>, in which meeting rollbacks didn't work, and re-enabled the change rollback system and meeting undelete system.
    - Fixed <a href="https://sourceforge.net/tracker/index.php?func=detail&aid=2812707&group_id=228122&atid=1073410">a bug</a>, in which the meeting edit functions did not work in Map View.
    
- June 25, 2009 -1.0.0 Release
    - Tweaked the WordPress plugin to prevent it from slowing down the whole site.
    
- June 23, 2009 -1.0RC6 Release
    - Fixed <a href="https://sourceforge.net/tracker/index.php?func=detail&aid=2810067&group_id=228122&atid=1073410">a bug</a>, in which singular meeting results caused problems with administration.
    - Added a new field to the three CMS plugins, that allows you to specify a specific URL for the "New Search" link.
    - Fixed an old bug in the Joomla! plugin that prevented the support older browsers functionality from working properly.
    
- June 21, 2009 -1.0RC5 Release
    - Removed the Spanish localization. It was not complete, and was only there for testing. It should not be distributed.
    - Added a couple of notes to the <a href="../main_server/AdminManual/">Admin Manual</a> about the user interface issues that affect creating new users or Service Bodies, or deleting Service Bodies with nested Service Bodies.
    - Broke the styles out from inside the WordPress plugin, and put them in their own stylesheet. This makes tweaking them easier.
    - Made the styles for the WordPress plugin far more specific, in an effort to enforce the appearance in a chaotic environment.
    - Fixed <a href="https://sourceforge.net/tracker/index.php?func=detail&aid=2809609&group_id=228122&atid=1073410">a bug</a>, in which the '&' character caused issues with editing meetings. Addressed the same issue with format editing.
    - Fixed <a href="https://sourceforge.net/tracker/index.php?func=detail&aid=2809622&group_id=228122&atid=1073410">a bug</a>, in which the Edit Formats AJAX functionality was broken.
    - Addressed an issue in which slashes could be added to text field value display in the meeting editor.
    - Disabled the change rollback feature for meetings. It isn't working properly, and the fix would be too drastic at this stage.
    
- June 16, 2009 -1.0RC4 Release
    - Changed the name of the WordPress plugin, as it is now available from [WordPress.org](http://wordpress.org/extend/plugins/bmlt-wordpress-satellite-plugin/). This means that any prior installs need to first, deactivate, then reinstall and reactivate the new plugin. However, after this, it will be able to be auto-updated.
    - Fixed a reported bug, in which some of the files used the wrong line-endings.
    
- June 14, 2009 -1.0RC3 Release
    - Fixed <a href="https://sourceforge.net/tracker/index.php?func=detail&aid=2806255&group_id=228122&atid=1073410">a bug</a>, in which the "Search for Text" link in the search specifier was broken for some browsers (notably, IE6).
    
- June 13, 2009 -1.0RC2 Release
    - Tweaked the CSS for the info windows in the map results page to lessen the "overflow" caused by resized text.
    - Fixed a minor bug in the WordPress plugin, in which the tbody element wasn't being properly closed.
    - Fixed <a href="https://sourceforge.net/tracker/index.php?func=detail&aid=2805723&group_id=228122&atid=1073410">a bug</a>, in which the throbber wasn't being displayed properly in the admin control panel.
    - Removed some redundant code in the admin files. The dangers of copy-and-paste programming...
    - Added a note to the last page of the install wizard, instructing the server admin to create first a Service Body Admin, then a Service Body, then meetings.
    - Added a style to the satellite implementations to ensure that the single meeting header starts off at a manageable size.
    - Slightly tweaked the CSS in the WordPress style to keep the "New Search" menu centered.
    - Fixed <a href="https://sourceforge.net/tracker/index.php?func=detail&aid=2805918&group_id=228122&atid=1073410">a bug</a>, in which a long/lat of 0 was considered a valid location, even though it is the ocean off of Africa. 0,0 is now considered an empty long/lat.
    
- June 11, 2009 -1.0RC1 Release
    - Added a bit of CSS padding to the fieldsets in the Advanced Search.
    - Fixed <a href="https://sourceforge.net/tracker/index.php?func=detail&aid=2803269&group_id=228122&atid=1073410">a bug</a> in the WordPress plugin, in which the "New Search" link was bad for default WordPress (non-pretty URIs) installations.
    - Added a link to the root server in the case that JavaScript is required by satellite servers.
    
- June 7, 2009 -1.0b5 Release
    - Vastly improved the code for the standalone satellite server.
    - Added the capability for satellite servers to override the root server setting, and determine the initial view for their Basic Search.
    - Made the call_curl function a wee bit more robust.
    - Fixed <a href="https://sourceforge.net/tracker/index.php?func=detail&aid=2800165&group_id=228122&atid=1073410">a bug</a>, in which we need to append the state to the town in List View.
    - Fixed <a href="https://sourceforge.net/tracker/index.php?func=detail&aid=2802511&group_id=228122&atid=1073410">a bug</a>, in which the map view kept being closed whenever the search was switched between Basic and Advanced.
    - Completed the Administration Guide.
    
- June 5, 2009 -1.0b4 Release
    - Added a shortcut icon.
    - Fixed <a href="https://sourceforge.net/tracker/index.php?func=detail&aid=2801941&group_id=228122&atid=1073410">a bug</a> in WebKit browsers, where the initial map in Basic mode comes up skewed.
    - Wrote an installer "wizard" to make installing a new root server fairly simple.
    - Bundled a "raw" root server into a single [downloadable zip file](http://comdef.svn.sourceforge.net/viewvc/comdef/tags/1.0b4/main_server.zip).
    
- June 1, 2009 -1.0b3 Release
    - Fixed an admin bug that prevented a user from changing their own password or login.
    - Added an SQL file with a "Minimal" BMLT DB. The DB is called "minimal_bmlt", and the admin login is "admin" and the password is "minimal_bmlt".
    
-  May 31, 2009 -1.0b2 Release
    - Fixed several bugs that only showed up when we tried to create a new top-level server.
    - Made the entire background of the local server dark.
    
-  May 31, 2009 -1.0b1 Release
    - Tweaked the CSS for the plugins to give a smoother user experience.
    - Greatly simplified the URIs. The long URIs were causing problems with some servers.
    - Added a new field to the satellite server plugins. This allows support for only js-capable browsers, and speeds up the load a bit.
    - Fixed a bug in the WordPress plugin that gave the wrong URI for the "New Search."
    - Made it so the WordPress plugin will only work on pages. Posts are too problematic for it.
    - Fixed a "Pretty URL" problem in the WordPress plugin.
    - Re-enabled the Googlebar for the meeting editor. It's just too damn useful.
    - Fixed a bug in the create new meeting script that set the wrong weekday.
    - Fixed a bug in the create new meeting script that was also caused by the rearrangement.
    - Removed the Undelete Meeting Feature (temporarily). It has some strange bugs, and isn't important enough a feature to justify the possible instability.
    - Fixed a bug that prevented the edit window from being properly refreshed after a revert.
    - Fixed a bug, in which opening a new meeting details page while an edit window was up covered the edit window, and looked awful. The edit window is now closed.
    - Wrote an Administration Manual.
    - Fixed a silly bug in which the login check would erroneously flag a failure.
    - Fixed yet another bug caused by the new arrangement. In this one, the Edit link in meetings opened from the Map Search went 404.
    - Set the background of the local server dark, so there is no mistaking where you are.
    - Added a note that displays the root server for the local server's main search box.
    - Fixed a bug in which the POI CSV file link was bad for single meetings.
    - Fixed a couple of more admin bugs introduced by the new setup for a standalone server.
    - Fixed a bug that was introduced by a lame attempt to spackle over another bug. Let this be a lesson: ALWAYS FIX IT -DON'T WORKAROUND!
    - Fixed a bug in which the proper JavaScript AJAX URIs were not being set up because of the new indirect index. This only affected control panel admin operations.
    - The [Drupal Module](http://comdef.svn.sourceforge.net/viewvc/comdef/trunk/satellite_server/drupal/) is done.
    - The [Joomla Module](http://comdef.svn.sourceforge.net/viewvc/comdef/trunk/satellite_server/joomla/) is done.
    - The [WordPress Module](http://comdef.svn.sourceforge.net/viewvc/comdef/trunk/satellite_server/wordpress/) is done.
    - Rearranged the location of the submit button in the various plugin admin pages.
    - Removed a server call in the initial form that slowed down the display of the form by about a second and a half.
    - Added a useful profiler class to the utilities.
    
- May 21, 2009 -1.0a5 Release
    - Did a lot of rearranging of the styles and contexts for the local server. This makes it more useful as a standalone editing context.
    - Fixed some bugs in the presentation of the "Deleted Meetings" panel in the control panel.
    - The frameset was raised above the main server. The main_server directory now comprises a full administrative site application.
    - Moved the simple PHP for the satellite server up a level, and set the configuration to reach over to the main server. This makes the satellite_server directory a full standalone meeting search for the local server.
    - Fixed a bug that caused bad links to single meetings in the headers of details opened from list view.
    - Added full options for the Joomla! component. It now works in exactly the same way as does the WordPress plugin.
    - Improved the Joomla! component styling. The Joomla! component is definitely on a par with the WordPress component, which had been ahead of it.
    - Fixed a couple more minor issues in the WordPress plugin.
    
- May 17, 2009 -1.0a4 Release
    - Fixed some formatting issues with the WordPress plugin. The plugin is now enclosed in a table, which enhances the robustness and independence of the plugin.
    - Fixed a bug in the WordPress plugin that didn't record zoom changes properly in the admin
    - Removed the "Display Map Search As Whole Page" option from the WordPress plugin. Requires too much CSS intervention on the part of the implementor.
    - Found and fixed an unnoticed bug that would affect attempts to localize the server.
    - Added an "admin bar" that allows access to the various admin areas when logged in as an admin.
    - Fixed a number of JavaScript issues for logged-in admins.
    - Fixed some IE6 issues (STILL NOT FIXED: Clicking a Region checkbox in Advanced Search does not visibly affect enclosed checkboxes).
    - Added the meta tag [as recommended by Microsoft](http://msdn.microsoft.com/en-us/library/cc817574.aspx), to correct for IE8 deficiencies.
    
- May 15, 2009 -1.0a3 Release
    - Fixed a few WAI AAA issues.
    - Fixed a couple of XHTML 1.0 Strict violations.
    - Do an isset() check on the cookie in the login to prevent warnings.
    - Made sure [iCab](http://icab.de) smiles on every page.
    - [Removed the Google Bar](https://sourceforge.net/tracker/?func=detail&aid=2791909&group_id=228122&atid=1073410). They're gonna stick ads on it, so bye-bye.
    - Fixed a bug in which the GPS POI wasn't downloading correctly for the single meeting display.
    - An older version text editor must have polluted many files with garbage characters. This is fixed.
    - Fixed some styling issues for browsers with JS disabled.
    - Added the [X-UA-Compatible Meta Tag](http://msdn.microsoft.com/en-us/library/cc817574.aspx) to the local server.
    
- May 14, 2009 -1.0a2 Release
    - Fixed [a bug](http://sourceforge.net/tracker/?func=detail&aid=2791387&group_id=228122&atid=1073410) in Meeting Administration, where meetings need to reflect changes in List View</a>
    - Fixed [a bug](http://sourceforge.net/tracker/?func=detail&aid=2791843&group_id=228122&atid=1073410) in Meeting Administration, where the weekday popup menu set the wrong weekday</a>
    - Added the first iteration of [the User Guide](http://magshare.magnaws.com/comdef/UserManual/)

- May 11, 2009 -1.0a1 Release