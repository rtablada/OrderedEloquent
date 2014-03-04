**Warning**

This package is no longer under active development. This was a quick fix for a submitted issue on the Laravel Repository. I will continue to keep an eye on Pull Requests, but will not be actively tracking issues.

Installation
--------------

Add `'rtablada/ordered-eloquent': '~1'` to your composer.json and extend `Rtablada\OrderedEloquent\Model`.

You can also replace the `Eloquent` alias with `Rtablada\OrderedEloquent\Model` in your `app/config/app.php`.


Use
------------

Set the `$orderBy` property to the column you want all queries sorted by.

> **Note this sort will occur on ALL queries**

You can also set the `$sortDir` to set the sort direction (this defaults to `ASC`).
