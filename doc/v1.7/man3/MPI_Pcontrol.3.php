<?php
$topdir = "../../..";
$title = "MPI_Pcontrol(3) man page (version 1.7.4)";
$meta_desc = "Open MPI v1.7.4 man page: MPI_PCONTROL(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
  <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Pcontrol</b> - Controls profiling.
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Pcontrol(const int level, ... )
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
MPI_PCONTROL(LEVEL)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;LEVEL
</pre>
<h2><a name='sect4' href='#toc4'>C++ Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
void Pcontrol(const int level, ...)
</pre>
<h2><a name='sect5' href='#toc5'>Input Parameter</a></h2>

<dl>

<dt>level </dt>
<dd>Profiling level.
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Description</a></h2>
MPI libraries themselves
make no use of this routine; they simply return immediately to the user
code. However the presence of calls to this routine allows a profiling package
to be explicitly called by the user.   <p>
Since MPI has no control of the implementation
of the profiling code, we are unable to specify precisely the semantics
that will be provided by calls to MPI_Pcontrol. This vagueness extends to
the number of arguments to the function, and their datatypes.  <p>
However to
provide some level of portability of user codes to different profiling
libraries, we request the following meanings for certain values of level:
<br>

<dl>

<dt>  o </dt>
<dd>level==0<tt> </tt>&nbsp;<tt> </tt>&nbsp;Profiling is disabled. <br>
</dd>

<dt>  o </dt>
<dd>level==1<tt> </tt>&nbsp;<tt> </tt>&nbsp;Profiling is enabled at a normal default level of detail. <br>
</dd>

<dt>  o </dt>
<dd>level==2<tt> </tt>&nbsp;<tt> </tt>&nbsp;Profile buffers are flushed. (This may be a no-op in some profilers).
<br>
</dd>

<dt>  o </dt>
<dd>All other values of level have profile library-defined effects and additional
arguments.   </dd>
</dl>
<p>
<p>
We also request that the default state after <a href="../man3/MPI_Init.3.php">MPI_Init</a> has been
called is for profiling to be enabled at the normal default level (i.e.,
as if MPI_Pcontrol had just been called with the argument 1). This allows
users to link with a profiling library and obtain profile output without
having to modify their source code at all. <p>
The provision of MPI_Pcontrol
as a no-op in the standard MPI library allows users to modify their source
code to obtain more detailed profiling information, but still be able to
link exactly the same code against the standard MPI library.
<p>
<h2><a name='sect7' href='#toc7'>Notes</a></h2>
This
routine provides a common interface for profiling control. The interpretation
of level and any other arguments is left to the profiling library.  <p>
This
function does not return an error value. Consequently, the result of calling
it before <a href="../man3/MPI_Init.3.php">MPI_Init</a> or after <a href="../man3/MPI_Finalize.3.php">MPI_Finalize</a> is undefined.
<p> <p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Syntax</a></li>
<li><a name='toc2' href='#sect2'>C Syntax</a></li>
<li><a name='toc3' href='#sect3'>Fortran Syntax</a></li>
<li><a name='toc4' href='#sect4'>C++ Syntax</a></li>
<li><a name='toc5' href='#sect5'>Input Parameter</a></li>
<li><a name='toc6' href='#sect6'>Description</a></li>
<li><a name='toc7' href='#sect7'>Notes</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");