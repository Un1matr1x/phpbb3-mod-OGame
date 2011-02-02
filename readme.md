phpBB 3 Modification - OGame
============================

This is a modification for the burning board software [![phpBB](http://www.phpbb.com/theme/images/logos/blue/160x52.png)](http://www.phpbb.com).

Following features will be add:

* "connect" your GF-Portal-ID & CR-Hosting-ID to your board profile
* prettify CR-Hosting-Links
* prettify Espionagereports (working for ogame \<dot\> ar|br|cz|de|dk|es|fi|fr|hr|hr|hu|it|lt|lv|mx|nl|no|org|pt|ro|sk|se)

Table of Content
----------------
1. License
2. Installation
3. Known Bugs and Issues


1. License
----------

This MOD has been licensed under the following license:
http://opensource.org/licenses/gpl-license.php GNU General Public License v2
You can also take a look into the license.txt inside this package.

The included Mod (ScannBB) was initialy by eXochron (aka skYforge) without any license information and re-released by Pionier ( http://www.phpbb.com/community/memberlist.php?mode=viewprofile&un=Pionier | pionier@allytools.de ) under GNU General Public License v2.


2. Installation
---------------
This MOD supports [![AutoMod](http://www.phpbb.com/theme/images/mods/automod_logo.png)](http://www.phpbb.com/mods/automod/) for easy installation.

If you want to install this modification you have to open the install_ogame_mod.xml with a browser you like - this is a [![ModX](http://www.phpbb.com/theme/titles/modx.png)](http://www.phpbb.com/mods/modx/) File.


3. Known Bugs and Issues
------------------------

* on low resolutions the the mmocard & cr-hosting-signature might reach out of the image and/or is coverd by other parts of the board
	with the -X px in the buttons.css this shouldn't be an issuse anymore, but maybe i will make the mouseovers ACP-Setable
* The former mmogame.com-page is still in the source-code & config as name
	dunno if i will ever change the names, "critical-code" is allready changed, even if gf uses redirects for old requests
* ogame.css is full of crapy stuff
	maybe i could reduce this when i take a closer look :/