# Tito WordPress Plugin

Probably the best event management software on the web, Tito brings ticket sales directly to your website.

## Description

[Tito](https://ti.to) pride themselves on providing one of the best event management applications on the web. Simple, powerful event software.

Trusted by people who care about the experience.

Running events can be stressful. As event organisers ourselves, we know this well.

Tito is designed to provide a stress-free experience for organisers and attendees. We sweat the software details so that you can focus on planning a great event.

You can quickly start selling tickets by connecting your Tito account to any of following payment solutions:

* [Stripe](http://stripe.com/)
* [Pin Payments](https://pin.net.au/)
* [Realex Payments](http://realexpayments.ie/)
* [PayPal](http://paypal.com/)

Sign up for an account at [https://ti.to](https://ti.to) and create an event.

Using the information provided to your account, quickly setup Tito to run and sell tickets directly from your WordPress website or blog!

## Installation

1. Download 'tito.zip' and expand into your '/wp-content/plugins/' directory, or install directly by clicking 'Add New' on your plugins page, search for 'Tito' and click 'Install Now'
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Add your event path to the Tito settings page. For example, if the event path is "https://ti.to/ultimateconf/2013", then the event path is: ultimateconf/2013
4. Add the other default settings.
5. Place `do_shortcode('[tito]');` in your template code or add the shortcode '[tito]' to your content where you want the ticket sales box or button to appear
6. If you wish to customise the display in the template using the shortcode, all settings can be passed to the plugin using the shortcode.
For example: `[tito event="ultimateconf/2013" button="true" label="Get yer tickets" releases="3elajg6qcxu"]` This also applies to the 'do_shortcode' function.

## Frequently Asked Questions

**Do I need a Tito account for this plugin to work?**

Yes, you will require a Tito account. The plugin makes use of the title of your event to create the correct ticket sales portal on your site. Without an account, this will not be possible. But it's free to create and simple to set up an account, so don't worry!

**There's no ticket sales appearing on my site!**

Have you included the '[tito]' shortcode (and/or options) in your content or run the function `do_shortcode('[tito]');` in the template of your site?

**I want a widget. Surely there should be a widget. Why isn't there a widget?**

This is the first Tito plugin so we need to gauge requirements. This may come in a future release. And don't call me Shirley.

**Adding Tito ticket sales is simple! Why the hell is there a plugin?!**

This is true. All we aim to do with the plugin is provide the simplest interface possible to users so that those who do not wish to get their hands dirty in the code, can install and use Tito easily on their site. Also, users on wordpress.com will not have the same flexibility of adding the content to their sites as self-hosted users of wordpress.org.

**I have an idea to make the plugin better!**

Great, we'd love to hear it. We've got a [Google Moderator page](http://www.google.com/moderator/?authuser=1#15/e=219831&t=219831.40) you can open requests on.

**Let me buy you a beer!**

Lovely, thanks! Guinness please!

## Screenshots
1. Tito admin screen
2. Ticket sales as embedded form
3. Ticket sales as a button
4. Ticket sales as a button pop up purchase form

## Changelog
**_0.5_**

Add banner image for plugin and icon imagery for dashboard

**_0.3_**

Updates to readme and add shortcode argument handling

**_0.1_**

Very first release. Be gentle.