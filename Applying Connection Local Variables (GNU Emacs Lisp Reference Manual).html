<!DOCTYPE html>
<html><!-- Created by GNU Texinfo 7.0.3, https://www.gnu.org/software/texinfo/ --><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Applying Connection Local Variables (GNU Emacs Lisp Reference Manual)</title>

<meta name="description" content="Applying Connection Local Variables (GNU Emacs Lisp Reference Manual)">
<meta name="keywords" content="Applying Connection Local Variables (GNU Emacs Lisp Reference Manual)">
<meta name="resource-type" content="document">
<meta name="distribution" content="global">
<meta name="Generator" content="makeinfo">
<meta name="viewport" content="width=device-width,initial-scale=1">

<link rev="made" href="mailto:bug-gnu-emacs@gnu.org">
<link rel="icon" type="image/png" href="https://www.gnu.org/graphics/gnu-head-mini.png">
<meta name="ICBM" content="42.256233,-71.006581">
<meta name="DC.title" content="gnu.org">
<style type="text/css">
@import url('/software/emacs/manual.css');
</style>
</head>

<body lang="en">
<div class="subsection-level-extent" id="Applying-Connection-Local-Variables">
<div class="nav-panel">
<p>
Previous: <a href="https://www.gnu.org/software/emacs/manual/html_node/elisp/Connection-Local-Profiles.html" accesskey="p" rel="prev">Connection Local Profiles</a>, Up: <a href="https://www.gnu.org/software/emacs/manual/html_node/elisp/Connection-Local-Variables.html" accesskey="u" rel="up">Connection Local Variables</a> &nbsp; [<a href="https://www.gnu.org/software/emacs/manual/html_node/elisp/index.html#SEC_Contents" title="Table of contents" rel="contents">Contents</a>][<a href="https://www.gnu.org/software/emacs/manual/html_node/elisp/Index.html" title="Index" rel="index">Index</a>]</p>
</div>
<hr>
<h4 class="subsection" id="Applying-Connection-Local-Variables-1">12.14.2 Applying Connection Local Variables</h4>
<a class="index-entry-id" id="index-connection-local-variables_002c-applying"></a>

<p>When writing connection-aware code, you’ll need to collect, and
possibly apply, any connection-local variables.  There are several
ways to do this, as described below.
</p>
<dl class="first-deffn first-defun-alias-first-deffn">
<dt class="deffn defun-alias-deffn" id="index-hack_002dconnection_002dlocal_002dvariables"><span class="category-def">Function: </span><span><strong class="def-name">hack-connection-local-variables</strong> <var class="def-var-arguments">criteria</var><a class="copiable-link" href="#index-hack_002dconnection_002dlocal_002dvariables"> ¶</a></span></dt>
<dd><p>This function collects applicable connection-local variables
associated with <var class="var">criteria</var> in
<code class="code">connection-local-variables-alist</code>, without applying them.
Example:
</p>
<div class="example">
<div class="group"><pre class="example-preformatted">(hack-connection-local-variables
  '(:application tramp :protocol "ssh" :machine "localhost"))
</pre></div><pre class="example-preformatted">
</pre><div class="group"><pre class="example-preformatted">connection-local-variables-alist
     ⇒ ((null-device . "/dev/null")
        (shell-login-switch . "-l")
        (shell-interactive-switch . "-i")
        (shell-command-switch . "-c")
        (shell-file-name . "/bin/bash"))
</pre></div></div>
</dd></dl>

<dl class="first-deffn first-defun-alias-first-deffn">
<dt class="deffn defun-alias-deffn" id="index-hack_002dconnection_002dlocal_002dvariables_002dapply"><span class="category-def">Function: </span><span><strong class="def-name">hack-connection-local-variables-apply</strong> <var class="def-var-arguments">criteria</var><a class="copiable-link" href="#index-hack_002dconnection_002dlocal_002dvariables_002dapply"> ¶</a></span></dt>
<dd><p>This function looks for connection-local variables according to
<var class="var">criteria</var>, and immediately applies them in the current buffer.
</p></dd></dl>

<dl class="first-deffn first-defmac-alias-first-deffn">
<dt class="deffn defmac-alias-deffn" id="index-with_002dconnection_002dlocal_002dapplication_002dvariables"><span class="category-def">Macro: </span><span><strong class="def-name">with-connection-local-application-variables</strong> <var class="def-var-arguments">application &amp;rest body</var><a class="copiable-link" href="#index-with_002dconnection_002dlocal_002dapplication_002dvariables"> ¶</a></span></dt>
<dd><p>Apply all connection-local variables for <code class="code">application</code>, which are
specified by <code class="code">default-directory</code>.
</p>
<p>After that, <var class="var">body</var> is executed, and the connection-local variables
are unwound.  Example:
</p>
<div class="example">
<div class="group"><pre class="example-preformatted">(connection-local-set-profile-variables
  'my-remote-perl
  '((perl-command-name . "/usr/local/bin/perl5")
    (perl-command-switch . "-e %s")))
</pre></div><pre class="example-preformatted">
</pre><div class="group"><pre class="example-preformatted">(connection-local-set-profiles
  '(:application my-app :protocol "ssh" :machine "remotehost")
  'my-remote-perl)
</pre></div><pre class="example-preformatted">
</pre><div class="group"><pre class="example-preformatted">(let ((default-directory "/ssh:remotehost:/working/dir/"))
  (with-connection-local-application-variables 'my-app
    do something useful))
</pre></div></div>
</dd></dl>

<dl class="first-defvr first-defvar-alias-first-defvr">
<dt class="defvr defvar-alias-defvr" id="index-connection_002dlocal_002ddefault_002dapplication"><span class="category-def">Variable: </span><span><strong class="def-name">connection-local-default-application</strong><a class="copiable-link" href="#index-connection_002dlocal_002ddefault_002dapplication"> ¶</a></span></dt>
<dd><p>The default application, a symbol, to be applied in
<code class="code">with-connection-local-variables</code>.  It defaults to <code class="code">tramp</code>,
but you can let-bind it to change the application temporarily
(see <a class="pxref" href="https://www.gnu.org/software/emacs/manual/html_node/elisp/Local-Variables.html">Local Variables</a>).
</p>
<p>This variable must not be changed globally.
</p></dd></dl>

<dl class="first-deffn first-defmac-alias-first-deffn">
<dt class="deffn defmac-alias-deffn" id="index-with_002dconnection_002dlocal_002dvariables"><span class="category-def">Macro: </span><span><strong class="def-name">with-connection-local-variables</strong> <var class="def-var-arguments">&amp;rest body</var><a class="copiable-link" href="#index-with_002dconnection_002dlocal_002dvariables"> ¶</a></span></dt>
<dd><p>This is equivalent to
<code class="code">with-connection-local-application-variables</code>, but uses
<code class="code">connection-local-default-application</code> for the application.
</p></dd></dl>

<dl class="first-deffn first-defmac-alias-first-deffn">
<dt class="deffn defmac-alias-deffn" id="index-setq_002dconnection_002dlocal"><span class="category-def">Macro: </span><span><strong class="def-name">setq-connection-local</strong> <var class="def-var-arguments">[symbol form]…</var><a class="copiable-link" href="#index-setq_002dconnection_002dlocal"> ¶</a></span></dt>
<dd><p>This macro sets each <var class="var">symbol</var> connection-locally to the result of
evaluating the corresponding <var class="var">form</var>, using the connection-local
profile specified in <code class="code">connection-local-profile-name-for-setq</code>; if
the profile name is <code class="code">nil</code>, this macro will just set the variables
normally, as with <code class="code">setq</code> (see <a class="pxref" href="https://www.gnu.org/software/emacs/manual/html_node/elisp/Setting-Variables.html">Setting Variable Values</a>).
</p>
<p>For example, you can use this macro in combination with
<code class="code">with-connection-local-variables</code> or
<code class="code">with-connection-local-application-variables</code> to lazily
initialize connection-local settings:
</p>
<div class="example">
<div class="group"><pre class="example-preformatted">(defvar my-app-variable nil)

(connection-local-set-profile-variables
 'my-app-connection-default-profile
 '((my-app-variable . nil)))

(connection-local-set-profiles
 '(:application my-app)
 'my-app-connection-default-profile)
</pre></div><pre class="example-preformatted">
</pre><div class="group"><pre class="example-preformatted">(defun my-app-get-variable ()
  (with-connection-local-application-variables 'my-app
    (or my-app-variable
        (setq-connection-local my-app-variable
                               do something useful))))
</pre></div></div>
</dd></dl>

<dl class="first-defvr first-defvar-alias-first-defvr">
<dt class="defvr defvar-alias-defvr" id="index-connection_002dlocal_002dprofile_002dname_002dfor_002dsetq"><span class="category-def">Variable: </span><span><strong class="def-name">connection-local-profile-name-for-setq</strong><a class="copiable-link" href="#index-connection_002dlocal_002dprofile_002dname_002dfor_002dsetq"> ¶</a></span></dt>
<dd><p>The connection-local profile name, a symbol, to use when setting
variables via <code class="code">setq-connection-local</code>.  This is let-bound in the
body of <code class="code">with-connection-local-variables</code>, but you can also
let-bind it yourself if you’d like to set variables on a different
profile.
</p>
<p>This variable must not be changed globally.
</p></dd></dl>

<dl class="first-defvr first-defvar-alias-first-defvr">
<dt class="defvr defvar-alias-defvr" id="index-enable_002dconnection_002dlocal_002dvariables"><span class="category-def">Variable: </span><span><strong class="def-name">enable-connection-local-variables</strong><a class="copiable-link" href="#index-enable_002dconnection_002dlocal_002dvariables"> ¶</a></span></dt>
<dd><p>If <code class="code">nil</code>, connection-local variables are ignored.  This variable
shall be changed temporarily only in special modes.
</p></dd></dl>

</div>
<hr>
<div class="nav-panel">
<p>
Previous: <a href="https://www.gnu.org/software/emacs/manual/html_node/elisp/Connection-Local-Profiles.html">Connection Local Profiles</a>, Up: <a href="https://www.gnu.org/software/emacs/manual/html_node/elisp/Connection-Local-Variables.html">Connection Local Variables</a> &nbsp; [<a href="https://www.gnu.org/software/emacs/manual/html_node/elisp/index.html#SEC_Contents" title="Table of contents" rel="contents">Contents</a>][<a href="https://www.gnu.org/software/emacs/manual/html_node/elisp/Index.html" title="Index" rel="index">Index</a>]</p>
</div>





</body></html>