=============================
 Email confirmed non captcha
=============================

This is a plugin for the ConfirmEdit MediaWiki extension. ConfirmEdit gives us
the additional ``addurl`` permission that MediaWiki doesn't have. I set this
``addurl`` permission to require a captcha and then wrote this captcha
plugin for the ConfirmEdit extension.

The gist of it is that it always rejects changes that add urls with a nice
message if the user isn't in the emailconfirmed group.

I wrote this while working at PCF. Initially it worked super duper, but later
I think it worked less well.

Regardless, I'm moving it from the original repository to github where it's
less likely to disappear.


What's with the name?
=====================

The name is ridiculous---I know. But it is what it is.


Bugs/Issues
===========

If you have issues, create a new issue in the issue tracker at
`<https://github.com/willkg/ecnc/issues>`_.

Pull requests would be super duper.


History
=======

Announcement blog post: http://bluesock.org/~willg/blog/miro/spam_reduction
