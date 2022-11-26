INTRODUCTION
------------

Custom breadcrumbs helps the user to create and manage breadcrumbs menu on all
content entity pages and other like views, page manager, controllers.

REQUIREMENTS
------------

This module requires the following modules:

 * Tokens (https://www.drupal.org/project/tokens)

INSTALLATION
------------

 * Install as you would normally install a contributed Drupal module. Visit
   https://www.drupal.org/node/1897420 for further information.

CONFIGURATION
-------------

 * Configure the user permissions in Administration » People » Permissions:

 * Customize the basic breadcrumbs settings in Configuration » User interface » Custom breadcrumbs settings

 * You can add a new breadcrumbs instances in Structure » Custom breadcrumbs

USAGE
-------------

* go to Structure » Custom breadcrumbs and add a new breadcrumbs instance
* you can create breadcrumbs for your entities like nodes or pages using path
* remember to check "Enabled" status
* setup urls and titles, one per line
* you can use an extra vars like <nolink> or <term_hierarchy:field_name> to attach taxonomy tree to breadcrumbs
* if you want to use query value from token, for example for search results,
you have to define extra cache contexts ```url.query_args:search``` where search is your query key
* On every content type manage display page, you can display breadcrumbs like field,
this solution has been designed for displaying breadcrumbs on node teaser display mode in
search results.


MAINTAINERS
-----------

Current maintainers:
 * Szczepan Musial (lamp5) - https://www.drupal.org/u/lamp5

This project has been sponsored by:
 * Abventor

   A Drupal Development Team Who Deliver.
   We create flexible solutions that companies and organizations from around the world use.

