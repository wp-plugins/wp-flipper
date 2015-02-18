=== Plugin Name ===
Contributors: aumsrini
Tags: wordpress,wordpress flipper,content flipper,image flipper,post flipper,animate flipper,wordpress flipper
Requires at least: 3.8
Tested up to: 4.1
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


== Description ==

It is very simple plugin. you can flip the wordpress content in any page or post. 

Just give the shortcode for flipping the content.

The following steps in given below for flipping the content.

Front side

Step 1 Type the short code "[flipper_front]
step 2 Type your content that is in the form of text or images and any form of html tags
step 3 Enclosing short code [/flipper_front] 

There are three Parameters  for setting the style in dynamic 

d 1: width
parameter value=numeric

parameter 2: height
parameter value=numeric

parameter 3: bgcolor
parameter value=colorname or hexadecimal value

For example
[flipper_front width="200 height="200" bgcolor="red"] your content  [/flipper_front]



Back side
Step 1 Type the short code "[flipper_back]
step 2 Type your content that is in the form of text or images and any form of html tags
step 3 Enclosing short code [/flipper_back]

In back content shortcode, you can set the paremeter for background color only. 

parameter 1: bgcolor
parameter value=colorname or hexadecimal value

For example
[flipper_back bgcolor="red"] your content  [/flipper_back]

This plugin is used to flip the any wordpress content and  image.

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload `wp-flipper` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Done!

== Frequently Asked Questions ==

= A question that someone might have =

An answer to that question.

= Can I flip any wordpress content? =

Yes, you can flip the any wordpress content or image in inside the shortcode.

= Can I flip the content in vertical? =

No, But I will option for vertical soon.

= Is it support for all browsers? =

It supports in IE,Firefox and Chrome.


== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the /assets directory or the directory that contains the stable readme.txt (tags or trunk). Screenshots in the /assets 
directory take precedence. For example, `/assets/screenshot-1.png` would win over `/tags/4.3/screenshot-1.png` 
(or jpg, jpeg, gif).
2. This is the second screen shot

== Changelog ==

= 1.0 =
* Initial verson.
