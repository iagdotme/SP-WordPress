SP WordPress
-----

WordPress installation with the Roots theme and the plugins we use for all our sites



Steps
---

Remove W3TC cache from Better WP Security File Changes on /wp-admin/admin.php?page=better-wp-security-intrusiondetection
Add `wp-content/w3tc` to exclude


Replace code from /wp-content/plugins/w3-total-cache/lib/W3/Plugin:

```ob_start(array(
&$this,
'ob_callback'
));```

with...

```if ($this->can_ob()) {

}```

(via: http://www.tharunpkarun.com/2013/03/remove-w3-total-cache-comment-footer/)