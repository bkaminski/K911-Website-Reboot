# K911 Website Re-Boot Project
[![Open Source Love](https://img.shields.io/badge/Open%20Source-%20%E2%9D%A4%20-ff69b4.svg)](https://opensource.org/) [![License: GPL v3](https://img.shields.io/badge/License-GPL%20v3-blue.svg)](https://www.gnu.org/licenses/gpl-3.0) [![WordPress](https://img.shields.io/wordpress/v/akismet.svg)](https://github.com/bkaminski/K911-Website-Reboot/) [![PHP version from PHP-Eye](https://img.shields.io/php-eye/symfony/symfony.svg)](https://github.com/bkaminski/K911-Website-Reboot/) [![Bootstrap version from Bootstrap](https://img.shields.io/badge/Bootstrap-v4.1.0-563d7c.svg)](https://getbootstrap.com/)

Design a Custom Wordpress Theme for K911 Animal Transport Service

The objective of this project is to renew and revive a website that was designed using a "Website Builder" software package on a hosting service. A snapshot of the current/to be replaced website can be seen below:

## Preface:
While I have been making custom WordPress themes for many years now, this is my first public GNU/GPL release that I am fully tracking here. While this WordPress Theme -- when complete -- will be available for any and all to download and use, keep in mind that this build is custom to client spec. You will find a lot of client specific taxonomy and features. You could always create a child theme if you would like to use the base foundation and build on top.

All I ask in return is to be notified when and if you decide to use this theme upon completion/release. I'm just interested to see what is done with it, no other reasons really lol. I look forward to any and all constructive criticism, ideas and code review.

### Current Website Snapshot
<a href="https://web.archive.org/web/20170929060439/http://www.k911online.com/">Available Here</a>

### Phase 1: WordPress Theme Development
It has been decided that moving the website to a CMS platform such as WordPress wipll provide for an easier to update website for the client. That being said, this repo is only tracking the WordPress "Theme" that is being built for the client. No need to track the entire WordPress engine. This theme will work on any WP build as an active parent theme and will be delivered via .zip file as all other WP themes are.

Theme customizer options will be added to the theme in order to allow client to update specific portions of the website with ease. Bootstrap 4 is being used to handle the need for a responsive library that is mobile-first.

The aim of the project is to allow easier requests for transport for people in emergent situations with their pets. The current website is difficult to navigate, especially on mobile. It also leaves the end user unsure of what steps to take to get their injured pet transported to a veterinary clinic.

The final product will be a fully functional CMS using WordPress that will allow for easy client updating and app-like design on mobile phones with a focus on those in emergent situations that need to take action immediately.

#### Dependencies:
Most dependencies being called in via functions.php and CDN.
<ul>
<li>WordPress 4.9.x</li>
<li>Bootstrap 4.0.0</li>
<li>jQuery Ver. 1.12.4</li>
<li>FontAwesome Ver. 5.0.6</li>
<li>Ajax Popper JS</li>
<li>JS Cookie (local/included in build)</li>
</ul>

### Phase 2: Client Review
The WordPress theme has been designed pending client review. The WordPress theme now resides on a QAT server for client access to review and request changes. Client is currently reviewing website for integrity, design, ease of use, and will most likely come back with change requests. All change requests made by client will be included in phase 2.

### Phase 3: Apply Client Edits and WordPress Theme Customizer Functions
After the client has reviewed the site and made their change requests, I will ask them what areas (that they currently can not edit) that they would like the ability to edit. For example, the slide images in the Bootstrap carousel. I will be building a Theme Customizer function to allow for quick updating of the images, headline text, and paragraph text as well as image "alt" text and link to page. Any and all changes and theme customizer functions will take place in this phase.

### Phase 4: Soft Launch of Website
The "soft" launch is an unannounced launch of a new website in an effort to get feedback from users. It also allows for more UAT testing and debugging. Once all is agreed upon after soft launch, a hard launch of the website will follow and complete the project.
