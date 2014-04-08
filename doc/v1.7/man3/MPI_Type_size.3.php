<?php
$topdir = "../../..";
$title = "MPI_Type_size(3) man page (version 1.7.4)";
$meta_desc = "Open MPI v1.7.4 man page: MPI_TYPE_SIZE(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
    <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Type_size</b>, <b><a href="../man3/MPI_Type_size_x.3.php">MPI_Type_size_x</a></b> - Returns the number of bytes occupied
by entries in a data type.
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Type_size(MPI_Datatype datatype, int *size)
int <a href="../man3/MPI_Type_size_x.3.php">MPI_Type_size_x</a>(MPI_Datatype datatype, MPI_Count *size)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
MPI_TYPE_SIZE(DATATYPE, SIZE, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;DATATYPE, SIZE, IERROR
<a href="../man3/MPI_Type_size_x.3.php">MPI_TYPE_SIZE_X</a>(DATATYPE, SIZE, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;DATATYPE
        INTEGER(KIND=MPI_COUNT_KIND) SIZE
        INTEGER IERROR
</pre>
<h2><a name='sect4' href='#toc4'>C++ Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int Datatype::Get_size() const
</pre>
<h2><a name='sect5' href='#toc5'>Input Parameter</a></h2>

<dl>

<dt>datatype       </dt>
<dd>Datatype (handle). <p>

<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Output Parameters</a></h2>

<dl>

<dt>size
     </dt>
<dd>Datatype size (integer). <p>
</dd>

<dt>IERROR </dt>
<dd>Fortran only: Error status (integer).

<p> </dd>
</dl>

<h2><a name='sect7' href='#toc7'>Description</a></h2>
MPI_Type_size returns the total size, in bytes, of the entries
in the type signature associated with datatype; i.e., the total size of the
data in a message that would be created with this datatype. Entries that
occur multiple times in the datatype are counted with their multiplicity.
For either function, if the <i>size</i> parameter cannot express the value to
be returned (e.g., if the parameter is too small to hold the output value),
it is set to MPI_UNDEFINED.
<p>
<h2><a name='sect8' href='#toc8'>Errors</a></h2>
Almost all MPI routines return an error
value; C routines as the value of the function and Fortran routines in
the last argument. C++ functions do not return errors. If the default error
handler is set to MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception
mechanism will be used to throw an MPI::Exception object. <p>
Before the error
value is returned, the current MPI error handler is called. By default,
this error handler aborts the MPI job, except for I/O function errors. The
error handler may be changed with <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined
error handler MPI_ERRORS_RETURN may be used to cause error values to be
returned. Note that MPI does not guarantee that an MPI program can continue
past an error.
<p>
<h2><a name='sect9' href='#toc9'>Fortran 77 Notes</a></h2>
The MPI standard prescribes portable Fortran
syntax for the <i>SIZE</i> argument of <a href="../man3/MPI_Type_size_x.3.php">MPI_Type_size_x</a> only for Fortran 90. FORTRAN
77 users may use the non-portable syntax <p>
<br>
<pre>     INTEGER*MPI_COUNT_KIND SIZE
</pre><p>
where MPI_COUNT_KIND is a constant defined in mpif.h and gives the length
of the declared integer in bytes.
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
<li><a name='toc6' href='#sect6'>Output Parameters</a></li>
<li><a name='toc7' href='#sect7'>Description</a></li>
<li><a name='toc8' href='#sect8'>Errors</a></li>
<li><a name='toc9' href='#sect9'>Fortran 77 Notes</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");