<?php
$topdir = "../../..";
$title = "shmem_longlong_fadd(3) man page (version 3.1.4)";
$meta_desc = "Open MPI v3.1.4 man page: shmem_longlong_fadd(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
    <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>

<p> <i><i>shmem_int4_fadd</i>(3)</i>, <i><i>shmem_int8_fadd</i>(3)</i>, <i><i>shmem_int_fadd</i>(3)</i>, <i><i>shmem_long_fadd</i>(3)</i>,
<i><i>shmem_longlong_fadd</i>(3)</i> - Performs an atomic fetch-and-add operation on a remote
data object
<h2><a name='sect1' href='#toc1'>Synopsis</a></h2>

<p> C or C++: <br>
<pre>#include &lt;mpp/shmem.h&gt;
int shmem_int_fadd(int *target, int value, int pe);
long shmem_long_fadd(long *target, long value, int pe);
long long shmem_longlong_fadd(long long *target, longlong value,
  int pe);
</pre> Fortran: <br>
<pre>INCLUDE "mpp/shmem.fh"
INTEGER pe
INTEGER(KIND=4) SHMEM_INT4_FADD, ires, target, value
ires = SHMEM_INT4_FADD(target, value, pe)
INTEGER(KIND=8) SHMEM_INT8_FADD, ires, target, value
ires = SHMEM_INT8_FADD(target, value, pe)
</pre>
<h2><a name='sect2' href='#toc2'>Description</a></h2>

<p> shmem_fadd functions perform an atomic fetch-and-add operation.
An atomic fetch-and-add operation fetches the old target and adds value to
target without the possibility of another process updating target between
the time of the fetch and the update. These routines add value to target
on Processing Element (PE) pe and return the previous contents of target
as an atomic operation. <p>
The arguments are as follows:
<dl>

<dt>target </dt>
<dd>The remotely
accessible integer data object to be updated on the remote PE. The type
of target should match that implied in the SYNOPSIS section. </dd>

<dt>value </dt>
<dd>The value
to be atomically added to target. The type of value should match that implied
in the SYNOPSIS section. </dd>

<dt>pe </dt>
<dd>An integer that indicates the PE number on which
target is to be updated. If you are using Fortran, it must be a default
integer value. </dd>
</dl>
<p>

<h2><a name='sect3' href='#toc3'>Notes</a></h2>

<p> The term remotely accessible is defined in <i><i>intro_shmem</i>(3)</i>.

<h2><a name='sect4' href='#toc4'>Return Values</a></h2>

<p> The contents that had been at the target address on the remote
PE prior to the atomic addition operation.
<h2><a name='sect5' href='#toc5'>See Also</a></h2>

<p> <i><i>intro_shmem</i>(3)</i>  <p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Synopsis</a></li>
<li><a name='toc2' href='#sect2'>Description</a></li>
<li><a name='toc3' href='#sect3'>Notes</a></li>
<li><a name='toc4' href='#sect4'>Return Values</a></li>
<li><a name='toc5' href='#sect5'>See Also</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
