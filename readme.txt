=== Query monitor Twig profile ===
Contributors: nielsdeblaauw
Tags: timber, twig, query monitor, performance, profile, speed, template, theme
Requires at least: 4.9.0
Tested up to: 5.5.1
Requires PHP: 7.0
Stable tag: 1.0.3
License: MIT
License URI: https://raw.githubusercontent.com/NielsdeBlaauw/query-monitor-twig-profile/master/LICENSE

Displays Twig profiler output in Query Monitor.

== Description ==
Find out which pages are slow, and why! Immediately see profiling information from twig in your Query Monitor toolbar. 

Automatically integrates with Timber.

== Installation ==
1. Install the plugin.
2. Activate it.
3. Check the 'Twig profile' tab in Query Monitor.
4. Speed up your site!

== Frequently Asked Questions ==
# Can I use it with other frameworks that use twig?
Definitely. Just add a twig profiler extension to your twig instance and submit it to the collector.

```
if ( function_exists( 'NdB\QM_Twig_Profile\collect' ) ) {
	$twig = \NdB\QM_Twig_Profile\collect( $twig );
}
```

= Privacy Statement =
Query Monitor Twig Profile is private by default and always will be. It does not persistently store any of the data that it collects. It does not send data to any third party, nor does it include any third party resources.

== Screenshots ==
1. The Twig profile tab in Query Monitor (light mode)
2. The Twig profile tab in Query Monitor (dark mode)

== Changelog ==
next
* Support for dark mode.
* Support direct links to the templates in the editor.
* Makes it easier to profile a custom Twig instance.

1.0.3
* Removes assets release library.
* Uses readme.txt file.

1.0.2
* Fixes readme.

1.0.1
* Adds automated releases from GitHub.
* Improves readme.
* Fixes several type hints.
* Adds CI checks (phpstan, phpcs, phpcompat, composer validate).
* Defines required PHP version as >7.0.

1.0.0:
* Initial release.